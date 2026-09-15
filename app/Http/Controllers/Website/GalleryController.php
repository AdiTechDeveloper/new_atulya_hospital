<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Gallery;

class GalleryController extends Controller
{
    // 1. Admin Table View
    public function index()
    {
        $galleries = Gallery::orderBy('sort_order', 'asc')->get();

        return view('website.pages.gallery', compact('galleries'));
    }

    // 2. Public Website Frontend View
    public function publicIndex()
    {
        $galleries = Gallery::where('status', 1)
            ->orderBy('sort_order', 'asc')
            ->get()
            ->groupBy('category_name');

        return view('website.pages.gallery', compact('galleries'));
    }
}
