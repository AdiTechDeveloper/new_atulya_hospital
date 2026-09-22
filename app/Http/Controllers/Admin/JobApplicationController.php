<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    public function index()
    {
        $applications = JobApplication::with('job')
            ->latest()
            ->paginate(15);

        return view('admin.pages.job-applications.index', compact('applications'));
    }

    public function show(JobApplication $jobApplication)
    {
        $jobApplication->load('job');

        return view('admin.pages.job-applications.show', compact('jobApplication'));
    }

    public function update(Request $request, JobApplication $jobApplication)
    {
        $validated = $request->validate([
            'status' => [
                'required',
                'in:new,shortlisted,interview,selected,rejected',
            ],
        ]);

        $jobApplication->update([
            'status' => $validated['status'],
        ]);

        return redirect()
            ->route('admin.job-applications.show', $jobApplication->id)
            ->with('success', 'Application status updated successfully.');
    }

    public function downloadResume(JobApplication $jobApplication)
    {
        if (
            !$jobApplication->resume ||
            !Storage::disk('public')->exists($jobApplication->resume)
        ) {
            abort(404);
        }

        return Storage::disk('public')->download(
            $jobApplication->resume,
            basename($jobApplication->resume)
        );
    }

    public function destroy(JobApplication $jobApplication)
    {
        if (
            $jobApplication->resume &&
            Storage::disk('public')->exists($jobApplication->resume)
        ) {
            Storage::disk('public')->delete($jobApplication->resume);
        }

        $jobApplication->delete();

        return redirect()
            ->route('admin.job-applications.index')
            ->with('success', 'Application deleted successfully.');
    }
}