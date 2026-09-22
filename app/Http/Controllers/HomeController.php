<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Doctor;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        $doctors = Doctor::where('is_active', true)
            ->orderBy('id')
            ->get();

        $departments = $doctors
            ->pluck('department')
            ->filter()
            ->unique()
            ->sort()
            ->values();

        $featuredVideo = Video::where('is_active', true)
            ->where('is_featured', true)
            ->latest()
            ->first();

        if (!$featuredVideo) {
            $featuredVideo = Video::where('is_active', true)
                ->orderBy('sort_order')
                ->latest()
                ->first();
        }

        $latestVideos = Video::where('is_active', true)
            ->orderBy('sort_order')
            ->latest()
            ->take(3)
            ->get();

        $videos = Video::where('is_active', true)
            ->orderBy('sort_order')
            ->latest()
            ->take(4)
            ->get();

        $blogs = Blog::where('is_active', true)
            ->orderBy('sort_order')
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->take(3)
            ->get();

        return view('website.index', compact(
            'doctors',
            'departments',
            'featuredVideo',
            'latestVideos',
            'videos',
            'blogs'
        ));
    }
}
