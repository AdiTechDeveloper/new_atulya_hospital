<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Doctor;

class ContactController extends Controller
{
    public function index()
    {
        $doctors = Doctor::where('is_active', true)
            ->orderBy('name')
            ->get();

        $departments = $doctors
            ->pluck('department')
            ->filter()
            ->unique()
            ->sort()
            ->values();

        $urologyDoctors = Doctor::whereRaw(
            'LOWER(TRIM(department)) = ?',
            ['urology']
        )->get();

        // dd($urologyDoctors->toArray());

        return view('website.pages.contact', compact(
            'doctors',
            'departments'
        ));
    }
}