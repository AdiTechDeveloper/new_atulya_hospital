<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function publicIndex()
    {
        $galleries = Gallery::where('status', 1)
            ->orderBy('sort_order', 'asc')
            ->get()
            ->groupBy('category_name');

        return view('website.pages.gallery', compact('galleries'));
    }
}