<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Department List
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $departments = Department::with('doctors')
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view(
            'admin.pages.departments.index',
            compact('departments')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Create Department
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        $doctors = Doctor::where('is_active', true)
            ->orderBy('name')
            ->get();

        return view(
            'admin.pages.departments.create',
            compact('doctors')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Store Department
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'about_heading' => 'nullable|string|max:255',
            'about_description' => 'nullable|string',

            'services' => 'nullable|array',
            'services.*' => 'nullable|string|max:255',

            'specialities' => 'nullable|array',
            'specialities.*' => 'nullable|string|max:255',

            'conditions' => 'nullable|array',
            'conditions.*' => 'nullable|string|max:255',

            'patient_care_heading' => 'nullable|string|max:255',
            'patient_care_description' => 'nullable|string',

            'why_choose' => 'nullable|array',
            'why_choose.*' => 'nullable|string|max:255',

            'doctor_ids' => 'nullable|array',
            'doctor_ids.*' => 'integer|exists:doctors,id',

            'sort_order' => 'nullable|integer|min:1',
            'is_active' => 'nullable|boolean',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Slug
        |--------------------------------------------------------------------------
        */

        $slug = $validated['slug'] ?? '';

        if (!$slug) {
            $slug = Str::slug($validated['name']);
        } else {
            $slug = Str::slug($slug);
        }

        $originalSlug = $slug;
        $counter = 1;

        while (Department::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }


        /*
        |--------------------------------------------------------------------------
        | Sort Order
        |--------------------------------------------------------------------------
        */

        $sortOrder = (int) ($validated['sort_order'] ?? 0);

        $maxSort = Department::max('sort_order') ?? 0;

        if ($sortOrder < 1) {
            $sortOrder = $maxSort + 1;
        }

        $sortOrder = min(
            $sortOrder,
            $maxSort + 1
        );


        Department::where(
            'sort_order',
            '>=',
            $sortOrder
        )->increment('sort_order');


        /*
        |--------------------------------------------------------------------------
        | Image
        |--------------------------------------------------------------------------
        */

        $image = null;

        if ($request->hasFile('image')) {
            $image = $request
                ->file('image')
                ->store('departments', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | Create Department
        |--------------------------------------------------------------------------
        */

        $department = Department::create([
            'name' => $validated['name'],
            'slug' => $slug,

            'short_description' =>
                $validated['short_description'] ?? null,

            'image' => $image,

            'about_heading' =>
                $validated['about_heading'] ?? null,

            'about_description' =>
                $validated['about_description'] ?? null,

            'services' => array_values(
                array_filter(
                    $validated['services'] ?? []
                )
            ),

            'specialities' => array_values(
                array_filter(
                    $validated['specialities'] ?? []
                )
            ),

            'conditions' => array_values(
                array_filter(
                    $validated['conditions'] ?? []
                )
            ),

            'patient_care_heading' =>
                $validated['patient_care_heading'] ?? null,

            'patient_care_description' =>
                $validated['patient_care_description'] ?? null,

            'why_choose' => array_values(
                array_filter(
                    $validated['why_choose'] ?? []
                )
            ),

            'sort_order' => $sortOrder,

            'is_active' =>
                $request->boolean('is_active'),
        ]);


        /*
        |--------------------------------------------------------------------------
        | Related Doctors
        |--------------------------------------------------------------------------
        */

        $department->doctors()->sync(
            $validated['doctor_ids'] ?? []
        );


        return redirect()
            ->route('admin.departments.index')
            ->with(
                'success',
                'Department created successfully.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | Edit Department
    |--------------------------------------------------------------------------
    */

    public function edit(Department $department)
    {
        $doctors = Doctor::where('is_active', true)
            ->orderBy('name')
            ->get();

        $department->load('doctors');

        return view(
            'admin.pages.departments.edit',
            compact(
                'department',
                'doctors'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Update Department
    |--------------------------------------------------------------------------
    */

    public function update(
        Request $request,
        Department $department
    ) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'about_heading' => 'nullable|string|max:255',
            'about_description' => 'nullable|string',

            'services' => 'nullable|array',
            'services.*' => 'nullable|string|max:255',

            'specialities' => 'nullable|array',
            'specialities.*' => 'nullable|string|max:255',

            'conditions' => 'nullable|array',
            'conditions.*' => 'nullable|string|max:255',

            'patient_care_heading' => 'nullable|string|max:255',
            'patient_care_description' => 'nullable|string',

            'why_choose' => 'nullable|array',
            'why_choose.*' => 'nullable|string|max:255',

            'doctor_ids' => 'nullable|array',
            'doctor_ids.*' => 'integer|exists:doctors,id',

            'sort_order' => 'nullable|integer|min:1',
            'is_active' => 'nullable|boolean',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Slug
        |--------------------------------------------------------------------------
        */

        $slug = $validated['slug'] ?? '';

        if (!$slug) {
            $slug = Str::slug($validated['name']);
        } else {
            $slug = Str::slug($slug);
        }

        $originalSlug = $slug;
        $counter = 1;

        while (
            Department::where('slug', $slug)
                ->where('id', '!=', $department->id)
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter++;
        }


        /*
        |--------------------------------------------------------------------------
        | Sort Order
        |--------------------------------------------------------------------------
        */

        $oldSortOrder = (int) $department->sort_order;

        $newSortOrder = (int) (
            $validated['sort_order']
            ?? $oldSortOrder
        );

        $maxSort = Department::where(
            'id',
            '!=',
            $department->id
        )->max('sort_order') ?? 0;


        if ($newSortOrder < 1) {
            $newSortOrder = $oldSortOrder;
        }

        $newSortOrder = min(
            $newSortOrder,
            $maxSort + 1
        );


        /*
        |--------------------------------------------------------------------------
        | Re-order Departments
        |--------------------------------------------------------------------------
        */

        if ($newSortOrder < $oldSortOrder) {

            Department::where(
                'id',
                '!=',
                $department->id
            )
                ->whereBetween(
                    'sort_order',
                    [
                        $newSortOrder,
                        $oldSortOrder - 1
                    ]
                )
                ->increment('sort_order');

        } elseif ($newSortOrder > $oldSortOrder) {

            Department::where(
                'id',
                '!=',
                $department->id
            )
                ->whereBetween(
                    'sort_order',
                    [
                        $oldSortOrder + 1,
                        $newSortOrder
                    ]
                )
                ->decrement('sort_order');
        }


        /*
        |--------------------------------------------------------------------------
        | Image
        |--------------------------------------------------------------------------
        */

        $image = $department->image;

        if ($request->hasFile('image')) {

            if ($department->image) {
                Storage::disk('public')->delete(
                    $department->image
                );
            }

            $image = $request
                ->file('image')
                ->store('departments', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | Update Department
        |--------------------------------------------------------------------------
        */

        $department->update([
            'name' => $validated['name'],
            'slug' => $slug,

            'short_description' =>
                $validated['short_description'] ?? null,

            'image' => $image,

            'about_heading' =>
                $validated['about_heading'] ?? null,

            'about_description' =>
                $validated['about_description'] ?? null,

            'services' => array_values(
                array_filter(
                    $validated['services'] ?? []
                )
            ),

            'specialities' => array_values(
                array_filter(
                    $validated['specialities'] ?? []
                )
            ),

            'conditions' => array_values(
                array_filter(
                    $validated['conditions'] ?? []
                )
            ),

            'patient_care_heading' =>
                $validated['patient_care_heading'] ?? null,

            'patient_care_description' =>
                $validated['patient_care_description'] ?? null,

            'why_choose' => array_values(
                array_filter(
                    $validated['why_choose'] ?? []
                )
            ),

            'sort_order' => $newSortOrder,

            'is_active' =>
                $request->boolean('is_active'),
        ]);


        /*
        |--------------------------------------------------------------------------
        | Related Doctors
        |--------------------------------------------------------------------------
        */

        $department->doctors()->sync(
            $validated['doctor_ids'] ?? []
        );


        return redirect()
            ->route('admin.departments.index')
            ->with(
                'success',
                'Department updated successfully.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | Delete Department
    |--------------------------------------------------------------------------
    */

    public function destroy(Department $department)
    {
        $deletedSortOrder = $department->sort_order;


        /*
        |--------------------------------------------------------------------------
        | Delete Image
        |--------------------------------------------------------------------------
        */

        if ($department->image) {
            Storage::disk('public')->delete(
                $department->image
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Delete Department
        |--------------------------------------------------------------------------
        */

        $department->delete();


        /*
        |--------------------------------------------------------------------------
        | Re-order Remaining Departments
        |--------------------------------------------------------------------------
        */

        Department::where(
            'sort_order',
            '>',
            $deletedSortOrder
        )->decrement('sort_order');


        return redirect()
            ->route('admin.departments.index')
            ->with(
                'success',
                'Department deleted successfully.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | Toggle Status
    |--------------------------------------------------------------------------
    */

    public function toggleStatus(Department $department)
    {
        $department->update([
            'is_active' => !$department->is_active,
        ]);


        return redirect()
            ->route('admin.departments.index')
            ->with(
                'success',
                'Department status updated successfully.'
            );
    }
}