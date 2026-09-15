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
            ->get();

        return view('website.pages.videos', compact('videos'));
    }
}