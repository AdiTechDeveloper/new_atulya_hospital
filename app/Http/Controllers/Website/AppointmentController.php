<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

use App\Mail\NewAppointmentMail;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'min:2',
                'max:100',
                'regex:/^[A-Za-z\s]+$/',
            ],

            'phone' => [
                'required',
                'string',
                'regex:/^[6-9][0-9]{9}$/',
            ],

            'department' => [
                'nullable',
                'string',
                'max:100',
            ],

            'doctor_id' => [
                'nullable',
                'integer',
                'exists:doctors,id',
            ],

            'appointment_date' => [
                'required',
                'date',
                'after_or_equal:today',
            ],

            'appointment_time' => [
                'nullable',
                'date_format:H:i',
            ],

            'message' => [
                'nullable',
                'string',
                'max:1000',
            ],
        ]);

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

        // Create appointment

        $appointment = Appointment::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'department' => $validated['department'] ?? null,
            'doctor_id' => $validated['doctor_id'] ?? null,
            'appointment_date' => $validated['appointment_date'],
            'appointment_time' => $validated['appointment_time'] ?? null,
            'message' => $validated['message'] ?? null,
            'status' => 'pending',
        ]);

        // Send notification email

        try {
            Mail::to(env('APPOINTMENT_NOTIFICATION_EMAIL'))
                ->send(new NewAppointmentMail($appointment));
        } catch (\Throwable $e) {
            report($e);
        }

        return back()->with(
            'success',
            'Appointment submitted successfully. We will contact you shortly.'
        );
    }
}