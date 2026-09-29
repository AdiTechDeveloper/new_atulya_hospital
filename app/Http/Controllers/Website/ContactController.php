<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;

class ContactController extends Controller
{
    public function index(){
        return view('website.pages.contact');
    }
    public function appointment()
    {
        $departments = Department::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $doctors = Doctor::where('is_active', true)
            ->orderBy('name')
            ->get();

        return view('website.pages.appointment', compact(
            'departments',
            'doctors'
        ));
    }
}