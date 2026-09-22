@extends('admin.layout.app')

@section('title', 'Jobs')

@section('content')

<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            <div class="d-flex align-items-center justify-content-between mb-4">

                <div>
                    <h4 class="mb-1">
                        Jobs
                    </h4>

                    <p class="mb-0 text-secondary">
                        Manage career opportunities.
                    </p>
                </div>

                <a
                    href="{{ route('admin.jobs.create') }}"
                    class="btn btn-primary"
                >
                    <span class="material-icons-outlined align-middle me-1">
                        add
                    </span>
                    Add Job
                </a>

            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($jobs->count())

                <div class="card">

                    <div class="card-body p-4">

                        <div class="table-responsive">

                            <table class="table table-hover align-middle mb-0">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Job Title</th>
                                        <th>Department</th>
                                        <th>Location</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Applications</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach($jobs as $job)

                                        <tr>

                                            <td>
                                                {{ $jobs->firstItem() + $loop->index }}
                                            </td>

                                            <td>
                                                <strong>
                                                    {{ $job->title }}
                                                </strong>
                                            </td>

                                            <td>
                                                {{ $job->department ?: '-' }}
                                            </td>

                                            <td>
                                                {{ $job->location ?: '-' }}
                                            </td>

                                            <td>
                                                {{ $job->employment_type ?: '-' }}
                                            </td>

                                            <td>

                                                @if($job->is_active)

                                                    <span class="badge bg-success">
                                                        Active
                                                    </span>

                                                @else

                                                    <span class="badge bg-secondary">
                                                        Inactive
                                                    </span>

                                                @endif

                                            </td>

                                            <td>
                                                {{ $job->applications()->count() }}
                                            </td>

                                            <td>

                                                <div class="d-flex gap-2">

                                                    <a
                                                        href="{{ route('admin.jobs.edit', $job->id) }}"
                                                        class="btn btn-sm btn-primary"
                                                    >
                                                        <span class="material-icons-outlined align-middle">
                                                            edit
                                                        </span>
                                                    </a>

                                                    <form
                                                        action="{{ route('admin.jobs.destroy', $job->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Are you sure you want to delete this job?');"
                                                    >

                                                        @csrf
                                                        @method('DELETE')

                                                        <button
                                                            type="submit"
                                                            class="btn btn-sm btn-danger"
                                                        >
                                                            <span class="material-icons-outlined align-middle">
                                                                delete
                                                            </span>
                                                        </button>

                                                    </form>

                                                </div>

                                            </td>

                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                        <div class="mt-4">
                            {{ $jobs->links() }}
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
                            work_outline
                        </span>

                        <h5 class="mt-3 mb-2">
                            No Jobs Found
                        </h5>

                        <p class="text-secondary mb-3">
                            Create your first career opportunity.
                        </p>

                        <a
                            href="{{ route('admin.jobs.create') }}"
                            class="btn btn-primary"
                        >
                            Add Job
                        </a>

                    </div>

                </div>

            @endif

        </div>
    </div>
</main>

@endsection