<?php

namespace App\Http\Controllers;

use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | Doctors
        |--------------------------------------------------------------------------
        */

        $json = file_get_contents(
            storage_path('app/doctors.json')
        );

        $doctors = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            abort(500, 'Invalid doctors.json');
        }

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

        return view('website.index', compact(
            'doctors',
            'featuredVideo',
            'latestVideos'
        ));
    }
}