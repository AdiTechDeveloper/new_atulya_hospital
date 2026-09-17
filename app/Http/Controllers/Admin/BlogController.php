<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('admin.pages.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.pages.blogs.create');
    }

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
            ],

            'category' => [
                'required',
                'string',
                'max:255',
            ],

            'short_description' => [
                'required',
                'string',
            ],

            'content' => [
                'required',
                'string',
            ],

            'featured_image' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'author' => [
                'required',
                'string',
                'max:255',
            ],

            'published_at' => [
                'required',
                'date',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:1',
            ],

            'is_featured' => [
                'nullable',
                'boolean',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Slug
        |--------------------------------------------------------------------------
        */

        $slug = $validated['slug'] ?? '';

        if (!$slug) {
            $slug = Str::slug($validated['title']);
        } else {
            $slug = Str::slug($slug);
        }

        $originalSlug = $slug;
        $counter = 1;

        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }


        /*
        |--------------------------------------------------------------------------
        | Sort Order
        |--------------------------------------------------------------------------
        */

        $sortOrder = (int) ($validated['sort_order'] ?? 0);

        $maxSort = Blog::max('sort_order') ?? 0;

        if ($sortOrder < 1) {
            $sortOrder = $maxSort + 1;
        }

        $sortOrder = min(
            $sortOrder,
            $maxSort + 1
        );

        Blog::where('sort_order', '>=', $sortOrder)
            ->increment('sort_order');


        /*
        |--------------------------------------------------------------------------
        | Featured Image
        |--------------------------------------------------------------------------
        */

        $featuredImage = null;

        if ($request->hasFile('featured_image')) {

            $featuredImage = $request
                ->file('featured_image')
                ->store('blogs', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | Featured Blog
        |--------------------------------------------------------------------------
        */

        $isFeatured =
            $request->boolean('is_featured');

        if ($isFeatured) {

            Blog::where('is_featured', true)
                ->update([
                    'is_featured' => false,
                ]);
        }


        /*
        |--------------------------------------------------------------------------
        | Create Blog
        |--------------------------------------------------------------------------
        */

        Blog::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'],
            'short_description' => $validated['short_description'],
            'content' => $validated['content'],
            'featured_image' => $featuredImage,
            'author' => $validated['author'],
            'published_at' => $validated['published_at'],
            'sort_order' => $sortOrder,
            'is_featured' => $isFeatured,
            'is_active' => $request->boolean('is_active'),
        ]);


        return redirect()
            ->route('admin.blogs.index')
            ->with(
                'success',
                'Blog created successfully.'
            );
    }


    public function edit(Blog $blog)
    {
        return view(
            'admin.pages.blogs.edit',
            compact('blog')
        );
    }


    public function update(
        Request $request,
        Blog $blog
    ) {
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
            ],

            'category' => [
                'required',
                'string',
                'max:255',
            ],

            'short_description' => [
                'required',
                'string',
            ],

            'content' => [
                'required',
                'string',
            ],

            'featured_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'author' => [
                'required',
                'string',
                'max:255',
            ],

            'published_at' => [
                'required',
                'date',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:1',
            ],

            'is_featured' => [
                'nullable',
                'boolean',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | Slug
        |--------------------------------------------------------------------------
        */

        $slug = $validated['slug'] ?? '';

        if (!$slug) {
            $slug = Str::slug($validated['title']);
        } else {
            $slug = Str::slug($slug);
        }

        $originalSlug = $slug;
        $counter = 1;

        while (
            Blog::where('slug', $slug)
                ->where('id', '!=', $blog->id)
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter++;
        }


        /*
        |--------------------------------------------------------------------------
        | Sort Order
        |--------------------------------------------------------------------------
        */

        $oldSortOrder =
            (int) $blog->sort_order;

        $newSortOrder =
            (int) (
                $validated['sort_order']
                ?? $oldSortOrder
            );

        $maxSort =
            Blog::where(
                'id',
                '!=',
                $blog->id
            )->max('sort_order') ?? 0;

        if ($newSortOrder < 1) {
            $newSortOrder = $oldSortOrder;
        }

        $newSortOrder = min(
            $newSortOrder,
            $maxSort + 1
        );


        if ($newSortOrder < $oldSortOrder) {

            Blog::where(
                'id',
                '!=',
                $blog->id
            )
                ->whereBetween(
                    'sort_order',
                    [
                        $newSortOrder,
                        $oldSortOrder - 1
                    ]
                )
                ->increment('sort_order');

        } elseif ($newSortOrder > $oldSortOrder) {

            Blog::where(
                'id',
                '!=',
                $blog->id
            )
                ->whereBetween(
                    'sort_order',
                    [
                        $oldSortOrder + 1,
                        $newSortOrder
                    ]
                )
                ->decrement('sort_order');
        }


        /*
        |--------------------------------------------------------------------------
        | Featured Image
        |--------------------------------------------------------------------------
        */

        $featuredImage =
            $blog->featured_image;

        if ($request->hasFile('featured_image')) {

            if ($blog->featured_image) {

                Storage::disk('public')
                    ->delete(
                        $blog->featured_image
                    );
            }

            $featuredImage =
                $request
                    ->file('featured_image')
                    ->store('blogs', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | Featured Blog
        |--------------------------------------------------------------------------
        */

        $isFeatured =
            $request->boolean('is_featured');

        if ($isFeatured) {

            Blog::where(
                'id',
                '!=',
                $blog->id
            )
                ->where(
                    'is_featured',
                    true
                )
                ->update([
                    'is_featured' => false,
                ]);
        }


        /*
        |--------------------------------------------------------------------------
        | Update Blog
        |--------------------------------------------------------------------------
        */

        $blog->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'],
            'short_description' => $validated['short_description'],
            'content' => $validated['content'],
            'featured_image' => $featuredImage,
            'author' => $validated['author'],
            'published_at' => $validated['published_at'],
            'sort_order' => $newSortOrder,
            'is_featured' => $isFeatured,
            'is_active' => $request->boolean('is_active'),
        ]);


        return redirect()
            ->route('admin.blogs.index')
            ->with(
                'success',
                'Blog updated successfully.'
            );
    }


    public function destroy(Blog $blog)
    {
        $deletedSortOrder =
            $blog->sort_order;

        if ($blog->featured_image) {

            Storage::disk('public')
                ->delete(
                    $blog->featured_image
                );
        }

        $blog->delete();

        Blog::where(
            'sort_order',
            '>',
            $deletedSortOrder
        )->decrement('sort_order');


        return redirect()
            ->route('admin.blogs.index')
            ->with(
                'success',
                'Blog deleted successfully.'
            );
    }


    public function toggleStatus(Blog $blog)
    {
        $blog->update([
            'is_active' => !$blog->is_active,
        ]);

        return redirect()
            ->route('admin.blogs.index')
            ->with(
                'success',
                'Blog status updated successfully.'
            );
    }


    public function toggleFeatured(Blog $blog)
    {
        if ($blog->is_featured) {

            $blog->update([
                'is_featured' => false,
            ]);

        } else {

            Blog::where(
                'id',
                '!=',
                $blog->id
            )
                ->where(
                    'is_featured',
                    true
                )
                ->update([
                    'is_featured' => false,
                ]);

            $blog->update([
                'is_featured' => true,
            ]);
        }


        return redirect()
            ->route('admin.blogs.index')
            ->with(
                'success',
                'Blog featured status updated successfully.'
            );
    }
}