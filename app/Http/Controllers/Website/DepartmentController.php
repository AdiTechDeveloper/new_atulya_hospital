<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function show($slug)
    {
        $json = file_get_contents(storage_path('app/departments.json'));

        $departments = json_decode($json, true);

        $department = collect($departments)
            ->firstWhere('slug', $slug);

        if (! $department) {

            return redirect('/');
        }

        return view('website.pages.department',compact('department'));
    }
}
