<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class AppointmentController extends Controller
{
    // Appointment list
    public function index()
    {
        $appointments = Appointment::with('doctor')
            ->latest()
            ->paginate(15);

        return view(
            'admin.pages.appointments.index',
            compact('appointments')
        );
    }

    // Appointment detail
    public function show(Appointment $appointment)
    {
        $appointment->load('doctor');

        $doctors = Doctor::where('is_active', true)
            ->orderBy('name')
            ->get();

        $departments = Doctor::where('is_active', true)
            ->whereNotNull('department')
            ->where('department', '!=', '')
            ->pluck('department')
            ->map(function ($department) {
                return trim($department);
            })
            ->unique()
            ->sort()
            ->values();

        return view(
            'admin.pages.appointments.show',
            compact(
                'appointment',
                'doctors',
                'departments'
            )
        );
    }

    // Update appointment
    public function update(
        Request $request,
        Appointment $appointment
    ) {
        $validated = $request->validate(
    [
        'title' => [
            'required',
            'string',
            'min:2',
            'max:150',
        ],

        'department' => [
            'nullable',
            'string',
            'max:100',
        ],

        'location' => [
            'nullable',
            'string',
            'max:150',
        ],

        'employment_type' => [
            'nullable',
            'string',
            'max:100',
        ],

        'salary' => [
            'nullable',
            'string',
            'max:100',
        ],

        'experience' => [
            'nullable',
            'string',
            'max:100',
        ],

        'description' => [
            'required',
            'string',
            'min:20',
        ],

        'requirements' => [
            'nullable',
            'string',
            'max:5000',
        ],

        'is_active' => [
            'nullable',
            'boolean',
        ],
    ],
    [
        'title.required' => 'Job title is required.',
        'title.min' => 'Job title must be at least 2 characters.',
        'title.max' => 'Job title may not be greater than 150 characters.',

        'department.max' => 'Department may not be greater than 100 characters.',
        'location.max' => 'Location may not be greater than 150 characters.',
        'employment_type.max' => 'Employment type may not be greater than 100 characters.',
        'salary.max' => 'Salary may not be greater than 100 characters.',
        'experience.max' => 'Experience may not be greater than 100 characters.',

        'description.required' => 'Job description is required.',
        'description.min' => 'Job description must be at least 20 characters.',

        'requirements.max' => 'Requirements may not be greater than 5000 characters.',
    ]
);

        // Doctor verification

        if (!empty($validated['doctor_id'])) {

            $doctor = Doctor::where('id', $validated['doctor_id'])
                ->where('is_active', true)
                ->first();

            if (!$doctor) {
                throw ValidationException::withMessages([
                    'doctor_id' => 'Selected doctor is not available.',
                ]);
            }

            if (!empty($validated['department'])) {

                $selectedDepartment = strtolower(
                    trim($validated['department'])
                );

                $doctorDepartment = strtolower(
                    trim($doctor->department)
                );

                if ($selectedDepartment !== $doctorDepartment) {
                    throw ValidationException::withMessages([
                        'doctor_id' =>
                            'Selected doctor does not belong to the selected department.',
                    ]);
                }
            }
        }

        // Update appointment

        $appointment->update([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'department' => $validated['department'] ?? null,
            'doctor_id' => $validated['doctor_id'] ?? null,
            'appointment_date' => $validated['appointment_date'],
            'appointment_time' => $validated['appointment_time'] ?? null,
            'message' => $validated['message'] ?? null,
            'status' => $validated['status'],
        ]);

        return redirect()
            ->route('admin.pages.appointments.show', $appointment->id)
            ->with(
                'success',
                'Appointment updated successfully.'
            );
    }

    // Delete appointment
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()
            ->route('admin.pages.appointments.index')
            ->with(
                'success',
                'Appointment deleted successfully.'
            );
    }
}