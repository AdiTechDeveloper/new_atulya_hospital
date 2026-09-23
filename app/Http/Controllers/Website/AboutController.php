<?php

namespace App\Http\Controllers;

use App\Models\Facility;

class AboutController extends Controller
{
    public function index()
    {
        $facilities = Facility::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('website.pages.about', compact('facilities'));
    }
}