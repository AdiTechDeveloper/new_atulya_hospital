@extends('website.layout.app')

@section('title', $doctor->name . ' - ' . setting('hospital_name'))

@section('content')

<section class="doctor-profile-hero">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Doctor Image -->
            <div class="col-lg-4">

                <div class="doctor-profile-photo">

                    @if($doctor->image)
                        <img
                            src="{{ asset('storage/' . $doctor->image) }}"
                            alt="{{ $doctor->name }}"
                        >
                    @else
                        <img
                            src="{{ asset('website/assets/images/doctor/doctor-placeholder.jpg') }}"
                            alt="{{ $doctor->name }}"
                        >
                    @endif

                    <div class="doctor-photo-badge">

                        <i class="fas fa-user-md"></i>

                        <div>

                            <strong>
                                Specialist Doctor
                            </strong>

                            <span>
                                {{ setting('hospital_name') }}
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Doctor Details -->
            <div class="col-lg-8">

                <div class="doctor-hero-content">

                    <!-- Department -->
                    <span class="doctor-department-badge">

                        <i class="fas fa-stethoscope"></i>

                        {{ $doctor->department }}

                    </span>


                    <!-- Doctor Name -->
                    <h1>
                        {{ $doctor->name }}
                    </h1>


                    <!-- Specialization -->
                    <div class="doctor-specialization">

                        {{ $doctor->speciality }}

                    </div>


                    <!-- Quick Information -->
                    <div class="doctor-quick-grid">

                        <!-- Qualification -->
                        <div class="doctor-quick-card">

                            <i class="fas fa-graduation-cap"></i>

                            <div>

                                <small>
                                    Qualification
                                </small>

                                <strong>
                                    {{ $doctor->qualification }}
                                </strong>

                            </div>

                        </div>


                        <!-- Department -->
                        <div class="doctor-quick-card">

                            <i class="fas fa-stethoscope"></i>

                            <div>

                                <small>
                                    Department
                                </small>

                                <strong>
                                    {{ $doctor->department }}
                                </strong>

                            </div>

                        </div>


                        <!-- Specialty -->
                        <div class="doctor-quick-card">

                            <i class="fas fa-user-md"></i>

                            <div>

                                <small>
                                    Specialty
                                </small>

                                <strong>
                                    {{ $doctor->speciality }}
                                </strong>

                            </div>

                        </div>


                        <!-- OPD Timing -->
                        <div class="doctor-quick-card">

                            <i class="far fa-clock"></i>

                            <div>

                                <small>
                                    OPD Timing
                                </small>

                                <strong>
                                    {{ $doctor->opd_timing }}
                                </strong>

                            </div>

                        </div>

                    </div>


                    <!-- Buttons -->
                    <div class="doctor-action-buttons">

                        <a
                            href="{{ url('/contact') }}?doctor={{ urlencode($doctor->name) }}"
                            class="theme-btn doctor-book-btn"
                        >

                            <i class="far fa-calendar-check"></i>

                            Book An Appointment

                        </a>


                        <a
                            href="tel:{{ $doctor->phone_number ?: setting('phone') }}"
                            class="doctor-call-btn"
                        >

                            <i class="fas fa-phone-alt"></i>

                            Call Hospital

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     DOCTOR INFORMATION
========================================================= -->

