<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Doctor;
use App\Models\Video;
use App\Models\Facility;
use App\Models\Department;

class HomeController extends Controller
{
    public function index()
    {
        $doctors = Doctor::where('is_active', true)
            ->orderBy('id')
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Homepage Departments
        |--------------------------------------------------------------------------
        | Only 5 departments are shown on homepage.
        | Remaining departments are available on departments page.
        |--------------------------------------------------------------------------
        */

        $departments = Department::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->take(5)
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
        | Homepage Videos
        |--------------------------------------------------------------------------
        */

        $videos = Video::where('is_active', true)
            ->orderBy('sort_order')
            ->latest()
            ->take(4)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | Blogs
        |--------------------------------------------------------------------------
        */

        $blogs = Blog::where('is_active', true)
            ->orderBy('sort_order')
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->take(3)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | Facilities
        |--------------------------------------------------------------------------
        */

        $facilities = Facility::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();


        return view('website.index', compact(
            'doctors',
            'departments',
            'featuredVideo',
            'latestVideos',
            'videos',
            'blogs',
            'facilities'
        ));
    }
}