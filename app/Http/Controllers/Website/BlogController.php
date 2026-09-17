<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Blog Listing
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $blogs = Blog::where('is_active', true)
            ->orderBy('sort_order')
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->paginate(3)
            ->withQueryString();

        return view('website.pages.blog', compact('blogs'));
    }


    /*
    |--------------------------------------------------------------------------
    | Blog Details
    |--------------------------------------------------------------------------
    */

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('is_active', true)
            ->first();

        if (!$blog) {
            abort(404);
        }

        return view(
            'website.pages.blog-details',
            compact('blog')
        );
    }
}