<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
   public function show($slug)
    {
        $json = file_get_contents(
            storage_path('app/facilities.json')
        );

        $facilities = json_decode($json, true);

        $facility = collect($facilities)
            ->firstWhere('slug', $slug);

      if (!$facility) {
        return redirect('/');
    }


        return view('website.pages.facilities', compact('facility'));
    }
}
