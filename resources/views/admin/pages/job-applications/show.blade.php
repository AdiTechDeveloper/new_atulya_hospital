@extends('admin.layout.app')

@section('title', 'Application Details')

@section('content')

<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            <div class="d-flex align-items-center justify-content-between mb-4">

                <div>
                    <h4 class="mb-1">Application Details</h4>

                    <p class="mb-0 text-secondary">
                        View and manage candidate application.
                    </p>
                </div>

                <a
                    href="{{ route('admin.job-applications.index') }}"
                    class="btn btn-secondary"
                >
                    <span class="material-icons-outlined align-middle me-1">
                        arrow_back
                    </span>
                    Back
                </a>

            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">

                <div class="col-12 col-xl-8">

                    <div class="card mb-4">

                        <div class="card-body p-4">

                            <div class="mb-4">
                                <h5 class="mb-1">
                                    Candidate Information
                                </h5>

                                <p class="text-secondary mb-0">
                                    Personal details of the applicant.
                                </p>
                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <label class="form-label text-secondary">
                                        Full Name
                                    </label>

                                    <div class="fw-semibold">
                                        {{ $jobApplication->name }}
                                    </div>

                                </div>

                                <div class="col-md-6 mb-4">

                                    <label class="form-label text-secondary">
                                        Email
                                    </label>

                                    <div class="fw-semibold">
                                        {{ $jobApplication->email }}
                                    </div>

                                </div>

                                <div class="col-md-6 mb-4">

                                    <label class="form-label text-secondary">
                                        Phone
                                    </label>

                                    <div class="fw-semibold">
                                        {{ $jobApplication->phone }}
                                    </div>

                                </div>

                                <div class="col-md-6 mb-4">

                                    <label class="form-label text-secondary">
                                        Applied On
                                    </label>

                                    <div class="fw-semibold">
                                        {{ $jobApplication->created_at->format('d M Y, h:i A') }}
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="card mb-4">

                        <div class="card-body p-4">

                            <div class="mb-4">
                                <h5 class="mb-1">
                                    Job Information
                                </h5>

                                <p class="text-secondary mb-0">
                                    Position for which the candidate applied.
                                </p>
                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <label class="form-label text-secondary">
                                        Job
                                    </label>

                                    <div class="fw-semibold">
                                        {{ $jobApplication->job?->title ?? 'Job Deleted' }}
                                    </div>

                                </div>

                                <div class="col-md-6 mb-4">

                                    <label class="form-label text-secondary">
                                        Department
                                    </label>

                                    <div class="fw-semibold">
                                        {{ $jobApplication->job?->department ?? '-' }}
                                    </div>

                                </div>

                                <div class="col-md-6 mb-4">

                                    <label class="form-label text-secondary">
                                        Location
                                    </label>

                                    <div class="fw-semibold">
                                        {{ $jobApplication->job?->location ?? '-' }}
                                    </div>

                                </div>

                                <div class="col-md-6 mb-4">

                                    <label class="form-label text-secondary">
                                        Employment Type
                                    </label>

                                    <div class="fw-semibold">
                                        {{ $jobApplication->job?->employment_type ?? '-' }}
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="card mb-4">

                        <div class="card-body p-4">

                            <div class="mb-4">
                                <h5 class="mb-1">
                                    Candidate Message
                                </h5>
                            </div>

                            <div class="p-3 bg-light rounded">

                                @if($jobApplication->message)

                                    {!! nl2br(e($jobApplication->message)) !!}

                                @else

                                    <span class="text-secondary">
                                        No message provided.
                                    </span>

                                @endif

                            </div>

                        </div>

                    </div>


                    <div class="card">

                        <div class="card-body p-4">

                            <div class="mb-4">

                                <h5 class="mb-1">
                                    Resume
                                </h5>

                                <p class="text-secondary mb-0">
                                    Candidate's uploaded resume.
                                </p>

                            </div>

                            @if($jobApplication->resume)

                                <a
                                    href="{{ route('admin.job-applications.resume', $jobApplication->id) }}"
                                    class="btn btn-primary"
                                >
                                    <span class="material-icons-outlined align-middle me-1">
                                        download
                                    </span>
                                    Download Resume
                                </a>

                            @else

                                <p class="text-secondary mb-0">
                                    No resume available.
                                </p>

                            @endif

                        </div>

                    </div>

                </div>


                <div class="col-12 col-xl-4">

                    <div class="card mb-4">

                        <div class="card-body p-4">

                            <div class="mb-4">

                                <h5 class="mb-1">
                                    Application Status
                                </h5>

                                <p class="text-secondary mb-0">
                                    Update candidate status.
                                </p>

                            </div>

                            <form
                                action="{{ route('admin.job-applications.update', $jobApplication->id) }}"
                                method="POST"
                            >

                                @csrf
                                @method('PUT')

                                <div class="mb-4">

                                    <label class="form-label">
                                        Status
                                    </label>

                                    <select
                                        name="status"
                                        class="form-select @error('status') is-invalid @enderror"
                                    >

                                        <option
                                            value="new"
                                            {{ $jobApplication->status === 'new' ? 'selected' : '' }}
                                        >
                                            New
                                        </option>

                                        <option
                                            value="shortlisted"
                                            {{ $jobApplication->status === 'shortlisted' ? 'selected' : '' }}
                                        >
                                            Shortlisted
                                        </option>

                                        <option
                                            value="interview"
                                            {{ $jobApplication->status === 'interview' ? 'selected' : '' }}
                                        >
                                            Interview
                                        </option>

                                        <option
                                            value="selected"
                                            {{ $jobApplication->status === 'selected' ? 'selected' : '' }}
                                        >
                                            Selected
                                        </option>

                                        <option
                                            value="rejected"
                                            {{ $jobApplication->status === 'rejected' ? 'selected' : '' }}
                                        >
                                            Rejected
                                        </option>

                                    </select>

                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                                <button
                                    type="submit"
                                    class="btn btn-primary w-100"
                                >
                                    <span class="material-icons-outlined align-middle me-1">
                                        save
                                    </span>
                                    Save Changes
                                </button>

                            </form>

                        </div>

                    </div>


                    <div class="card">

                        <div class="card-body p-4">

                            <h5 class="mb-2">
                                Delete Application
                            </h5>

                            <p class="text-secondary">
                                This action cannot be undone.
                            </p>

                            <form
                                action="{{ route('admin.job-applications.destroy', $jobApplication->id) }}"
                                method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this application?');"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger w-100"
                                >
                                    <span class="material-icons-outlined align-middle me-1">
                                        delete
                                    </span>
                                    Delete Application
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</main>

@endsection