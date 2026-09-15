<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    /**
     * Display all videos.
     */
    public function index()
    {
        $videos = Video::orderBy('sort_order')
            ->latest()
            ->get();

        return view('admin.pages.video-list', compact('videos'));
    }


    /**
     * Show create video form.
     */
    public function create()
    {
        return view('admin.pages.video-create');
    }


    /**
     * Store new video.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'slug' => [
                'nullable',
                'string',
                'max:255',
                'unique:videos,slug',
            ],

            'category' => [
                'nullable',
                'string',
                'max:255',
            ],

            'language' => [
                'nullable',
                'string',
                'max:100',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'youtube_url' => [
                'required',
                'url',
                'max:500',
            ],

            'duration' => [
                'nullable',
                'string',
                'max:50',
            ],

            'thumbnail' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:0',
            ],

            'published_at' => [
                'nullable',
                'date',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | Generate Slug
        |--------------------------------------------------------------------------
        */

        $slug = $request->input('slug');

        if (!$slug) {
            $slug = Str::slug($request->input('title'));
        }

        /*
        |--------------------------------------------------------------------------
        | Make Slug Unique
        |--------------------------------------------------------------------------
        */

        $originalSlug = $slug;
        $counter = 1;

        while (Video::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $validated['slug'] = $slug;


        /*
        |--------------------------------------------------------------------------
        | Checkbox Values
        |--------------------------------------------------------------------------
        */

        $validated['is_active'] = $request->boolean('is_active');
        $validated['is_featured'] = $request->boolean('is_featured');


        /*
        |--------------------------------------------------------------------------
        | Sort Order
        |--------------------------------------------------------------------------
        */

        $validated['sort_order'] = $request->input('sort_order', 0);


        /*
        |--------------------------------------------------------------------------
        | Thumbnail Upload
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('thumbnail')) {

            $validated['thumbnail'] =
                $request->file('thumbnail')
                    ->store('videos', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | Featured Video
        |--------------------------------------------------------------------------
        |
        | Only one video can be featured.
        |
        */

        if ($validated['is_featured']) {

            Video::where('is_featured', true)
                ->update([
                    'is_featured' => false,
                ]);
        }


        /*
        |--------------------------------------------------------------------------
        | Create Video
        |--------------------------------------------------------------------------
        */

        Video::create($validated);


        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Video added successfully.');
    }


    /**
     * Show edit video form.
     */
    public function edit(Video $video)
    {
        return view(
            'admin.pages.video-edit',
            compact('video')
        );
    }


    /**
     * Update video.
     */
    public function update(Request $request, Video $video)
    {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'slug' => [
                'nullable',
                'string',
                'max:255',
                'unique:videos,slug,' . $video->id,
            ],

            'category' => [
                'nullable',
                'string',
                'max:255',
            ],

            'language' => [
                'nullable',
                'string',
                'max:100',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'youtube_url' => [
                'required',
                'url',
                'max:500',
            ],

            'duration' => [
                'nullable',
                'string',
                'max:50',
            ],

            'thumbnail' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:0',
            ],

            'published_at' => [
                'nullable',
                'date',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | Generate Slug
        |--------------------------------------------------------------------------
        */

        $slug = $request->input('slug');

        if (!$slug) {
            $slug = Str::slug($request->input('title'));
        }


        /*
        |--------------------------------------------------------------------------
        | Make Slug Unique
        |--------------------------------------------------------------------------
        */

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


        /*
        |--------------------------------------------------------------------------
        | Checkbox Values
        |--------------------------------------------------------------------------
        */

        $validated['is_active'] = $request->boolean('is_active');
        $validated['is_featured'] = $request->boolean('is_featured');


        /*
        |--------------------------------------------------------------------------
        | Sort Order
        |--------------------------------------------------------------------------
        */

        $validated['sort_order'] = $request->input('sort_order', 0);


        /*
        |--------------------------------------------------------------------------
        | Thumbnail Upload
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('thumbnail')) {

            /*
             * Delete old thumbnail
             */

            if (
                $video->thumbnail &&
                \Storage::disk('public')->exists($video->thumbnail)
            ) {
                \Storage::disk('public')
                    ->delete($video->thumbnail);
            }


            /*
             * Store new thumbnail
             */

            $validated['thumbnail'] =
                $request->file('thumbnail')
                    ->store('videos', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | Featured Video
        |--------------------------------------------------------------------------
        */

        if ($validated['is_featured']) {

            Video::where('id', '!=', $video->id)
                ->where('is_featured', true)
                ->update([
                    'is_featured' => false,
                ]);
        }


        /*
        |--------------------------------------------------------------------------
        | Update Video
        |--------------------------------------------------------------------------
        */

        $video->update($validated);


        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Video updated successfully.');
    }


    /**
     * Delete video.
     */
    public function destroy(Video $video)
    {
        /*
        |--------------------------------------------------------------------------
        | Delete Thumbnail
        |--------------------------------------------------------------------------
        */

        if (
            $video->thumbnail &&
            \Storage::disk('public')->exists($video->thumbnail)
        ) {
            \Storage::disk('public')
                ->delete($video->thumbnail);
        }


        /*
        |--------------------------------------------------------------------------
        | Delete Video
        |--------------------------------------------------------------------------
        */

        $video->delete();


        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Video deleted successfully.');
    }


    /**
     * Toggle video status.
     */
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