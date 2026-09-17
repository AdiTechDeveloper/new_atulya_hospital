<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function show($slug = null)
    {
        /*
        |--------------------------------------------------------------------------
        | If /departments is opened without slug
        |--------------------------------------------------------------------------
        */

        if (!$slug) {

            $department = Department::where('is_active', true)
                ->orderBy('sort_order')
                ->orderBy('id')
                ->first();

            if (!$department) {
                return redirect('/');
            }
        }

        /*
        |--------------------------------------------------------------------------
        | If /departments/{slug} is opened
        |--------------------------------------------------------------------------
        */

        else {

            $department = Department::with([
                'doctors' => function ($query) {
                    $query->where('is_active', true)
                        ->orderBy('name');
                }
            ])
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

            if (!$department) {
                return redirect('/');
            }
        }


        /*
        |--------------------------------------------------------------------------
        | All Active Departments
        |--------------------------------------------------------------------------
        | Used in sidebar and department dropdown.
        |--------------------------------------------------------------------------
        */

        $departments = Department::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();


        return view(
            'website.pages.department',
            compact('department', 'departments')
        );
    }
}