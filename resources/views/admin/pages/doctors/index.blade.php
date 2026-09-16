@extends('admin.layout.app')

@section('title', 'Manage Doctors')

@section('content')
<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid px-4 mt-6">
            {{-- Page Header & Add Button --}}
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2>Manage Doctors</h2>
                    <p class="text-muted mb-0">Add, edit, or manage doctor profiles and their details.</p>
                </div>
                <a href="{{ route('admin.doctors.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-lg"></i> Add New Doctor
                </a>
            </div>

            {{-- Doctors Data Table Card --}}
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle text-nowrap" style="min-width: 1000px;">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 8%;">Profile</th>
                                    <th style="width: 20%;">Name</th>
                                    <th style="width: 15%;">Department</th>
                                    <th style="width: 22%;">Speciality</th>
                                    <th style="width: 10%;">OPD Timing</th>
                                    <th style="width: 5%;">Status</th>
                                    <th style="width: 20%;" class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($doctors as $doctor)
                                <tr>
                                    <td>
                                        @if($doctor->image)
                                        <img src="{{ asset('storage/' . $doctor->image) }}" alt="{{ $doctor->name }}" class="rounded-circle object-fit-cover" style="width: 50px; height: 50px;">
                                        @else
                                        <div class="bg-light rounded-circle d-flex align-items-center justify-content-center text-secondary fw-bold" style="width: 50px; height: 50px;">
                                            <i class="bi bi-person-fill fs-4"></i>
                                        </div>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="fw-bold d-block">{{ $doctor->name }}</span>
                                        <small class="text-muted">{{ $doctor->qualification }}</small>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary">{{ $doctor->department }}</span>
                                    </td>
                                    <td>{{ $doctor->speciality }}</td>
                                    <td>
                                        <small class="text-muted"><i class="bi bi-clock me-1"></i>{{ $doctor->opd_timing }}</small>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.doctors.status', $doctor->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-sm {{ $doctor->is_active ? 'btn-success' : 'btn-outline-secondary' }}">
                                                {{ $doctor->is_active ? 'Active' : 'Inactive' }}
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this doctor?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4 text-muted">
                                        No doctors found. Click "Add New Doctor" to get started.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@if(session('success') || session('error'))
<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">
    <div id="doctorToast" class="toast align-items-center border-0 shadow-lg {{ session('success') ? 'text-bg-success' : 'text-bg-danger' }}" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                @if(session('success'))
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                @else
                <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
                @endif
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toastElement = document.getElementById('doctorToast');

        if (toastElement) {
            new bootstrap.Toast(toastElement, {
                delay: 3000
            }).show();
        }
    });

</script>
@endif
@endsection
