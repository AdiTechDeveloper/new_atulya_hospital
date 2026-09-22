<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\NewJobApplicationMail;
use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CareerController extends Controller
{
    public function index()
    {
        $jobs = Job::where('is_active', true)
            ->latest()
            ->get();

        return view('website.pages.career', compact('jobs'));
    }

    public function apply(Job $job)
    {
        abort_unless($job->is_active, 404);

        return view('website.pages.career-apply', compact('job'));
    }

    public function storeApplication(Request $request, Job $job)
    {
        abort_unless($job->is_active, 404);

        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'min:2',
                'max:100',
            ],

            'email' => [
                'required',
                'email',
                'max:150',
            ],

            'phone' => [
                'required',
                'string',
                'min:10',
                'max:15',
            ],

            'resume' => [
                'required',
                'file',
                'mimes:pdf,doc,docx',
                'max:5120',
            ],

            'message' => [
                'nullable',
                'string',
                'max:2000',
            ],
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'public');

        $application = JobApplication::create([
            'job_id' => $job->id,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'resume' => $resumePath,
            'message' => $validated['message'] ?? null,
            'status' => 'new',
        ]);

        $notificationEmail = env('APPOINTMENT_NOTIFICATION_EMAIL');

        if ($notificationEmail) {
            Mail::to($notificationEmail)
                ->send(new NewJobApplicationMail($application));
        }

        return redirect()
            ->route('careers.apply', $job->slug)
            ->with('success', 'Your application has been submitted successfully.');
    }
}