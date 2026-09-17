<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('website.pages.show', compact('departments'));
    }

    public function show($slug)
    {
        $department = Department::with([
            'doctors' => function ($query) {
                $query->where('is_active', true)
                    ->orderBy('name');
            }
        ])
        ->where('slug', $slug)
        ->where('is_active', true)
        ->firstOrFail();

        $allDepartments = Department::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view(
            'website.pages.department',
            compact('department', 'allDepartments')
        );
    }
}