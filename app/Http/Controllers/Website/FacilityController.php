<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Facility;

class FacilityController extends Controller
{
    public function show($slug = null)
    {
        /*
        |--------------------------------------------------------------------------
        | If /facilities is opened without slug
        |--------------------------------------------------------------------------
        */

        if (!$slug) {

            $facility = Facility::where('is_active', true)
                ->orderBy('sort_order')
                ->orderBy('id')
                ->first();

            if (!$facility) {
                return redirect('/');
            }
        }

        /*
        |--------------------------------------------------------------------------
        | If /facilities/{slug} is opened
        |--------------------------------------------------------------------------
        */

        else {

            $facility = Facility::where('slug', $slug)
                ->where('is_active', true)
                ->first();

            if (!$facility) {
                return redirect('/');
            }
        }


        /*
        |--------------------------------------------------------------------------
        | All Active Facilities
        |--------------------------------------------------------------------------
        | Used in sidebar and facility dropdown.
        |--------------------------------------------------------------------------
        */

        $facilities = Facility::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();


        return view(
            'website.pages.facilities',
            compact('facility', 'facilities')
        );
    }
}