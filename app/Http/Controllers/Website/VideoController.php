<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::where('is_active', true)
            ->orderBy('sort_order')
            ->latest()
            ->paginate(3)
            ->withQueryString();

        return view('website.pages.videos', compact('videos'));
    }
}