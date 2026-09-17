@extends('website.layout.app')

@section('title', $department->name)

@section('content')

@php
    $services = $department->services ?? [];
    $specialities = $department->specialities ?? [];
    $conditions = $department->conditions ?? [];
    $whyChoose = $department->why_choose ?? [];
@endphp

<section style="padding-bottom: 3rem;" class="service-details-section  pt-80 pb-80">

    <div class="container">

        <div class="service-details-wrapper">

            <div class="row g-4">

                <!-- =========================
                    LEFT SIDEBAR
                ========================== -->
                <div class="col-lg-4 order-2 order-xl-1">

                    <div class="service-details-sidebar sticky-style">

                        <div class="sidebar-widget">

                            <ul class="wow fadeInUp" data-wow-delay=".3s">

                                @foreach($allDepartments as $item)

                                    <li>
                                        <a href="{{ route('departments.show', $item->slug) }}">
                                            <span>{{ $item->name }}</span>
                                            <span class="icon"><i class="far fa-long-arrow-right"></i></span>
                                        </a>
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    </div>

                </div>


                <!-- =========================
                    RIGHT CONTENT
                ========================== -->
                <div class="col-lg-8 order-1 order-xl-2">

                    <div class="service-details-right-items">

                        <!-- Department Heading -->
                        <div class="mb-4">

                            <span class="subtitle">
                                OUR DEPARTMENT
                            </span>

                            <h2 class="mt-2">
                                {{ $department->name }}
                            </h2>

                            <p>
                                {{ $department->short_description }}
                            </p>

                        </div>


                        <!-- Department Image - ONLY ONE -->
                        @if($department->image)

                            <div class="service-img wow img-custom-anim-left mb-4">
                                <img src="{{ asset('storage/' . $department->image) }}" alt="{{ $department->name }}">
                            </div>

                        @endif


                        <!-- =========================
                            ABOUT DEPARTMENT
                        ========================== -->
                        <div class="mb-4">

                            <h3>
                                {{ $department->about_heading ?: 'About ' . $department->name }}
                            </h3>

                            <p>
                                {{ $department->about_description }}
                            </p>

                        </div>


                        <!-- =========================
                            OUR SERVICES
                        ========================== -->
                        <div class="mb-4">

                            <h3>
                                Our Services
                            </h3>

                            <p>
                                Our {{ $department->name }} Department provides
                                specialized services based on the patient's
                                medical condition and treatment requirements.
                            </p>

                            <div class="list-box">

                                <ul>

                                    @foreach(array_slice(
                                        $services,
                                        0,
                                        ceil(count($services) / 2)
                                    ) as $service)

                                        <li>
                                            <i class="far fa-check"></i>
                                            {{ $service }}
                                        </li>

                                    @endforeach

                                </ul>

                                <ul>

                                    @foreach(array_slice(
                                        $services,
                                        ceil(count($services) / 2)
                                    ) as $service)

                                        <li>
                                            <i class="far fa-check"></i>
                                            {{ $service }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        </div>


                        <!-- =========================
                            OUR SPECIALITIES
                        ========================== -->
                        <div class="mb-4">

                            <h3>
                                Our Specialities
                            </h3>

                            <p>
                                Our department provides focused care across
                                specialized areas to support accurate diagnosis,
                                treatment and recovery.
                            </p>

                            <div class="list-box">

                                <ul>

                                    @foreach(array_slice(
                                        $specialities,
                                        0,
                                        ceil(count($specialities) / 2)
                                    ) as $speciality)

                                        <li>
                                            <i class="far fa-check"></i>
                                            {{ $speciality }}
                                        </li>

                                    @endforeach

                                </ul>

                                <ul>

                                    @foreach(array_slice(
                                        $specialities,
                                        ceil(count($specialities) / 2)
                                    ) as $speciality)

                                        <li>
                                            <i class="far fa-check"></i>
                                            {{ $speciality }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        </div>


                        <!-- =========================
                            CONDITIONS & CARE AREAS
                        ========================== -->
                        <div class="mb-4">

                            <h3>
                                Conditions & Care Areas
                            </h3>

                            <p>
                                The {{ $department->name }} Department provides
                                care across the following important medical
                                conditions and specialized areas.
                            </p>

                            <div class="list-box">

                                <ul>

                                    @foreach(array_slice(
                                        $conditions,
                                        0,
                                        ceil(count($conditions) / 2)
                                    ) as $area)

                                        <li>
                                            <i class="far fa-check"></i>
                                            {{ $area }}
                                        </li>

                                    @endforeach

                                </ul>

                                <ul>

                                    @foreach(array_slice(
                                        $conditions,
                                        ceil(count($conditions) / 2)
                                    ) as $area)

                                        <li>
                                            <i class="far fa-check"></i>
                                            {{ $area }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        </div>


                        <!-- =========================
                            PATIENT CARE
                        ========================== -->
                        <div class="mb-4">

                            <h3>
                                {{ $department->patient_care_heading ?: 'Patient Care' }}
                            </h3>

                            <p>
                                {{ $department->patient_care_description }}
                            </p>

                        </div>


                        <!-- =========================
                            WHY CHOOSE
                        ========================== -->
                        <div class="mb-4">

                            <h3>
                                Why Choose Our Department
                            </h3>

                            <p>
                                Our approach is designed to provide patients with
                                focused medical attention, appropriate treatment
                                planning and continued support.
                            </p>

                            <div class="list-box">

                                <ul>

                                    @foreach(array_slice(
                                        $whyChoose,
                                        0,
                                        ceil(count($whyChoose) / 2)
                                    ) as $reason)

                                        <li>
                                            <i class="far fa-check"></i>
                                            {{ $reason }}
                                        </li>

                                    @endforeach

                                </ul>

                                <ul>

                                    @foreach(array_slice(
                                        $whyChoose,
                                        ceil(count($whyChoose) / 2)
                                    ) as $reason)

                                        <li>
                                            <i class="far fa-check"></i>
                                            {{ $reason }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        </div>


                        <!-- =========================
                            RELATED DOCTORS
                        ========================== -->
                        <div class="mb-4">

                            <h3>
                                Related Doctors
                            </h3>

                            <p>
                                Patients are supported by qualified medical
                                professionals with expertise related to
                                {{ $department->name }}.
                            </p>

                            <div class="list-box">

                                <ul>

                                    @forelse($department->doctors as $doctor)

                                        <li>
                                            <i class="far fa-user-md"></i>
                                            {{ $doctor->name }}
                                        </li>

                                    @empty
                                        <li>No doctors currently assigned to this department.</li>
                                    @endforelse

                                </ul>

                            </div>

                        </div>


                        <!-- =========================
                            APPOINTMENT CTA
                        ========================== -->
                        <div class="mt-4">

                            <a
                                href="tel:+919727579000"
                                class="theme-btn"
                            >
                                <i class="far fa-phone-alt"></i>
                                Book An Appointment
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
    CONTACT / APPOINTMENT
========================== -->
<section class="contact-appointment-section section-padding fix pt-0">

    <div class="container">

        <div class="contact-appointment-wrapper-5">

            <div class="row g-3">

                <!-- LEFT -->
                <div class="col-lg-6">

                    <div class="contact-appointment-left-item">

                        <div
                            class="contact-appointment-image wow img-custom-anim-left"
                            data-wow-duration="1.3s"
                            data-wow-delay="0.3s"
                        >

                            <img
                                src="{{ asset('assets/img/inner/contact/contact.png') }}"
                                alt="Atulya Super Speciality Hospital"
                            >

                        </div>


                        <div class="contact-appointment-list">

                            <h5
                                class="wow fadeInUp"
                                data-wow-delay=".3s"
                            >
                                Working Hours
                            </h5>

                            <div
                                class="contact-list wow fadeInUp"
                                data-wow-delay=".5s"
                            >

                                <ul class="list">

                                    <li>
                                        Monday
                                        <span>9AM - 10PM</span>
                                    </li>

                                    <li>
                                        Saturday
                                        <span>9AM - 08PM</span>
                                    </li>

                                    <li>
                                        Sunday
                                        <span>9AM - 12PM</span>
                                    </li>

                                </ul>


                                <div class="caller-item">

                                    <div class="icon">

                                        <img
                                            src="{{ asset('assets/img/home-5/call.png') }}"
                                            alt="Call"
                                        >

                                    </div>

                                    <div class="content">

                                        <span>For Help</span>

                                        <p>
                                            <a href="tel:+919727579000">
                                                +91 97275 79000
                                            </a>
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- RIGHT -->
                <div class="col-lg-6">

                    <div class="contact-appointment-box">

                        <h3>
                            Book An Appointment
                        </h3>

                        <form
                            action="javascript:void(0);"
                            method="POST"
                            onsubmit="return false;"
                        >

                            @csrf

                            <div class="row g-3">

                                <!-- Name -->
                                <div class="col-lg-6 wow fadeInUp"
                                    data-wow-delay=".3s">

                                    <div class="form-clt">

                                        <span>Name</span>

                                        <input
                                            type="text"
                                            name="name"
                                            placeholder="Your Name"
                                        >

                                    </div>

                                </div>


                                <!-- Email -->
                                <div class="col-lg-6 wow fadeInUp"
                                    data-wow-delay=".5s">

                                    <div class="form-clt">

                                        <span>Email</span>

                                        <input
                                            type="email"
                                            name="email"
                                            placeholder="Your Email"
                                        >

                                    </div>

                                </div>


                                <!-- Phone -->
                                <div class="col-lg-6 wow fadeInUp"
                                    data-wow-delay=".3s">

                                    <div class="form-clt">

                                        <span>Phone</span>

                                        <input
                                            type="text"
                                            name="phone"
                                            placeholder="Your Phone"
                                        >

                                    </div>

                                </div>


                                <!-- Department -->
                                <div class="col-lg-6 wow fadeInUp"
                                    data-wow-delay=".5s">

                                    <div class="form-clt">

                                        <span>Department</span>

                                        <div class="form">

                                            <select
                                                name="department"
                                                class="single-select w-100"
                                            >

                                                <option value="">
                                                    Select Department
                                                </option>

                                                <option
                                                    value="{{ $department->slug }}"
                                                    selected
                                                >
                                                    {{ $department->name }}
                                                </option>

                                            </select>

                                        </div>

                                    </div>

                                </div>


                                <!-- Age -->
                                <div class="col-lg-12 wow fadeInUp"
                                    data-wow-delay=".5s">

                                    <div class="form-clt">

                                        <span>Select Age</span>

                                        <div class="form">

                                            <select
                                                name="age"
                                                class="single-select w-100"
                                            >

                                                <option value="">
                                                    Select Age
                                                </option>

                                                <option value="0-18">
                                                    0 - 18
                                                </option>

                                                <option value="19-40">
                                                    19 - 40
                                                </option>

                                                <option value="41-60">
                                                    41 - 60
                                                </option>

                                                <option value="60+">
                                                    60+
                                                </option>

                                            </select>

                                        </div>

                                    </div>

                                </div>


                                <!-- Message -->
                                <div class="col-lg-12 wow fadeInUp"
                                    data-wow-delay=".3s">

                                    <div class="form-clt">

                                        <span>Your Message</span>

                                        <textarea
                                            name="message"
                                            placeholder="Write your message..."
                                        ></textarea>

                                    </div>

                                </div>


                                <!-- Submit -->
                                <div class="col-lg-12 wow fadeInUp"
                                    data-wow-delay=".3s">

                                    <button
                                        type="button"
                                        class="theme-btn"
                                        disabled
                                        style="opacity: 0.65; cursor: not-allowed;"
                                    >

                                        <i class="far fa-chevron-right"></i>

                                        Make Your Appointment

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection