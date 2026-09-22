@extends('admin.layout.app')

@section('title', 'Appointments')

@section('content')

<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            <div class="d-flex align-items-center justify-content-between mb-4">

                <div>
                    <h4 class="mb-1">
                        Appointments
                    </h4>

                    <p class="mb-0 text-secondary">
                        Manage all patient appointments.
                    </p>
                </div>

            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($appointments->count())

                <div class="card">

                    <div class="card-body p-4">

                        <div class="table-responsive">

                            <table class="table table-hover align-middle mb-0">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Patient</th>
                                        <th>Phone</th>
                                        <th>Department</th>
                                        <th>Doctor</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach($appointments as $appointment)

                                        <tr>

                                            <td>
                                                {{ $appointments->firstItem() + $loop->index }}
                                            </td>

                                            <td>
                                                <strong>
                                                    {{ $appointment->name }}
                                                </strong>
                                            </td>

                                            <td>
                                                {{ $appointment->phone }}
                                            </td>

                                            <td>
                                                {{ $appointment->department
                                                    ? ucwords($appointment->department)
                                                    : '-' }}
                                            </td>

                                            <td>
                                                {{ $appointment->doctor?->name ?? '-' }}
                                            </td>

                                            <td>
                                                {{ $appointment->appointment_date
                                                    ? $appointment->appointment_date->format('d M Y')
                                                    : '-' }}
                                            </td>

                                            <td>
                                                {{ $appointment->appointment_time
                                                    ? \Carbon\Carbon::parse($appointment->appointment_time)->format('h:i A')
                                                    : '-' }}
                                            </td>

                                            <td>

                                                @if($appointment->status === 'pending')

                                                    <span class="badge bg-warning text-dark">
                                                        Pending
                                                    </span>

                                                @elseif($appointment->status === 'confirmed')

                                                    <span class="badge bg-primary">
                                                        Confirmed
                                                    </span>

                                                @elseif($appointment->status === 'completed')

                                                    <span class="badge bg-success">
                                                        Completed
                                                    </span>

                                                @elseif($appointment->status === 'cancelled')

                                                    <span class="badge bg-danger">
                                                        Cancelled
                                                    </span>

                                                @endif

                                            </td>

                                            <td>

                                                <a
                                                    href="{{ route('admin.appointments.show', $appointment->id) }}"
                                                    class="btn btn-sm btn-primary"
                                                >
                                                    <span class="material-icons-outlined align-middle me-1">
                                                        visibility
                                                    </span>
                                                    View
                                                </a>

                                            </td>

                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                        <div class="mt-4">

                            {{ $appointments->links() }}

                        </div>

                    </div>

                </div>

            @else

                <div class="card">

                    <div class="card-body p-5 text-center">

                        <span
                            class="material-icons-outlined text-secondary"
                            style="font-size: 50px;"
                        >
                            event_note
                        </span>

                        <h5 class="mt-3 mb-2">
                            No Appointments Found
                        </h5>

                        <p class="text-secondary mb-0">
                            There are no appointments available yet.
                        </p>

                    </div>

                </div>

            @endif

        </div>
    </div>
</main>

@endsection