<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('sort_order')
            ->latest()
            ->get();

        return view('admin.pages.video-list', compact('videos'));
    }

    public function create()
    {
        return view('admin.pages.video-create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate(
            [
                'title' => ['required', 'string', 'max:255'],
                'slug' => ['nullable', 'string', 'max:255'],
                'category' => ['nullable', 'string', 'max:255'],
                'language' => ['nullable', 'string', 'max:100'],
                'description' => ['nullable', 'string'],
                'youtube_url' => [
                    'required',
                    'url',
                    'max:500',
                    function ($attribute, $value, $fail) {
                        $host = parse_url($value, PHP_URL_HOST);

                        $host = strtolower($host ?? '');

                        $valid = in_array($host, [
                            'youtube.com',
                            'www.youtube.com',
                            'm.youtube.com',
                            'youtu.be',
                            'www.youtu.be',
                        ], true);

                        if (!$valid) {
                            $fail('Please enter a valid YouTube video URL.');
                        }
                    },
                ],
                'duration' => ['nullable', 'string', 'max:50'],
                'thumbnail' => [
                    'nullable',
                    'image',
                    'mimes:jpg,jpeg,png,webp',
                    'max:2048',
                ],
                'sort_order' => ['nullable', 'integer', 'min:0'],
                'published_at' => ['nullable', 'date'],
            ],
            [
                'title.required' => 'Please enter the video title.',
                'title.max' => 'Video title cannot exceed 255 characters.',

                'slug.max' => 'Slug cannot exceed 255 characters.',

                'category.max' => 'Category cannot exceed 255 characters.',
                'language.max' => 'Language cannot exceed 100 characters.',

                'youtube_url.required' => 'Please enter the YouTube video URL.',
                'youtube_url.url' => 'Please enter a valid URL.',
                'youtube_url.max' => 'YouTube URL cannot exceed 500 characters.',

                'duration.max' => 'Duration cannot exceed 50 characters.',

                'thumbnail.image' => 'Please upload a valid image.',
                'thumbnail.mimes' => 'Thumbnail must be JPG, JPEG, PNG or WEBP.',
                'thumbnail.max' => 'Thumbnail size must not exceed 2MB.',

                'sort_order.integer' => 'Sort order must be a number.',
                'sort_order.min' => 'Sort order cannot be negative.',

                'published_at.date' => 'Please enter a valid published date.',
            ]
        );

        $slug = Str::slug($request->input('slug') ?: $request->input('title'));

        $originalSlug = $slug;
        $counter = 1;

        while (Video::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $validated['slug'] = $slug;

        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['is_active'] = $request->boolean('is_active');
        $validated['sort_order'] = $request->input('sort_order', 0);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request
                ->file('thumbnail')
                ->store('videos', 'public');
        }

        if ($validated['is_featured']) {
            Video::where('is_featured', true)
                ->update(['is_featured' => false]);
        }

        Video::create($validated);

        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Video added successfully.');
    }

    public function edit(Video $video)
    {
        return view('admin.pages.video-edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $validated = $request->validate(
            [
                'title' => ['required', 'string', 'max:255'],
                'slug' => ['nullable', 'string', 'max:255'],
                'category' => ['nullable', 'string', 'max:255'],
                'language' => ['nullable', 'string', 'max:100'],
                'description' => ['nullable', 'string'],
                'youtube_url' => [
                    'required',
                    'url',
                    'max:500',
                    function ($attribute, $value, $fail) {
                        $host = parse_url($value, PHP_URL_HOST);

                        $host = strtolower($host ?? '');

                        $valid = in_array($host, [
                            'youtube.com',
                            'www.youtube.com',
                            'm.youtube.com',
                            'youtu.be',
                            'www.youtu.be',
                        ], true);

                        if (!$valid) {
                            $fail('Please enter a valid YouTube video URL.');
                        }
                    },
                ],
                'duration' => ['nullable', 'string', 'max:50'],
                'thumbnail' => [
                    'nullable',
                    'image',
                    'mimes:jpg,jpeg,png,webp',
                    'max:2048',
                ],
                'sort_order' => ['nullable', 'integer', 'min:0'],
                'published_at' => ['nullable', 'date'],
            ],
            [
                'title.required' => 'Please enter the video title.',
                'title.max' => 'Video title cannot exceed 255 characters.',

                'slug.max' => 'Slug cannot exceed 255 characters.',

                'youtube_url.required' => 'Please enter the YouTube video URL.',
                'youtube_url.url' => 'Please enter a valid URL.',
                'youtube_url.max' => 'YouTube URL cannot exceed 500 characters.',

                'thumbnail.image' => 'Please upload a valid image.',
                'thumbnail.mimes' => 'Thumbnail must be JPG, JPEG, PNG or WEBP.',
                'thumbnail.max' => 'Thumbnail size must not exceed 2MB.',

                'sort_order.integer' => 'Sort order must be a number.',
                'sort_order.min' => 'Sort order cannot be negative.',

                'published_at.date' => 'Please enter a valid published date.',
            ]
        );

        $slug = Str::slug($request->input('slug') ?: $request->input('title'));

        $originalSlug = $slug;
        $counter = 1;

        while (
            Video::where('slug', $slug)
                ->where('id', '!=', $video->id)
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $validated['slug'] = $slug;

        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['is_active'] = $request->boolean('is_active');
        $validated['sort_order'] = $request->input('sort_order', 0);

        if ($request->hasFile('thumbnail')) {
            if (
                $video->thumbnail &&
                Storage::disk('public')->exists($video->thumbnail)
            ) {
                Storage::disk('public')->delete($video->thumbnail);
            }

            $validated['thumbnail'] = $request
                ->file('thumbnail')
                ->store('videos', 'public');
        }

        if ($validated['is_featured']) {
            Video::where('id', '!=', $video->id)
                ->where('is_featured', true)
                ->update(['is_featured' => false]);
        }

        $video->update($validated);

        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Video updated successfully.');
    }

    public function destroy(Video $video)
    {
        if (
            $video->thumbnail &&
            Storage::disk('public')->exists($video->thumbnail)
        ) {
            Storage::disk('public')->delete($video->thumbnail);
        }

        $video->delete();

        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Video deleted successfully.');
    }

    public function toggleStatus(Video $video)
    {
        $video->update([
            'is_active' => !$video->is_active,
        ]);

        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Video status updated successfully.');
    }
}