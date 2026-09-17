<?php

namespace App\Http\Controllers;

use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::where('is_active', true)
            ->orderBy('id')
            ->get();

        return view(
            'website.pages.ourdoctor',
            compact('doctors')
        );
    }

    public function show($slug)
    {
        $doctor = Doctor::where('slug', $slug)
            ->where('is_active', true)
            ->first();

        if (!$doctor) {
            abort(404);
        }

        return view(
            'website.pages.doctor-profile',
            compact('doctor')
        );
    }
}