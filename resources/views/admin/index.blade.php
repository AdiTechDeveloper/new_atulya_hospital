@extends('admin.layout.app')

@section('title', 'Home')

@section('content')

<main class="main-wrapper">
    <div class="main-content">

        <!-- =========================
             DASHBOARD HEADER
        ========================== -->
        <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-3">

            <div>
                <h4 class="mb-1">Dashboard</h4>

                <p class="mb-0 text-secondary">
                    Hospital overview
                </p>
            </div>

            <div class="d-flex gap-2 flex-wrap">

                <!-- Add Doctor -->
                <a href="{{ route('admin.doctors.create') }}"
                   class="btn btn-primary">

                    <span class="material-icons-outlined align-middle me-1">
                        person_add
                    </span>

                    Add Doctor

                </a>


                <!-- Add Department -->
                <a href="{{ route('admin.departments.create') }}"
                   class="btn btn-outline-primary">

                    <span class="material-icons-outlined align-middle me-1">
                        apartment
                    </span>

                    Add Department

                </a>


                <!-- Add Facility -->
                <a href="{{ route('admin.facilities.create') }}"
                   class="btn btn-outline-primary">

                    <span class="material-icons-outlined align-middle me-1">
                        medical_services
                    </span>

                    Add Facility

                </a>

            </div>

        </div>


        <!-- =========================
             STATISTICS
        ========================== -->
        <div class="row">

            <!-- TOTAL DOCTORS -->
            <div class="col-12 col-sm-6 col-xl-4 mb-4">

                <div class="card radius-10">

                    <div class="card-body">

                        <div class="d-flex align-items-center">

                            <div>

                                <p class="mb-1 text-secondary">
                                    Total Doctors
                                </p>

                                <h4 class="mb-0">
                                    {{ $totalDoctors }}
                                </h4>

                            </div>

                            <div class="ms-auto">

                                <div class="widgets-icons bg-light-primary text-primary">

                                    <span class="material-icons-outlined">
                                        medical_services
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- TOTAL DEPARTMENTS -->
            <div class="col-12 col-sm-6 col-xl-4 mb-4">

                <div class="card radius-10">

                    <div class="card-body">

                        <div class="d-flex align-items-center">

                            <div>

                                <p class="mb-1 text-secondary">
                                    Total Departments
                                </p>

                                <h4 class="mb-0">
                                    {{ $totalDepartments }}
                                </h4>

                            </div>

                            <div class="ms-auto">

                                <div class="widgets-icons bg-light-success text-success">

                                    <span class="material-icons-outlined">
                                        apartment
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- TOTAL APPOINTMENTS -->
            <div class="col-12 col-sm-6 col-xl-4 mb-4">

                <div class="card radius-10">

                    <div class="card-body">

                        <div class="d-flex align-items-center">

                            <div>

                                <p class="mb-1 text-secondary">
                                    Total Appointments
                                </p>

                                <h4 class="mb-0">
                                    {{ $totalAppointments }}
                                </h4>

                            </div>

                            <div class="ms-auto">

                                <div class="widgets-icons bg-light-warning text-warning">

                                    <span class="material-icons-outlined">
                                        calendar_month
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             RECENT APPOINTMENTS
        ========================== -->
        <div class="card radius-10 mb-4">

            <div class="card-header d-flex align-items-center justify-content-between">

                <div>

                    <h6 class="mb-0">
                        Recent Appointments
                    </h6>

                    <small class="text-secondary">
                        Latest patient appointments
                    </small>

                </div>

                <a href="{{ route('admin.appointments.index') }}"
                   class="btn btn-sm btn-outline-primary">

                    View All

                </a>

            </div>


            <div class="card-body">

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

                                <th>Status</th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($recentAppointments as $appointment)

                                <tr>

                                    <td>
                                        {{ $loop->iteration }}
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
                                        {{ $appointment->department ?: '-' }}
                                    </td>


                                    <td>
                                        {{ $appointment->doctor?->name ?: '-' }}
                                    </td>


                                    <td>

                                        {{ $appointment->appointment_date?->format('d M Y') ?? '-' }}

                                    </td>


                                    <td>

                                        @php

                                            $appointmentStatusClass = match($appointment->status) {

                                                'confirmed' => 'bg-success',

                                                'completed' => 'bg-primary',

                                                'cancelled' => 'bg-danger',

                                                default => 'bg-warning',

                                            };

                                        @endphp


                                        <span class="badge {{ $appointmentStatusClass }}">

                                            {{ ucfirst($appointment->status ?? 'pending') }}

                                        </span>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="7"
                                        class="text-center text-secondary py-4">

                                        No recent appointments found.

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        <!-- =========================
             RECENT JOB APPLICATIONS
        ========================== -->
        <div class="card radius-10 mb-4">

            <div class="card-header d-flex align-items-center justify-content-between">

                <div>

                    <h6 class="mb-0">
                        Recent Job Applications
                    </h6>

                    <small class="text-secondary">
                        Latest career applications
                    </small>

                </div>


                <a href="{{ route('admin.job-applications.index') }}"
                   class="btn btn-sm btn-outline-primary">

                    View All

                </a>

            </div>


            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead>

                            <tr>

                                <th>#</th>

                                <th>Candidate</th>

                                <th>Job Position</th>

                                <th>Email</th>

                                <th>Phone</th>

                                <th>Status</th>

                                <th>Date</th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($recentApplications as $application)

                                <tr>

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>


                                    <td>

                                        <strong>
                                            {{ $application->name }}
                                        </strong>

                                    </td>


                                    <td>
                                        {{ $application->job?->title ?: '-' }}
                                    </td>


                                    <td>
                                        {{ $application->email }}
                                    </td>


                                    <td>
                                        {{ $application->phone }}
                                    </td>


                                    <td>

                                        @php

                                            $applicationStatusClass = match($application->status) {

                                                'shortlisted' => 'bg-primary',

                                                'interview' => 'bg-info',

                                                'selected' => 'bg-success',

                                                'rejected' => 'bg-danger',

                                                default => 'bg-warning',

                                            };

                                        @endphp


                                        <span class="badge {{ $applicationStatusClass }}">

                                            {{ ucfirst($application->status ?? 'new') }}

                                        </span>

                                    </td>


                                    <td>

                                        {{ $application->created_at?->format('d M Y') ?? '-' }}

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="7"
                                        class="text-center text-secondary py-4">

                                        No recent job applications found.

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>
</main>


<div class="overlay btn-toggle"></div>

@endsection