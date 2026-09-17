<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Video;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Homepage
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | Doctors
        |--------------------------------------------------------------------------
        */

        $doctors = Doctor::where('is_active', true)
            ->orderBy('id')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | Featured Video
        |--------------------------------------------------------------------------
        */

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


        /*
        |--------------------------------------------------------------------------
        | Latest Videos
        |--------------------------------------------------------------------------
        */

        $latestVideos = Video::where('is_active', true)
            ->orderBy('sort_order')
            ->latest()
            ->take(3)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | Homepage Videos - 4 Cards
        |--------------------------------------------------------------------------
        */

        $videos = Video::where('is_active', true)
            ->orderBy('sort_order')
            ->latest()
            ->take(4)
            ->get();


        return view('website.index', compact(
            'doctors',
            'featuredVideo',
            'latestVideos',
            'videos'
        ));
    }
}