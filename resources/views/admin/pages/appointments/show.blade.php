@extends('admin.layout.app')

@section('title', 'Appointment Details')

@section('content')

<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            <div class="d-flex align-items-center justify-content-between mb-4">

                <div>
                    <h4 class="mb-1">
                        Appointment Details
                    </h4>

                    <p class="mb-0 text-secondary">
                        View and manage appointment details.
                    </p>
                </div>

                <a
                    href="{{ route('admin.appointments.index') }}"
                    class="btn btn-light"
                >
                    <span class="material-icons-outlined align-middle me-1">
                        arrow_back
                    </span>
                    Back to Appointments
                </a>

            </div>

            <!-- @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif -->

            @if($errors->any())
                <div class="alert alert-danger">

                    <div class="fw-semibold mb-2">
                        Please fix the following errors:
                    </div>

                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif

            <form
                action="{{ route('admin.appointments.update', $appointment->id) }}"
                method="POST"
            >

                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-12 col-xl-8">

                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Patient Information
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Update patient information after confirmation.
                                    </p>

                                </div>

                                <div class="row g-4">

                                    <div class="col-12 col-md-6">

                                        <label class="form-label">
                                            Patient Name
                                        </label>

                                        <input
                                            type="text"
                                            name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name', $appointment->name) }}"
                                            maxlength="100"
                                            required
                                        >

                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                    <div class="col-12 col-md-6">

                                        <label class="form-label">
                                            Phone
                                        </label>

                                        <input
                                            type="text"
                                            name="phone"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ old('phone', $appointment->phone) }}"
                                            maxlength="10"
                                            inputmode="numeric"
                                            required
                                        >

                                        @error('phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Appointment Information
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Update department, doctor, date and time.
                                    </p>

                                </div>

                                <div class="row g-4">

                                    <div class="col-12 col-md-6">

                                        <label class="form-label">
                                            Department
                                        </label>

                                        <select
                                            name="department"
                                            id="appointmentDepartment"
                                            class="form-select @error('department') is-invalid @enderror"
                                        >

                                            <option value="">
                                                Select Department
                                            </option>

                                            @foreach($departments as $department)

                                                <option
                                                    value="{{ $department }}"
                                                    {{ old('department', $appointment->department) == $department ? 'selected' : '' }}
                                                >
                                                    {{ ucwords($department) }}
                                                </option>

                                            @endforeach

                                        </select>

                                        @error('department')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    <div class="col-12 col-md-6">

                                        <label class="form-label">
                                            Doctor
                                        </label>

                                        <select
                                            name="doctor_id"
                                            id="appointmentDoctor"
                                            class="form-select @error('doctor_id') is-invalid @enderror"
                                        >

                                            <option value="">
                                                Select Doctor
                                            </option>

                                            @foreach($doctors as $doctor)

                                                <option
                                                    value="{{ $doctor->id }}"
                                                    data-department="{{ trim($doctor->department) }}"
                                                    {{ old('doctor_id', $appointment->doctor_id) == $doctor->id ? 'selected' : '' }}
                                                >
                                                    {{ $doctor->name }}
                                                </option>

                                            @endforeach

                                        </select>

                                        @error('doctor_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    <div class="col-12 col-md-6">

                                        <label class="form-label">
                                            Appointment Date
                                        </label>

                                        <input
                                            type="date"
                                            name="appointment_date"
                                            class="form-control @error('appointment_date') is-invalid @enderror"
                                            value="{{ old('appointment_date', $appointment->appointment_date?->format('Y-m-d')) }}"
                                            min="{{ date('Y-m-d') }}"
                                            required
                                        >

                                        @error('appointment_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    <div class="col-12 col-md-6">

                                        <label class="form-label">
                                            Appointment Time
                                        </label>

                                        <input
                                            type="time"
                                            name="appointment_time"
                                            class="form-control @error('appointment_time') is-invalid @enderror"
                                            value="{{ old('appointment_time', $appointment->appointment_time ? \Carbon\Carbon::parse($appointment->appointment_time)->format('H:i') : '') }}"
                                        >

                                        @error('appointment_time')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Additional Information
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Add or update notes related to the appointment.
                                    </p>

                                </div>

                                <div>

                                    <label class="form-label">
                                        Message
                                    </label>

                                    <textarea
                                        name="message"
                                        class="form-control @error('message') is-invalid @enderror"
                                        rows="5"
                                        maxlength="1000"
                                        placeholder="Enter appointment notes..."
                                    >{{ old('message', $appointment->message) }}</textarea>

                                    @error('message')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                            </div>

                        </div>


                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Appointment Status
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Update the current appointment status.
                                    </p>

                                </div>

                                <div class="row g-3">

                                    <div class="col-12 col-md-8">

                                        <label class="form-label">
                                            Status
                                        </label>

                                        <select
                                            name="status"
                                            class="form-select @error('status') is-invalid @enderror"
                                            required
                                        >

                                            <option
                                                value="pending"
                                                {{ old('status', $appointment->status) === 'pending' ? 'selected' : '' }}
                                            >
                                                Pending
                                            </option>

                                            <option
                                                value="confirmed"
                                                {{ old('status', $appointment->status) === 'confirmed' ? 'selected' : '' }}
                                            >
                                                Confirmed
                                            </option>

                                            <option
                                                value="completed"
                                                {{ old('status', $appointment->status) === 'completed' ? 'selected' : '' }}
                                            >
                                                Completed
                                            </option>

                                            <option
                                                value="cancelled"
                                                {{ old('status', $appointment->status) === 'cancelled' ? 'selected' : '' }}
                                            >
                                                Cancelled
                                            </option>

                                        </select>

                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="d-flex align-items-center justify-content-between gap-3">

                                    <div>

                                        <small class="text-secondary">
                                            Created At
                                        </small>

                                        <div class="mt-1">
                                            {{ $appointment->created_at->format('d M Y, h:i A') }}
                                        </div>

                                    </div>

                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        <span class="material-icons-outlined align-middle me-1">
                                            save
                                        </span>
                                        Save Changes
                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="col-12 col-xl-4">

                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <h5 class="mb-4">
                                    Current Appointment
                                </h5>

                                <div class="mb-3">

                                    <small class="text-secondary">
                                        Patient
                                    </small>

                                    <div class="fw-semibold mt-1">
                                        {{ $appointment->name }}
                                    </div>

                                </div>

                                <div class="mb-3">

                                    <small class="text-secondary">
                                        Phone
                                    </small>

                                    <div class="fw-semibold mt-1">
                                        {{ $appointment->phone }}
                                    </div>

                                </div>

                                <div class="mb-3">

                                    <small class="text-secondary">
                                        Department
                                    </small>

                                    <div class="fw-semibold mt-1">
                                        {{ $appointment->department
                                            ? ucwords($appointment->department)
                                            : '-' }}
                                    </div>

                                </div>

                                <div class="mb-3">

                                    <small class="text-secondary">
                                        Doctor
                                    </small>

                                    <div class="fw-semibold mt-1">
                                        {{ $appointment->doctor?->name ?? '-' }}
                                    </div>

                                </div>

                                <div class="mb-3">

                                    <small class="text-secondary">
                                        Appointment Date
                                    </small>

                                    <div class="fw-semibold mt-1">
                                        {{ $appointment->appointment_date
                                            ? $appointment->appointment_date->format('d M Y')
                                            : '-' }}
                                    </div>

                                </div>

                                <div class="mb-3">

                                    <small class="text-secondary">
                                        Appointment Time
                                    </small>

                                    <div class="fw-semibold mt-1">
                                        {{ $appointment->appointment_time
                                            ? \Carbon\Carbon::parse($appointment->appointment_time)->format('h:i A')
                                            : '-' }}
                                    </div>

                                </div>

                                <div>

                                    <small class="text-secondary">
                                        Status
                                    </small>

                                    <div class="mt-2">

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

                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="card">

                            <div class="card-body p-4">

                                <h5 class="mb-3">
                                    Delete Appointment
                                </h5>

                                <p class="text-secondary">
                                    This action cannot be undone.
                                </p>

                                <form
                                    action="{{ route('admin.appointments.destroy', $appointment->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this appointment?');"
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
                                        Delete Appointment
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>
    </div>
</main>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const department = document.getElementById('appointmentDepartment');
    const doctor = document.getElementById('appointmentDoctor');

    if (!department || !doctor) {
        return;
    }

    const doctorOptions = Array.from(
        doctor.querySelectorAll('option[data-department]')
    );

    const initialDoctor = @json(old('doctor_id', $appointment->doctor_id));

    function updateDoctors(selectedDepartment, selectedDoctor = null) {

        selectedDepartment = selectedDepartment
            .trim()
            .toLowerCase();

        let hasDoctors = false;

        doctorOptions.forEach(function (option) {

            const doctorDepartment = option
                .getAttribute('data-department')
                .trim()
                .toLowerCase();

            if (
                selectedDepartment &&
                doctorDepartment === selectedDepartment
            ) {

                option.style.display = '';
                hasDoctors = true;

            } else {

                option.style.display = 'none';

            }

        });

        if (!selectedDepartment) {

            doctor.disabled = true;
            doctor.value = '';

            return;
        }

        doctor.disabled = !hasDoctors;

        if (!hasDoctors) {

            doctor.value = '';

            doctor.options[0].textContent =
                'No Doctor Available';

            return;
        }

        doctor.options[0].textContent =
            'Select Doctor';

        if (selectedDoctor) {

            const selectedOption = doctorOptions.find(function (option) {
                return option.value == selectedDoctor;
            });

            if (selectedOption) {
                doctor.value = selectedDoctor;
            }

        }

    }

    department.addEventListener('change', function () {

        updateDoctors(this.value);

    });

    updateDoctors(
        department.value,
        initialDoctor
    );

});
</script>

@endsection