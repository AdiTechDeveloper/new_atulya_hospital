<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DoctorAdminController extends Controller
{
    public function index()
    {
        $doctors = Doctor::latest()->get();

        return view('admin.pages.doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('admin.pages.doctors.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'speciality' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:50',
            'opd_timing' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'about' => 'nullable|string',
            'areas_of_care' => 'nullable|string',
            'patient_care_text' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('doctors', 'public');
        }

        $validated['slug'] = Str::slug($request->name);

        if (! empty($request->areas_of_care)) {
            $validated['areas_of_care'] = array_map('trim', explode(',', $request->areas_of_care));
        }

        Doctor::create($validated);

        return redirect()->route('admin.doctors.index')->with('success', 'Doctor created successfully!');
    }

    public function edit(Doctor $doctor)
    {
        $areas_of_care = is_array($doctor->areas_of_care)
        ? implode(', ', $doctor->areas_of_care)
        : $doctor->areas_of_care;

        return view('admin.pages.doctors.create', compact('doctor', 'areas_of_care'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'speciality' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:50',
            'opd_timing' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'about' => 'nullable|string',
            'areas_of_care' => 'nullable|string',
            'patient_care_text' => 'nullable|string',
        ]);

        // Handle Image Upload if a new file is uploaded
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($doctor->image && Storage::disk('public')->exists($doctor->image)) {
                Storage::disk('public')->delete($doctor->image);
            }
            $validated['image'] = $request->file('image')->store('doctors', 'public');
        }

        // Update Slug if name changed
        $validated['slug'] = Str::slug($request->name);

        if (! empty($request->areas_of_care)) {
            $validated['areas_of_care'] = array_map('trim', explode(',', $request->areas_of_care));
        } else {
            $validated['areas_of_care'] = [];
        }

        $doctor->update($validated);

        return redirect()->route('admin.doctors.index')->with('success', 'Doctor updated successfully!');
    }

    // Toggle Active / Inactive Status
    public function toggleStatus(Doctor $doctor)
    {
        $doctor->update([
            'is_active' => ! $doctor->is_active,
        ]);

        return redirect()->back()->with('success', 'Doctor status updated successfully!');
    }

    // Delete Doctor Record and Profile Image
    public function destroy(Doctor $doctor)
    {
        // Delete profile image from storage if exists
        if ($doctor->image && Storage::disk('public')->exists($doctor->image)) {
            Storage::disk('public')->delete($doctor->image);
        }

        $doctor->delete();

        return redirect()->route('admin.doctors.index')->with('success', 'Doctor deleted successfully!');
    }
}