<section class="doctor-info-section">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="doctor-content-card">


                    <!-- ABOUT DOCTOR -->
                    <div>

                        <span class="doctor-section-label">
                            About The Doctor
                        </span>


                        <h2>
                            {{ $doctor->name }}
                        </h2>


                        <p>

                            @if($doctor->about)

                                {!! nl2br(e($doctor->about)) !!}

                            @else

                                <strong>
                                    {{ $doctor->name }}
                                </strong>

                                is a

                                <strong>
                                    {{ $doctor->speciality }}
                                </strong>

                                at

                                {{ setting('hospital_name') }}.

                                The doctor provides specialised consultation,
                                clinical evaluation and treatment guidance
                                within the

                                <strong>
                                    {{ $doctor->department }}
                                </strong>

                                department.

                            @endif

                        </p>

                    </div>


                    <!-- PROFESSIONAL DETAILS -->
                    <div class="mt-5">

                        <span class="doctor-section-label">
                            Professional Details
                        </span>


                        <h3 class="mt-2">
                            Qualifications & Specialization
                        </h3>


                        <div class="doctor-list-box">


                            <!-- Left Column -->
                            <ul>

                                <li>

                                    <i class="far fa-check"></i>

                                    <span>

                                        <strong>
                                            Department:
                                        </strong>

                                        {{ $doctor->department }}

                                    </span>

                                </li>


                                <li>

                                    <i class="far fa-check"></i>

                                    <span>

                                        <strong>
                                            Qualification:
                                        </strong>

                                        {{ $doctor->qualification }}

                                    </span>

                                </li>

                            </ul>


                            <!-- Right Column -->
                            <ul>

                                <li>

                                    <i class="far fa-check"></i>

                                    <span>

                                        <strong>
                                            Specialization:
                                        </strong>

                                        {{ $doctor->speciality }}

                                    </span>

                                </li>


                                <li>

                                    <i class="far fa-check"></i>

                                    <span>

                                        <strong>
                                            OPD Timing:
                                        </strong>

                                        {{ $doctor->opd_timing }}

                                    </span>

                                </li>

                            </ul>


                        </div>

                    </div>


                    <!-- AREAS OF CARE -->
                    <div class="mt-5">

                        <span class="doctor-section-label">
                            Areas Of Care
                        </span>


                        <h3 class="mt-2">
                            Specialised Medical Care
                        </h3>


                        <p>

                            Consultation and specialised medical care
                            related to

                            <strong>
                                {{ $doctor->department }}
                            </strong>

                            and

                            <strong>
                                {{ $doctor->speciality }}
                            </strong>.

                        </p>


                        @php
                            $areasOfCare = $doctor->areas_of_care ?? [];
                        @endphp


                        @if(is_string($areasOfCare))
                            @php
                                $areasOfCare = json_decode($areasOfCare, true) ?: [];
                            @endphp
                        @endif


                        @if(count($areasOfCare))

                            <div class="doctor-list-box">

                                <ul>

                                    @foreach(array_slice($areasOfCare, 0, ceil(count($areasOfCare) / 2)) as $area)

                                        <li>

                                            <i class="far fa-check"></i>

                                            {{ $area }}

                                        </li>

                                    @endforeach

                                </ul>


                                <ul>

                                    @foreach(array_slice($areasOfCare, ceil(count($areasOfCare) / 2)) as $area)

                                        <li>

                                            <i class="far fa-check"></i>

                                            {{ $area }}

                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        @else

                            <div class="doctor-list-box">

                                <ul>

                                    <li>
                                        <i class="far fa-check"></i>
                                        Specialist Consultation
                                    </li>

                                    <li>
                                        <i class="far fa-check"></i>
                                        Clinical Evaluation
                                    </li>

                                </ul>


                                <ul>

                                    <li>
                                        <i class="far fa-check"></i>
                                        Treatment Guidance
                                    </li>

                                    <li>
                                        <i class="far fa-check"></i>
                                        Patient-Centred Care
                                    </li>

                                </ul>

                            </div>

                        @endif

                    </div>


                    <!-- PATIENT CARE -->
                    <div class="mt-5">

                        <span class="doctor-section-label">
                            Patient Care
                        </span>


                        <h3 class="mt-2">
                            Compassionate Healthcare
                        </h3>


                        @if($doctor->patient_care_text)

                            <p>
                                {!! nl2br(e($doctor->patient_care_text)) !!}
                            </p>

                        @else

                            <p>

                                {{ setting('hospital_name') }}

                                is committed to providing professional,
                                accessible and compassionate healthcare.

                            </p>


                            <p>

                                Patients can consult

                                <strong>
                                    {{ $doctor->name }}
                                </strong>

                                during the scheduled OPD hours and discuss
                                their healthcare concerns with the specialist.

                            </p>

                        @endif

                    </div>


                    <!-- CARE BANNER -->
                    <div class="doctor-care-banner">

                        <i class="fas fa-heart"></i>

                        <div>

                            <strong>
                                Patient-Centred Care
                            </strong>

                            <span>

                                Our approach focuses on understanding
                                patient needs and providing appropriate
                                medical guidance and care.

                            </span>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>

@endsection