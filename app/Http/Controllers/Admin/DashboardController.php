<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\JobApplication;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDoctors = Doctor::count();

        $totalDepartments = Department::count();

        $totalAppointments = Appointment::count();

        $recentAppointments = Appointment::with('doctor')
            ->latest()
            ->take(5)
            ->get();

        $recentApplications = JobApplication::with('job')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.index', compact(
            'totalDoctors',
            'totalDepartments',
            'totalAppointments',
            'recentAppointments',
            'recentApplications'
        ));
    }
}