@extends('admin.layout.app')

@section('title', 'Job Applications')

@section('content')

<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            <div class="d-flex align-items-center justify-content-between mb-4">

                <div>
                    <h4 class="mb-1">Job Applications</h4>
                    <p class="mb-0 text-secondary">
                        Manage candidates who applied for jobs.
                    </p>
                </div>

                <a href="{{ route('admin.jobs.index') }}" class="btn btn-primary">
                    <span class="material-icons-outlined align-middle me-1">
                        work_outline
                    </span>
                    Manage Jobs
                </a>

            </div>
<!-- 
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif -->

            @if($applications->count())

                <div class="card">

                    <div class="card-body p-4">

                        <div class="table-responsive">

                            <table class="table table-hover align-middle mb-0">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate</th>
                                        <th>Job</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach($applications as $application)

                                        <tr>

                                            <td>
                                                {{ $applications->firstItem() + $loop->index }}
                                            </td>

                                            <td>
                                                <strong>
                                                    {{ $application->name }}
                                                </strong>
                                            </td>

                                            <td>
                                                {{ $application->job?->title ?? 'Job Deleted' }}
                                            </td>

                                            <td>
                                                {{ $application->email }}
                                            </td>

                                            <td>
                                                {{ $application->phone }}
                                            </td>

                                            <td>

                                                @if($application->status === 'new')

                                                    <span class="badge bg-primary">
                                                        New
                                                    </span>

                                                @elseif($application->status === 'shortlisted')

                                                    <span class="badge bg-info">
                                                        Shortlisted
                                                    </span>

                                                @elseif($application->status === 'interview')

                                                    <span class="badge bg-warning text-dark">
                                                        Interview
                                                    </span>

                                                @elseif($application->status === 'selected')

                                                    <span class="badge bg-success">
                                                        Selected
                                                    </span>

                                                @elseif($application->status === 'rejected')

                                                    <span class="badge bg-danger">
                                                        Rejected
                                                    </span>

                                                @endif

                                            </td>

                                            <td>
                                                {{ $application->created_at->format('d M Y') }}
                                            </td>

                                            <td>

                                                <a
                                                    href="{{ route('admin.job-applications.show', $application->id) }}"
                                                    class="btn btn-sm btn-primary"
                                                >
                                                    <span class="material-icons-outlined align-middle">
                                                        visibility
                                                    </span>
                                                </a>

                                            </td>

                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                        <div class="mt-4">
                            {{ $applications->links() }}
                        </div>

                    </div>

                </div>

            @else

                <div class="card">

                    <div class="card-body p-5 text-center">

                        <span
                            class="material-icons-outlined text-secondary"
                            style="font-size:50px;"
                        >
                            person_search
                        </span>

                        <h5 class="mt-3 mb-2">
                            No Applications Found
                        </h5>

                        <p class="text-secondary mb-0">
                            Candidate applications will appear here.
                        </p>

                    </div>

                </div>

            @endif

        </div>
    </div>
</main>

@endsection