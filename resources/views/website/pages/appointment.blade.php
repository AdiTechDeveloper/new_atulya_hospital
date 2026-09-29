@extends('website.layout.app')

@section('title', 'Book An Appointment')

@section('page-banner')

@include('website.partials.page-banner', [
'title' => 'Book An Appointment'
])

@endsection

@push('styles')
<style>
    .atulya-appointment-page {
        background: #f6f9fc;
        padding: 4.5rem 0;
    }

    .atulya-appointment-page .container {
        max-width: 1200px;
    }

    .appointment-page-intro {
        max-width: 760px;
        margin: 0 auto 2.5rem;
        text-align: center;
    }

    .appointment-page-intro .kicker {
        display: inline-flex;
        align-items: center;
        gap: .6rem;
        margin-bottom: .7rem;
        color: #08a9a1;
        font-size: 1.125rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .05em;
    }

    .appointment-page-intro .kicker::before,
    .appointment-page-intro .kicker::after {
        content: "";
        width: 1.8rem;
        height: 2px;
        background: #08c7bd;
    }

    .appointment-page-intro h1 {
        margin: 0 0 .8rem;
        color: #172965;
        font-size: clamp(2.2rem, 4vw, 3.2rem);
        line-height: 1.15;
        font-weight: 700;
    }

    .appointment-page-intro p {
        margin: 0;
        color: #59657a;
        font-size: 1.125rem;
        line-height: 1.7;
    }

    .appointment-main-card {
        overflow: hidden;
        background: #ffffff;
        border: 1px solid #e3eaf1;
        border-radius: 1rem;
        box-shadow: 0 .8rem 2.5rem rgba(23, 41, 101, .07);
    }

    .appointment-form-area {
        padding: 2.5rem;
    }

    .appointment-form-heading {
        margin-bottom: 1.8rem;
    }

    .appointment-form-heading h2 {
        margin: 0 0 .5rem;
        color: #172965;
        font-size: 2rem;
        line-height: 1.25;
        font-weight: 700;
    }

    .appointment-form-heading p {
        margin: 0;
        color: #59657a;
        font-size: 1.125rem;
        line-height: 1.6;
    }

    .appointment-form-area .alert {
        margin-bottom: 1.5rem;
        padding: .9rem 1rem;
        border-radius: .6rem;
        font-size: 1rem;
    }

    .appointment-form-area .row {
        row-gap: 1.25rem;
    }

    .appointment-form-area .form-clt {
        height: 100%;
    }

    .appointment-form-area .form-clt>p {
        margin: 0 0 .55rem;
        color: #172965;
        font-size: 1.125rem;
        line-height: 1.4;
        font-weight: 600;
    }

    .appointment-form-area .form-clt>p span {
        color: #7a8495;
        font-weight: 400;
    }

    .appointment-form-area input,
    .appointment-form-area select,
    .appointment-form-area textarea {
        width: 100%;
        color: #172965;
        background: #f8fafc;
        border: 1px solid #dfe6ee;
        border-radius: .6rem;
        outline: none;
        font-size: 1.125rem;
        transition: border-color .2s ease, box-shadow .2s ease, background .2s ease;
    }

    .appointment-form-area input,
    .appointment-form-area select {
        height: 3.4rem;
        padding: 0 1rem;
    }

    .appointment-form-area textarea {
        min-height: 7.5rem;
        padding: .9rem 1rem;
        resize: vertical;
    }

    .appointment-form-area input:focus,
    .appointment-form-area select:focus,
    .appointment-form-area textarea:focus {
        background: #ffffff;
        border-color: #08c7bd;
        box-shadow: 0 0 0 3px rgba(8, 199, 189, .08);
    }

    .appointment-form-area input::placeholder,
    .appointment-form-area textarea::placeholder {
        color: #8993a3;
        opacity: 1;
    }

    .appointment-form-area .text-danger {
        display: block;
        margin-top: .4rem;
        font-size: 1rem;
    }

    .appointment-submit {
        margin-top: .35rem;
    }

    .appointment-submit .appointment-submit-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: .75rem;
        min-height: 3.5rem;
        padding: .75rem 1.4rem .75rem 1.6rem;
        color: #ffffff;
        background: #08c7bd;
        border: 0;
        border-radius: 999px;
        font-size: 1.125rem;
        font-weight: 600;
        cursor: pointer;
        transition: all .25s ease;
    }

    .appointment-submit .appointment-submit-btn .btn-icon {
        width: 2.15rem;
        height: 2.15rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #08a9a1;
        background: #ffffff;
        border-radius: 50%;
        transition: transform .25s ease;
    }

    .appointment-submit .appointment-submit-btn:hover {
        color: #ffffff;
        background: #079f98;
        transform: translateY(-2px);
    }

    .appointment-submit .appointment-submit-btn:hover .btn-icon {
        transform: translateX(3px);
    }

    /* Right Side */

    .appointment-info-area {
        height: 100%;
        padding: 1.35rem;
        background: #edf8f7;
    }

    .appointment-images {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    .appointment-image-item {
        overflow: hidden;
        min-height: 15rem;
        background: #ffffff;
        border-radius: .8rem;
    }

    .appointment-image-item img {
        width: 100%;
        height: 100%;
        min-height: 15rem;
        display: block;
        object-fit: cover;
    }

    .appointment-info-content {
        padding: 1.4rem .35rem .3rem;
    }

    .appointment-info-content h3 {
        margin: 0 0 .65rem;
        color: #172965;
        font-size: 1.5rem;
        line-height: 1.3;
    }

    .appointment-info-content p {
        margin: 0 0 1.15rem;
        color: #59657a;
        font-size: 1.125rem;
        line-height: 1.65;
    }

    .appointment-info-list {
        display: flex;
        flex-direction: column;
        gap: .75rem;
    }

    .appointment-info-item {
        display: flex;
        align-items: center;
        gap: .7rem;
        color: #172965;
        font-size: 1.125rem;
        line-height: 1.4;
        font-weight: 600;
    }

    .appointment-info-item i {
        width: 2.35rem;
        height: 2.35rem;
        flex: 0 0 2.35rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        background: #08c7bd;
        border-radius: 50%;
        font-size: 1rem;
    }

    .appointment-info-item a {
        color: #172965;
    }

    .appointment-info-item a:hover {
        color: #08a9a1;
    }

    .appointment-form-area input:invalid:not(:placeholder-shown) {
        box-shadow: none;
    }

    @media (max-width: 991px) {

        .atulya-appointment-page {
            padding: 4rem 0;
        }

        .appointment-form-area {
            padding: 2.2rem;
        }

        .appointment-info-area {
            padding: 1.35rem;
        }

        .appointment-images {
            grid-template-columns: repeat(2, 1fr);
        }

        .appointment-image-item,
        .appointment-image-item img {
            min-height: 15rem;
        }
    }

    @media (max-width: 767px) {

        .atulya-appointment-page {
            padding: 3rem 0;
        }

        .appointment-page-intro {
            margin-bottom: 2rem;
        }

        .appointment-page-intro h1 {
            font-size: 2.2rem;
        }

        .appointment-form-area {
            padding: 1.5rem;
        }

        .appointment-form-heading h2 {
            font-size: 1.75rem;
        }

        .appointment-images {
            grid-template-columns: 1fr;
        }

        .appointment-image-item,
        .appointment-image-item img {
            min-height: 18rem;
        }

        .appointment-submit .appointment-submit-btn {
            width: 100%;
        }
    }

    @media (max-width: 480px) {

        .atulya-appointment-page {
            padding: 2.5rem 0;
        }

        .appointment-form-area {
            padding: 1.2rem;
        }

        .appointment-info-area {
            padding: 1rem;
        }

        .appointment-page-intro h1 {
            font-size: 2rem;
        }

        .appointment-form-heading h2 {
            font-size: 1.6rem;
        }
    }
</style>
@endpush


@section('content')

<section class="atulya-appointment-page">

    <div class="container">

        <div class="appointment-page-intro">

            <div class="kicker">
                Appointment
            </div>

            <h1>
                Book Your Appointment
            </h1>

            <p>
                Schedule an appointment with our experienced doctors
                and get the right medical care at Atulya Super Speciality Hospital & ICU.
            </p>

        </div>


        <div class="appointment-main-card">

            <div class="row g-0">

                {{-- Appointment Form --}}

                <div class="col-lg-8">

                    <div class="appointment-form-area">

                        <div class="appointment-form-heading">

                            <h2>
                                Book An Appointment
                            </h2>

                            <p>
                                Please fill in the details below and our team
                                will assist you with your appointment.
                            </p>

                        </div>


                        @if(session('success'))

                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>

                        @endif


                        <form
                            action="{{ route('appointment.store') }}"
                            method="POST"
                            id="appointmentForm">

                            @csrf

                            <div class="row">

                                {{-- Name --}}

                                <div class="col-md-6">

                                    <div class="form-clt">

                                        <p>Name*</p>

                                        <input
                                            type="text"
                                            name="name"
                                            id="appointmentName"
                                            value="{{ old('name') }}"
                                            placeholder="Enter Your Name"
                                            maxlength="50"
                                            autocomplete="name"
                                            required>

                                        @error('name')

                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>

                                        @enderror

                                    </div>

                                </div>


                                {{-- Phone --}}

                                <div class="col-md-6">

                                    <div class="form-clt">

                                        <p>Phone*</p>

                                        <input
                                            type="tel"
                                            name="phone"
                                            id="appointmentPhone"
                                            value="{{ old('phone') }}"
                                            placeholder="Enter Your Phone Number"
                                            maxlength="10"
                                            minlength="10"
                                            inputmode="numeric"
                                            autocomplete="tel"
                                            required>

                                        @error('phone')

                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>

                                        @enderror

                                    </div>

                                </div>


                                {{-- Department --}}



                                <div class="col-md-6">

                                    <div class="form-clt">

                                        <p>
                                            Department
                                            <span>(Optional)</span>
                                        </p>

                                        <select
                                            name="department"
                                            id="appointmentDepartment"
                                            class="w-100">

                                            <option value="">
                                                Select Department
                                            </option>

                                            @foreach($departments as $department)

                                            <option
                                                value="{{ $department->name }}"
                                                {{ old('department') == $department->name ? 'selected' : '' }}>
                                                {{ $department->name }}
                                            </option>

                                            @endforeach

                                            <option
                                                value="other_department"
                                                {{ old('department') == 'other_department' ? 'selected' : '' }}>
                                                Other Department
                                            </option>

                                        </select>

                                        @error('department')

                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>

                                        @enderror

                                    </div>

                                </div>


                                {{-- Doctor --}}

                                <div class="col-md-6">

                                    <div class="form-clt">

                                        <p>
                                            Doctor
                                            <span>(Optional)</span>
                                        </p>

                                        <select
                                            name="doctor_id"
                                            id="appointmentDoctor"
                                            class="w-100"
                                            disabled>

                                            <option value="">
                                                Select Department First
                                            </option>

                                            @foreach($doctors as $doctor)

                                            <option
                                                value="{{ $doctor->id }}"
                                                data-department="{{ trim($doctor->department) }}">
                                                {{ $doctor->name }}
                                            </option>

                                            @endforeach

                                            <option
                                                value="other"
                                                id="otherDoctorOption">
                                                Other Doctor
                                            </option>

                                        </select>

                                        @error('doctor_id')

                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>

                                        @enderror

                                    </div>

                                </div>


                                {{-- Date --}}

                                <div class="col-md-6">

                                    <div class="form-clt">

                                        <p>Date*</p>

                                        <input
                                            type="date"
                                            name="appointment_date"
                                            value="{{ old('appointment_date') }}"
                                            min="{{ date('Y-m-d') }}"
                                            required>

                                        @error('appointment_date')

                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>

                                        @enderror

                                    </div>

                                </div>


                                {{-- Time --}}

                                <div class="col-md-6">

                                    <div class="form-clt">

                                        <p>
                                            Time
                                            <span>(Optional)</span>
                                        </p>

                                        <select
                                            name="appointment_time"
                                            id="appointmentTime"
                                            class="w-100">

                                            <option value="">
                                                Select Time
                                            </option>

                                            @for($hour = 8; $hour <= 20; $hour++)

                                                @foreach([0, 30] as $minute)

                                                @php

                                                $time=sprintf( '%02d:%02d' ,
                                                $hour,
                                                $minute
                                                );

                                                $displayHour=$hour % 12 ?: 12;

                                                $ampm=$hour < 12
                                                ? 'AM'
                                                : 'PM' ;

                                                $displayTime=sprintf( '%d:%02d %s' ,
                                                $displayHour,
                                                $minute,
                                                $ampm
                                                );

                                                @endphp

                                                <option
                                                value="{{ $time }}"
                                                {{ old('appointment_time') == $time ? 'selected' : '' }}>
                                                {{ $displayTime }}
                                                </option>

                                                @endforeach

                                                @endfor

                                        </select>

                                        @error('appointment_time')

                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>

                                        @enderror

                                    </div>

                                </div>


                                {{-- Message --}}

                                <div class="col-12">

                                    <div class="form-clt">

                                        <p>
                                            Message
                                            <span>(Optional)</span>
                                        </p>

                                        <textarea
                                            name="message"
                                            rows="3"
                                            maxlength="1000"
                                            placeholder="Write Your Message">{{ old('message') }}</textarea>

                                        @error('message')

                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>

                                        @enderror

                                    </div>

                                </div>


                                {{-- Submit --}}

                                <div class="col-12">

                                    <div class="form-clt appointment-submit">

                                        <button
                                            type="submit"
                                            class="appointment-submit-btn"
                                            id="appointmentSubmit">

                                            <span>
                                                Submit Appointment
                                            </span>

                                            <span class="btn-icon">
                                                <i class="far fa-chevron-right"></i>
                                            </span>

                                        </button>

                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>


                {{-- Appointment Information --}}

                <div class="col-lg-4">

                    <div class="appointment-info-area">

                        <div class="appointment-images">

                            <div class="appointment-image-item">

                                <img
                                    src="{{ asset('assets/img/inner/contact/contact-img.jpg') }}"
                                    alt="Atulya Super Speciality Hospital">

                            </div>

                            <div class="appointment-image-item">

                                <img
                                    src="{{ asset('assets/img/home-1/hero/img1.png') }}"
                                    alt="Atulya Super Speciality Hospital">

                            </div>

                        </div>


                        <div class="appointment-info-content">

                            <h3>
                                Your Care Starts Here
                            </h3>

                            <p>
                                Share your details with us and our hospital
                                team will help you with the appointment process.
                            </p>

                            <div class="appointment-info-list">

                                <div class="appointment-info-item">

                                    <i class="far fa-phone-alt"></i>

                                    <a href="tel:{{ setting('phone') }}">
                                        {{ setting('phone') }}
                                    </a>

                                </div>

                                <div class="appointment-info-item">

                                    <i class="far fa-hospital"></i>

                                    <span>
                                        Atulya Super Speciality Hospital & ICU
                                    </span>

                                </div>

                                <div class="appointment-info-item">

                                    <i class="far fa-clock"></i>

                                    <span>
                                        Emergency Care Available 24×7
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection


@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const form = document.getElementById('appointmentForm');
        const departmentSelect =
            document.getElementById('appointmentDepartment');

        const doctorSelect =
            document.getElementById('appointmentDoctor');

        const nameInput =
            document.getElementById('appointmentName');

        const phoneInput =
            document.getElementById('appointmentPhone');

        const submitButton =
            document.getElementById('appointmentSubmit');

        if (!form || !departmentSelect || !doctorSelect) {
            return;
        }


        const doctorOptions = Array.from(
            doctorSelect.querySelectorAll('option[data-department]')
        );

        const otherDoctorOption =
            document.getElementById('otherDoctorOption');


      function updateDoctors(autoSelect = true) {

    const selectedDepartment =
        departmentSelect.value.trim().toLowerCase();

    doctorSelect.value = '';

    doctorOptions.forEach(function (option) {

        const doctorDepartment =
            option
                .getAttribute('data-department')
                .trim()
                .toLowerCase();

        option.style.display = 'none';
        option.disabled = true;

        if (
            selectedDepartment &&
            selectedDepartment !== 'other_department' &&
            doctorDepartment === selectedDepartment
        ) {

            option.style.display = '';
            option.disabled = false;

        }

    });


    // No department selected
    if (!selectedDepartment) {

        doctorSelect.disabled = true;

        doctorSelect.options[0].textContent =
            'Select Department';

        if (otherDoctorOption) {

            otherDoctorOption.style.display = 'none';
            otherDoctorOption.disabled = true;

        }

        return;
    }


    // Department selected
    doctorSelect.disabled = false;

    doctorSelect.options[0].textContent =
        'Select Doctor';


    // Other Doctor always available
    if (otherDoctorOption) {

        otherDoctorOption.style.display = '';
        otherDoctorOption.disabled = false;

    }


    // Other Department
    if (selectedDepartment === 'other_department') {

        doctorSelect.value = 'other';

        return;
    }


    // Find related doctors
    const relatedDoctors =
        doctorOptions.filter(function (option) {

            return option
                .getAttribute('data-department')
                .trim()
                .toLowerCase() === selectedDepartment;

        });


    // Related doctor exists
    if (
        autoSelect &&
        relatedDoctors.length > 0
    ) {

        doctorSelect.value =
            relatedDoctors[0].value;

    }


    // No doctor in this department
    else if (relatedDoctors.length === 0) {

        doctorSelect.value = 'other';

    }

}

        departmentSelect.addEventListener(
            'change',
            function() {

                updateDoctors(true);

            }
        );


        // Name input

        if (nameInput) {

            nameInput.addEventListener(
                'input',
                function() {

                    this.value = this.value
                        .replace(/[^A-Za-z\s]/g, '')
                        .replace(/\s{2,}/g, ' ')
                        .slice(0, 50);

                }
            );


            nameInput.addEventListener(
                'keydown',
                function(event) {

                    const allowedKeys = [
                        'Backspace',
                        'Delete',
                        'ArrowLeft',
                        'ArrowRight',
                        'ArrowUp',
                        'ArrowDown',
                        'Tab',
                        'Home',
                        'End',
                        ' '
                    ];

                    if (
                        allowedKeys.includes(event.key) ||
                        event.ctrlKey ||
                        event.metaKey
                    ) {
                        return;
                    }

                    if (!/^[A-Za-z]$/.test(event.key)) {
                        event.preventDefault();
                    }

                }
            );


            nameInput.addEventListener(
                'paste',
                function(event) {

                    const pastedText =
                        (event.clipboardData ||
                            window.clipboardData)
                        .getData('text');

                    if (!/^[A-Za-z\s]+$/.test(pastedText)) {
                        event.preventDefault();
                    }

                }
            );

        }


        // Phone input

        if (phoneInput) {

            phoneInput.addEventListener(
                'input',
                function() {

                    this.value = this.value
                        .replace(/\D/g, '')
                        .slice(0, 10);

                }
            );


            phoneInput.addEventListener(
                'keydown',
                function(event) {

                    const allowedKeys = [
                        'Backspace',
                        'Delete',
                        'ArrowLeft',
                        'ArrowRight',
                        'ArrowUp',
                        'ArrowDown',
                        'Tab',
                        'Home',
                        'End'
                    ];

                    if (
                        allowedKeys.includes(event.key) ||
                        event.ctrlKey ||
                        event.metaKey
                    ) {
                        return;
                    }

                    if (!/^[0-9]$/.test(event.key)) {
                        event.preventDefault();
                        return;
                    }

                    if (
                        this.value.length >= 10 &&
                        this.selectionStart ===
                        this.selectionEnd
                    ) {
                        event.preventDefault();
                    }

                }
            );


            phoneInput.addEventListener(
                'paste',
                function(event) {

                    const pastedText =
                        (event.clipboardData ||
                            window.clipboardData)
                        .getData('text');

                    if (!/^\d+$/.test(pastedText)) {
                        event.preventDefault();
                    }

                }
            );

        }


        // Restore selected values after validation error

        @if(old('department'))

        departmentSelect.value =
            @json(old('department'));

        updateDoctors(false);

        @if(old('doctor_id'))

        doctorSelect.value =
            @json(old('doctor_id'));

        @endif

        @endif


        // Submit button

        form.addEventListener(
            'submit',
            function() {

                if (submitButton) {

                    submitButton.disabled = true;

                    submitButton.style.opacity = '0.7';

                    submitButton.querySelector('span:first-child')
                        .textContent = 'Submitting...';

                }

            }
        );

    });
</script>

@endpush