<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobController extends Controller
{
    // Job list
    public function index()
    {
        $jobs = Job::latest()->paginate(15);

        return view(
            'admin.pages.jobs.index',
            compact('jobs')
        );
    }

    // Add job form
    public function create()
    {
        return view('admin.pages.jobs.create');
    }

    // Store job
    public function store(Request $request)
    {
        $validated = $request->validate([
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
            ],

            'requirements' => [
                'nullable',
                'string',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ]);

        $validated['slug'] = $this->uniqueSlug(
            $validated['title']
        );

        $validated['is_active'] = $request->boolean(
            'is_active'
        );

        Job::create($validated);

        return redirect()
            ->route('admin.jobs.index')
            ->with(
                'success',
                'Job created successfully.'
            );
    }

    // Edit job form
    public function edit(Job $job)
    {
        return view(
            'admin.pages.jobs.edit',
            compact('job')
        );
    }

    // Update job
    public function update(
        Request $request,
        Job $job
    ) {
        $validated = $request->validate([
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
            ],

            'requirements' => [
                'nullable',
                'string',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ]);

        $slug = Str::slug($validated['title']);

        $existingJob = Job::where('slug', $slug)
            ->where('id', '!=', $job->id)
            ->exists();

        if ($existingJob) {
            $slug .= '-' . $job->id;
        }

        $validated['slug'] = $slug;

        $validated['is_active'] = $request->boolean(
            'is_active'
        );

        $job->update($validated);

        return redirect()
            ->route('admin.jobs.index')
            ->with(
                'success',
                'Job updated successfully.'
            );
    }

    // Delete job
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()
            ->route('admin.jobs.index')
            ->with(
                'success',
                'Job deleted successfully.'
            );
    }

    // Generate unique slug
    private function uniqueSlug(string $title): string
    {
        $slug = Str::slug($title);

        $originalSlug = $slug;
        $counter = 1;

        while (Job::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}