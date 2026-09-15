<?php

namespace App\Http\Controllers;

class DoctorController extends Controller
{
    public function index()
    {
        $json = file_get_contents(
            storage_path('app/doctors.json')
        );

        $doctors = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            dd('JSON Error: ' . json_last_error_msg());
        }

        return view('website.pages.ourdoctor', compact('doctors'));
    }

    public function show($slug)
    {
        $json = file_get_contents(
            storage_path('app/doctors.json')
        );

        $doctors = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            abort(500, 'Invalid doctors.json');
        }

        $doctor = collect($doctors)->firstWhere('slug', $slug);

        if (!$doctor) {
            abort(404);
        }

        return view(
            'website.pages.doctor-profile',
            compact('doctor')
        );
    }
}