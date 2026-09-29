@extends('website.layout.app')

@section('title', 'Atulya Super Speciality Hospital & ICU | Ahmedabad')

@section('meta_description', 'Atulya Super Speciality Hospital & ICU in Ahmedabad provides specialist healthcare, 24×7 emergency and critical care services with experienced doctors and modern hospital facilities.')

@section('content')


<!-- Hero Section Start -->

<section class="hero-section hero-1 bg-cover fix"
    style="
        background-image:
            linear-gradient(rgba(255,255,255,0.78), rgba(255,255,255,0.78)),
            url('{{ asset('assets/img/home-1/hero/bg-01.png') }}');
        height: 900px;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    ">

    <div class="container">
        <div class="row g-2 align-items-center">

            <div class="col-lg-7">

                <div class="hero-content">

                    <h1 class="wow fadeInUp text-navy" data-wow-delay=".2s">
                        Quality Healthcare with Compassionate Care
                    </h1>

                    <p class="wow fadeInUp" data-wow-delay=".3s">
                        Comprehensive medical care supported by experienced doctors,
                        critical care services and modern hospital facilities.
                    </p>

                    <a href="{{ url('/departments/urology') }}"
                        class="theme-btn wow fadeInUp"
                        data-wow-delay=".5s">

                        <i class="far fa-chevron-right"></i>

                        Explore Our Services

                    </a>

                </div>

            </div>

        </div>
    </div>

</section>


<!-- Hero Features Start -->

<div class="hero-feature" style="margin-top:44px;">

    <div class="container">

        <div class="hero-feature-wrapper">

            <div class="row">

                <!-- Appointment -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
                    data-wow-delay=".3s">

                    <div class="hero-feature-icon">

                        <div class="icon justify-content-between">

                            <img
                                src="{{ asset('assets/img/home-1/hero/feature-2.png') }}"
                                alt="Book an Appointment at {{ setting('hospital_name') }}">

                            <a href="{{ url('/contact') }}"
                                class="arrow-icon"
                                aria-label="Book an Appointment">

                                <i class="far fa-chevron-right"></i>

                            </a>

                        </div>

                        <h5>
                            Book an <br>
                            Appointment
                        </h5>

                    </div>

                </div>


                <!-- Doctors -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
                    data-wow-delay=".5s">

                    <div class="hero-feature-icon ps-0">

                        <div class="icon justify-content-between">

                            <img
                                src="{{ asset('assets/img/home-1/hero/feature-2.png') }}"
                                alt="Specialist Doctors at {{ setting('hospital_name') }}">

                            <a href="{{ url('/doctors') }}"
                                class="arrow-icon"
                                aria-label="Meet Our Specialist Doctors">

                                <i class="far fa-chevron-right"></i>

                            </a>

                        </div>

                        <h5>
                            Meet Our <br>
                            Specialist Doctors
                        </h5>

                    </div>

                </div>


                <!-- Emergency -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
                    data-wow-delay=".7s">

                    <div class="hero-feature-icon border-none">

                        <div class="icon">

                            <img
                                src="{{ asset('assets/img/home-1/hero/feature-3.png') }}"
                                alt="24x7 Emergency Care at {{ setting('hospital_name') }}">

                            <div class="content">

                                <p>
                                    Emergency Helpline
                                </p>

                                <h4>
                                    <a href="{{ setting('phone') }}">
                                        {{ setting('phone') }}
                                    </a>
                                </h4>

                            </div>

                        </div>

                        <h5>
                            24/7 Emergency <br>
                            Care Available
                        </h5>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Hero Features End -->



<!-- About Section Start -->
<section class="about-section section-padding fix">
    <div class="shape-1-img">
        <img src="{{ asset('assets/img/home-1/about/shape-01.png') }}"
            alt="{{ setting('hospital_name') }} healthcare">
    </div>

    <div class="shape-2-img">
        <img src="{{ asset('assets/img/home-1/about/shape-02.png') }}"
            alt="{{ setting('hospital_name') }} medical care">
    </div>

    <div class="shape-3-img">
        <img src="{{ asset('assets/img/home-1/about/shape-03.png') }}"
            alt="{{ setting('hospital_name') }} facilities">
    </div>

    <div class="container">
        <div class="about-wrapper">

            <div class="row g-4">

                <!-- IMAGE -->
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">

                    <div class="about-image">

                        <img
                            src="{{ asset('assets/img/home-1/hero/img_1.png') }}"
                            alt="Atulya Super Speciality Hospital and ICU Ahmedabad"
                            class="wow img-custom-anim-left">

                        <div class="about-img-2 float-bob-x">
                            <img
                                src="{{ asset('assets/img/home-1/hero/img_2.png') }}"
                                alt="{{ setting('hospital_name') }} medical care">
                        </div>

                        <div class="about-img-3 float-bob-y">
                            <img
                                src="{{ asset('assets/img/home-1/hero/img_3.png') }}"
                                alt="{{ setting('hospital_name') }} healthcare services">
                        </div>

                    </div>

                </div>


                <!-- CONTENT -->
                <div class="col-lg-7">

                    <div class="about-content">

                        <div class="section-title mb-0 text-start">

                            <span class="subtitle tz-sub-tilte tz-sub-anim text-uppercase tx-subTitle">
                                ABOUT {{ setting('hospital_name') }}
                            </span>

                            <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                                Compassionate Care With
                                Specialist Healthcare
                            </h2>

                        </div>


                        <p class="about-text wow fadeInUp" data-wow-delay=".2s">
                            Atulya Super Speciality Hospital & ICU in Ahmedabad
                            is committed to providing quality healthcare with
                            experienced specialists, modern medical facilities
                            and a patient-focused approach. Our hospital brings
                            together specialist consultation, surgical care,
                            critical care and emergency services to support
                            patients through every stage of their treatment.
                        </p>


                        <!-- ICON AREA -->
                        <div class="about-icon-area wow fadeInUp" data-wow-delay=".3s">

                            <div class="about-items">

                                <div class="about-img">
                                    <img
                                        src="{{ asset('assets/img/home-1/about/icon-01.png') }}"
                                        alt="Specialist medical care at {{ setting('hospital_name') }}">
                                </div>

                                <h5>
                                    Specialist Medical<br>
                                    Care
                                </h5>

                            </div>


                            <div class="about-items">

                                <div class="about-img">
                                    <img
                                        src="{{ asset('assets/img/home-1/about/icon-02.png') }}"
                                        alt="24x7 critical care at {{ setting('hospital_name') }}">
                                </div>

                                <h5>
                                    24×7 Emergency &<br>
                                    Critical Care
                                </h5>

                            </div>

                        </div>


                        <!-- LIST -->
                        <div class="list-box wow fadeInUp" data-wow-delay=".4s">

                            <ul>

                                <li>
                                    <i class="far fa-check"></i>
                                    Experienced Specialist Doctors
                                </li>

                                <li>
                                    <i class="far fa-check"></i>
                                    Comprehensive Patient Care
                                </li>

                            </ul>


                            <ul>

                                <li>
                                    <i class="far fa-check"></i>
                                    Modern Hospital Infrastructure
                                </li>

                                <li>
                                    <i class="far fa-check"></i>
                                    24×7 Emergency & Critical Care
                                </li>

                            </ul>

                        </div>


                        <!-- BUTTON -->
                        <div class="about-btn wow fadeInUp" data-wow-delay=".5s">

                            <a href="{{ url('/about') }}" class="theme-btn">

                                <i class="far fa-chevron-right"></i>

                                More About Us

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- Service Section Start -->

<section class="service-section section-padding section-bg-2 fix">

    <div class="service-shape-1">
        <img
            src="{{ asset('assets/img/home-1/service/shape-1.png') }}"
            alt="Atulya Hospital service">
    </div>

    <div class="service-shape-2">
        <img
            src="{{ asset('assets/img/home-1/service/shape-2.png') }}"
            alt="Atulya Hospital healthcare">
    </div>

    <div class="service-shape-3">
        <img
            src="{{ asset('assets/img/home-1/service/shape-3.png') }}"
            alt="Atulya Hospital medical services">
    </div>


    <div class="container">

        <div class="section-title text-center">

            <span class="subtitle tz-sub-tilte tz-sub-anim text-uppercase tx-subTitle">
                OUR SERVICES
            </span>

            <h2 class="text-white tx-title sec_title tz-itm-title tz-itm-anim">
                Comprehensive Healthcare <br>
                For You & Your Family
            </h2>

        </div>


        @if($departments->count())

        <div class="service-wrapper">

            <div class="row">


                {{-- =================================================
                         DEPARTMENT LIST
                    ================================================== --}}

                <div class="col-lg-4">

                    <ul class="nav">

                        @foreach($departments as $index => $department)

                        <li
                            class="nav-item wow fadeInUp"
                            data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">

                            <a
                                href="#department-{{ $department->id }}"
                                data-bs-toggle="tab"
                                class="nav-link {{ $index === 0 ? 'active' : '' }}">

                                {{ $department->name }}

                                <i class="far fa-chevron-right"></i>

                            </a>

                        </li>

                        @endforeach

                    </ul>

                </div>



                {{-- =================================================
                         DEPARTMENT CONTENT
                    ================================================== --}}

                <div
                    class="col-lg-8 wow fadeInUp"
                    data-wow-delay=".3s">

                    <div class="tab-content">


                        @foreach($departments as $index => $department)

                        <div
                            id="department-{{ $department->id }}"
                            class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}">

                            <div class="service-box-items">


                                {{-- =================================================
                                             CONTENT
                                        ================================================== --}}

                                <div class="service-icon-box">

                                    <div class="icon">
                                        <i class="flaticon-good-heart"></i>
                                    </div>


                                    <h3>

                                        <a
                                            href="{{ route('departments.show', $department->slug) }}">

                                            {{ $department->name }}

                                            <br>

                                            Care & Treatment

                                        </a>

                                    </h3>


                                    <p>

                                        @if($department->short_description)

                                        {{ \Illuminate\Support\Str::limit(
                                                        $department->short_description,
                                                        180
                                                    ) }}

                                        @elseif($department->about_description)

                                        {{ \Illuminate\Support\Str::limit(
                                                        $department->about_description,
                                                        180
                                                    ) }}

                                        @else

                                        Comprehensive healthcare services
                                        with specialist consultation,
                                        accurate diagnosis and
                                        personalised patient care.

                                        @endif

                                    </p>


                                    <a
                                        href="{{ route('departments.show', $department->slug) }}"
                                        class="theme-btn mt-5">

                                        <i class="far fa-chevron-right"></i>

                                        More Details

                                    </a>

                                </div>



                                {{-- =================================================
                                             IMAGE
                                        ================================================== --}}

                                <div
                                    class="service-image"
                                    style="
                                                width:45%;
                                                min-width:45%;
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                            ">

                                    @if($department->image)

                                    <img
                                        src="{{ asset('storage/' . $department->image) }}"
                                        alt="{{ $department->name }} at {{ setting('hospital_name') }}"
                                        style="
                                                        width:100%;
                                                        max-width:100%;
                                                        height:auto;
                                                        object-fit:contain;
                                                    ">

                                    @else

                                    <img
                                        src="{{ asset('assets/img/home-1/service/serviceimg.png') }}"
                                        alt="{{ $department->name }} healthcare service"
                                        style="
                                                        width:100%;
                                                        max-width:100%;
                                                        height:auto;
                                                        object-fit:contain;
                                                    ">

                                    @endif

                                </div>


                            </div>

                        </div>

                        @endforeach


                    </div>

                </div>


            </div>

        </div>

        @else

        <div class="text-center text-white py-5">

            <h3 class="text-white">
                Healthcare Services
            </h3>

            <p>
                Our healthcare departments will be available here soon.
            </p>

        </div>

        @endif


    </div>

</section>

<!-- Service Section End -->


<!-- Cta Section Start -->

<section class="cta-section color-bg-1 section-padding pt-0 fix">


    <div class="team-shape-2">
        <img src="{{ asset('assets/img/home-1/team/shape-2.png') }}" alt="img">
    </div>

    <div class="container">

        <!-- CTA -->
        <div class="cta-wrapper zoom-effect-style bg-cover"
            style="background-image:  url('{{ asset('assets/img/home-1/cta/bg-image.png') }}');">



            <div class="section-title-area align-items-end mb-0 pb-4">

                <div class="section-title">

                    <span class="subtitle tz-sub-tilte tz-sub-anim text-uppercase tx-subTitle">
                        MEET OUR SPECIALISTS
                    </span>

                    <h2 class="tx-title text-white sec_title tz-itm-title tz-itm-anim">
                        Expert Doctors, Compassionate <br>
                        Care For Your Better Health
                    </h2>

                </div>

                <div class="call-box wow fadeInUp" data-wow-delay=".3s">

                    <div class="call-icon">
                        <img src="{{ asset('assets/img/home-1/cta/call-icon.png') }}"
                            alt="Emergency Helpline">
                    </div>

                    <div class="content">
                        <p>Call Emergency</p>

                        <a href="{{ setting('phone') }}">
                            {{ setting('phone') }}
                        </a>
                    </div>

                </div>

            </div>
        </div>



        <!-- Doctors -->
        <div class="section-padding pb-0 advance-wrap">

            <div class="doctor-slider-wrapper">

                <div
                    id="doctorSliderTrack"
                    style="
                display: flex;
                gap: 24px;
                transition: transform 0.5s ease;
                width: 100%;
            ">

                    @foreach($doctors as $doctor)

                    <div
                        class="doctor-slide-item"
                        style="
                        flex: 0 0 calc((100% - 72px) / 4);
                        min-width: 0;
                    ">

                        <div class="team-box-items mt-0 advance-item h-100 d-flex flex-column">

                            <!-- Doctor Image -->
                            <div class="team-image p-3">

                                <img
                                    src="{{ asset('storage/' . $doctor->image) }}"
                                    alt="{{ $doctor->name }}"
                                    class="doctor-fixed-image d-block mx-auto">

                                <span class="post-box">
                                    {{ $doctor->department }}
                                </span>

                            </div>


                            <!-- Doctor Details -->
                            <div class="team-content d-flex flex-column flex-grow-1">

                                <h3 class="mb-2">

                                    <a href="{{ route('doctors.show', $doctor['slug']) }}">
                                        {{ $doctor['name'] }}
                                    </a>

                                </h3>

                                <p class="mb-0">
                                    {{ $doctor['department'] }}
                                </p>

                            </div>

                        </div>

                    </div>

                    @endforeach

                </div>


                <!-- SLIDER BUTTONS -->
                @if(count($doctors) > 4)

                <div
                    class="doctor-slider-buttons"
                    style="
                    display:flex;
                    justify-content:center;
                    align-items:center;
                    gap:15px;
                    margin-top:30px;
                ">

                    <!-- PREVIOUS -->
                    <button
                        type="button"
                        id="doctorPrev"
                        aria-label="Previous Doctor"
                        style="
                        width:48px;
                        height:48px;
                        border-radius:50%;
                        border:0;
                        background:#2196f3;
                        color:#fff;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                    ">
                        <i class="far fa-chevron-left"></i>
                    </button>


                    <!-- NEXT -->
                    <button
                        type="button"
                        id="doctorNext"
                        aria-label="Next Doctor"
                        style="
                        width:48px;
                        height:48px;
                        border-radius:50%;
                        border:0;
                        background:#2196f3;
                        color:#fff;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                    ">
                        <i class="far fa-chevron-right"></i>
                    </button>

                </div>

                @endif

            </div>

        </div>







        <!-- Button -->
        <div class="team-button text-center mt-5 wow fadeInUp" data-wow-delay=".9s">

            <a href="{{ url('/doctors') }}" class="theme-btn">
                <i class="far fa-chevron-right"></i>
                View All Doctors
            </a>

        </div>

    </div>


</section>
<!-- Cta Section End -->


<section class="atulya-counter-section">

    <div class="container">

        <div class="counter-section">

           <div class="counter-wrapper zoom-effect-style">

    {{-- Satisfied Patients --}}
    <div class="counter-items wow fadeInUp" data-wow-delay=".2s">

        <div class="icon">
            <img
                src="{{ asset('assets/img/home-1/counter/icon-01.png') }}"
                alt="Satisfied Patients"
                style="width: 65px; height: 65px; object-fit: contain;">
        </div>

        <div class="content">

            @php
                $satisfiedPatients = setting('satisfied_patients');
                $satisfiedPatientsNumber = preg_replace('/[^0-9.]/', '', $satisfiedPatients);
                $satisfiedPatientsSuffix = preg_replace('/[0-9.]/', '', $satisfiedPatients);
            @endphp

            <h2>
                <span
                    class="odometer"
                    data-count="{{ $satisfiedPatientsNumber }}">
                    00
                </span>{{ $satisfiedPatientsSuffix }}
            </h2>

            <p>Satisfied Patients</p>

        </div>

    </div>


    {{-- Clinic Rooms --}}
    <div class="counter-items wow fadeInUp" data-wow-delay=".4s">

        <div class="icon">
            <img
                src="{{ asset('assets/img/home-1/counter/icon-02.png') }}"
                alt="Clinic Rooms"
                style="width: 65px; height: 65px; object-fit: contain;">
        </div>

        <div class="content">

            @php
                $clinicRooms = setting('clinic_rooms');
                $clinicRoomsNumber = preg_replace('/[^0-9.]/', '', $clinicRooms);
                $clinicRoomsSuffix = preg_replace('/[0-9.]/', '', $clinicRooms);
            @endphp

            <h2>
                <span
                    class="odometer"
                    data-count="{{ $clinicRoomsNumber }}">
                    00
                </span>{{ $clinicRoomsSuffix }}
            </h2>

            <p>Clinic Rooms</p>

        </div>

    </div>


    {{-- Awards Winning --}}
    <div class="counter-items wow fadeInUp" data-wow-delay=".6s">

        <div class="icon">
            <img
                src="{{ asset('assets/img/home-1/counter/icon-03.png') }}"
                alt="Awards Winning"
                style="width: 65px; height: 65px; object-fit: contain;">
        </div>

        <div class="content">

            @php
                $awardsWinning = setting('awards_winning');
                $awardsWinningNumber = preg_replace('/[^0-9.]/', '', $awardsWinning);
                $awardsWinningSuffix = preg_replace('/[0-9.]/', '', $awardsWinning);
            @endphp

            <h2>
                <span
                    class="odometer"
                    data-count="{{ $awardsWinningNumber }}">
                    00
                </span>{{ $awardsWinningSuffix }}
            </h2>

            <p>Awards Winning</p>

        </div>

    </div>


    {{-- Kinds Of Research --}}
    <div class="counter-items wow fadeInUp" data-wow-delay=".8s">

        <div class="icon">
            <img
                src="{{ asset('assets/img/home-1/counter/icon-04.png') }}"
                alt="Kinds Of Research"
                style="width: 65px; height: 65px; object-fit: contain;">
        </div>

        <div class="content">

            @php
                $researchCount = setting('research_count');
                $researchCountNumber = preg_replace('/[^0-9.]/', '', $researchCount);
                $researchCountSuffix = preg_replace('/[0-9.]/', '', $researchCount);
            @endphp

            <h2>
                <span
                    class="odometer"
                    data-count="{{ $researchCountNumber }}">
                    00
                </span>{{ $researchCountSuffix }}
            </h2>

            <p>Kinds Of Research</p>

        </div>

    </div>

</div>

        </div>

    </div>

</section>



<section
    class="vedio-bg-section fix bg-cover atulya-home-video"
    style="background-image: url('{{ asset('assets/img/home-1/counter/video-img.png') }}');">

    <div class="atulya-video-overlay"></div>

    <div class="container">

        <div class="atulya-video-inner">

            {{-- HEADING --}}

            <div class="atulya-video-heading">

                <span>OUR VIDEOS</span>

                <h2>
                    Healthcare Information
                </h2>

                <p>
                    Watch healthcare awareness, medical information
                    and updates from Atulya Super Speciality Hospital & ICU.
                </p>

            </div>


            {{-- VIDEOS --}}

            @if(isset($videos) && $videos->count())

            <div class="row g-4 atulya-video-row">

                @foreach($videos as $video)

                @php

                $youtubeId = null;

                if (
                preg_match(
                '/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/|youtube\.com\/shorts\/)([^&?\/]+)/',
                $video->youtube_url,
                $matches
                )
                ) {
                $youtubeId = $matches[1];
                }

                if ($video->thumbnail) {

                $videoThumbnail = asset(
                'storage/' . $video->thumbnail
                );

                } elseif ($youtubeId) {

                $videoThumbnail =
                'https://img.youtube.com/vi/' .
                $youtubeId .
                '/maxresdefault.jpg';

                } else {

                $videoThumbnail =
                asset(
                'assets/img/home-1/counter/video-img.png'
                );

                }

                @endphp


                <div class="col-xl-3 col-lg-3 col-md-6">

                    <div class="atulya-video-card">

                        <div class="atulya-video-thumb">

                            <img
                                src="{{ $videoThumbnail }}"
                                alt="{{ $video->title }}"
                                loading="lazy">

                            <div class="atulya-video-thumb-overlay"></div>

                            <button
                                type="button"
                                class="atulya-video-play open-video"
                                data-video-url="{{ $video->youtube_url }}"
                                aria-label="Play {{ $video->title }}">

                                <i class="fas fa-play"></i>

                            </button>

                        </div>


                        <div class="atulya-video-content">

                            <h4>
                                {{ $video->title }}
                            </h4>

                            @if($video->description)

                            <p>
                                {{ \Illuminate\Support\Str::limit($video->description, 80) }}
                            </p>

                            @endif

                        </div>

                    </div>

                </div>

                @endforeach

            </div>


            <div class="atulya-video-see-all">

                <a
                    href="{{ route('videos.index') }}"
                    class="theme-btn">

                    <span>
                        View All Videos
                    </span>

                    <i class="fas fa-arrow-right"></i>

                </a>

            </div>


            @else

            <div class="atulya-video-empty">

                <i class="fas fa-video"></i>

                <h3>
                    Videos Coming Soon
                </h3>

                <p>
                    We are preparing informative healthcare
                    content for you.
                </p>

                <div class="atulya-video-see-all">

                    <a
                        href="{{ route('videos.index') }}"
                        class="theme-btn">

                        <span>
                            View All Videos
                        </span>

                        <i class="fas fa-arrow-right"></i>

                    </a>

                </div>

            </div>

            @endif

        </div>


        {{-- VIDEO POPUP --}}

        <div
            id="videoModal"
            class="atulya-video-modal">

            <div class="atulya-video-modal-content">

                <button
                    type="button"
                    id="closeVideo"
                    class="atulya-video-close"
                    aria-label="Close video">

                    <i class="fas fa-times"></i>

                </button>

                <div class="atulya-video-iframe-wrapper">

                    <iframe
                        id="popupVideo"
                        src=""
                        title="{{ setting('hospital_name', 'Atulya Hospital') }} Video"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- Feature Section Start -->
<section class="feature-treatment-section section-padding fix section-bg-3">

    <div class="feature-shape-1">
        <img src="{{ asset('assets/img/home-1/feature/shape-01.png') }}" alt="img">
    </div>

    <div class="feature-shape-2">
        <img src="{{ asset('assets/img/home-1/feature/shape-02.png') }}" alt="img">
    </div>

    <div class="container">

        <div class="section-title text-center">

            <span class="subtitle tz-sub-tilte tz-sub-anim text-uppercase tx-subTitle">
                WHY CHOOSE {{ setting('hospital_name') }}
            </span>

            <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                Quality Healthcare Focused <br>
                On You & Your Family
            </h2>

        </div>

        <div class="row">

            <!-- Feature 1 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="feature-treatment-items item_right_1">

                    <div class="feature-icon-box">

                        <h3>
                            Compassionate Care <br> For Every Patient
                        </h3>

                        <i class="flaticon-heartbeat"></i>

                    </div>

                    <p>
                        We believe every patient deserves personalised attention,
                        compassionate care and a comfortable healthcare experience.
                    </p>

                </div>
            </div>


            <!-- Feature 2 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="feature-treatment-items">

                    <div class="feature-icon-box">

                        <h3>
                            Experienced Doctors <br> & Medical Team
                        </h3>

                        <i class="flaticon-social-care"></i>

                    </div>

                    <p>
                        Our dedicated team of doctors and healthcare professionals
                        works together to provide reliable and personalised medical care.
                    </p>

                </div>
            </div>


            <!-- Feature 3 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="feature-treatment-items item_left_1">

                    <div class="feature-icon-box">

                        <h3>
                            Comprehensive <br> Multispeciality Care
                        </h3>

                        <i class="flaticon-health-insurance-1"></i>

                    </div>

                    <p>
                        From routine consultations to specialised treatments,
                        {{ setting('hospital_name') }} provides comprehensive healthcare services
                        under one roof.
                    </p>

                </div>
            </div>

        </div>

    </div>

</section>


<section class="appointment-cta-section">

    <div class="container">

        <div class="appointment-cta-wrapper">

            <div class="appointment-cta-content">

                <span class="appointment-cta-label">
                    APPOINTMENT
                </span>

                <h2>
                    Need Medical Assistance?
                    <br>
                    Book Your Appointment
                </h2>

                <p>
                    Schedule an appointment with our experienced doctors
                    and get the right care for your health.
                </p>

                <a
                    href="{{route('appointment')}}"
                    class="appointment-cta-btn">

                    <span class="btn-text">
                        Book An Appointment
                    </span>

                    <span class="btn-icon">
                        <i class="far fa-chevron-right"></i>
                    </span>

                </a>

            </div>

        </div>

    </div>

</section>



<!-- Testimonial Section5 Start -->
<section class="testimonial-section-1 section-padding pb-0 bg-cover fix atulya-testimonial-section"
    style="background-image: url('assets/img/home-1/testimonial/bg-test1.png');">

    <div class="shape float-bob-y">
        <img src="{{ asset('assets/img/home-1/testimonial/vector.png') }}" alt="img">
    </div>

    <div class="shape-2 float-bob-y">
        <img src="{{ asset('assets/img/home-1/testimonial/hand.png') }}" alt="img">
    </div>

    <div class="container">
        <div class="testimonial-wrapper-1">
            <div class="row g-4">

                <div class="col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="testimonial-image">
                        <img src="{{ asset('assets/img/home-1/testimonial/test-girl.png') }}" alt="img">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="section-title-area">
                        <div class="section-title">
                            <span class="subtitle tz-sub-tilte tz-sub-anim text-uppercase tx-subTitle">
                                OUR TESTIMONIAL
                            </span>

                            <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                                Our Real Story of Clients
                            </h2>
                        </div>

                        <div class="array-button-2">
                            <button class="array-prev">
                                <i class="fas fa-chevron-left"></i>
                            </button>

                            <button class="array-next">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <div class="testimonial-right-item">
                        <div class="swiper testimonial-slider-1">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-box-item-1">
                                        <div class="client-image">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>
                                                “Dr. Priyanka Prajapati provided excellent treatment for my father’s malaria. She was professional, knowledgeable, and ensured he received the right treatment promptly. Thanks to her care, he recovered quickly. Highly recommended!”
                                            </p>

                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>Parth Mewada</h5>
                                                </div>

                                                <div class="icon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-box-item-1">
                                        <div class="client-image">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>
                                                “Dr Dhaiwat Shukla has changed my wife's life.she has rheumatoid arthritis with extreme eye dryness but since we consulted this young dynamic yet experienced guy she has felt much better and she is doing fine.”
                                            </p>

                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>
                                                        krishna logistics
                                                    </h5>
                                                </div>

                                                <!-- <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-box-item-1">
                                        <div class="client-image">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>
                                                “Our family got diagnosed and care by this hospital and we always get good care from them.In another word, hospital becomes more familiar and with welcoming vibes.I thanks to Dr Kunal, Dr Parth, Dr Ragav, Dr Dhaiwat and many more doctors and staff members for such a good care.
                                            </p>

                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>
                                                        Gaurang Kadiya
                                                    </h5>
                                                </div>

                                                <!-- <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-box-item-1">
                                        <div class="client-image">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>
                                                “I strongly recommand Atulya Hospital for their professional approach, in house expert panel of medical professionals, and overall positive atmosphere. Very impressed with available facilities, support from nursing and attendents.Thank you for your service. All the best and keep going with good work.”
                                            </p>

                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>
                                                        Maulik Gohel
                                                    </h5>
                                                </div>

                                                <!-- <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-box-item-1">
                                        <div class="client-image">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>
                                                “My son was just 5 years old when he was diagnosed with a rheumatological condition. We took multiple opinions before meeting Dr. Dhaivat Shukla. He understood the condition well, guided us properly, and started the right treatment. We are very thankful to Dr. Shukla and the Atulya team for their care and support.”
                                            </p>

                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>
                                                        Husain Bhatia
                                                    </h5>
                                                </div>

                                                <!-- <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<hr>

<style>
    .atulya-testimonial-section {
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .atulya-testimonial-section .testimonial-wrapper-1 {
        position: relative;
    }

    .atulya-testimonial-section .testimonial-image {
        display: flex;
        align-items: flex-end;
        justify-content: center;
    }

    .atulya-testimonial-section .testimonial-image img {
        width: auto;
        max-width: 100%;
        max-height: 500px;
        object-fit: contain;
    }

    .atulya-testimonial-section .section-title-area {
        margin-bottom: 25px;
    }

    .atulya-testimonial-section .testimonial-right-item {
        margin-top: 0;
    }

    .atulya-testimonial-section .testimonial-slider-1 {
        height: auto;
    }

    .atulya-testimonial-section .testimonial-slider-1 .swiper-wrapper {
        align-items: stretch;
    }

    .atulya-testimonial-section .testimonial-slider-1 .swiper-slide {
        height: auto;
        display: flex;
    }

    .atulya-testimonial-section .testimonial-box-item-1 {
        width: 100%;
        height: 100%;
        margin: 5px 0 15px;
        padding: 28px 32px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
    }

    .atulya-testimonial-section .testimonial-content {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .atulya-testimonial-section .testimonial-content p {
        margin-bottom: 20px;
    }

    .atulya-testimonial-section .info-item {
        margin-top: auto;
    }

    .atulya-testimonial-section .client-image {
        margin-bottom: 12px;
    }

    .atulya-testimonial-section .star {
        display: flex;
        gap: 4px;
    }

    .atulya-testimonial-section .star i {
        font-size: 14px;
    }

    @media (max-width: 991px) {

        .atulya-testimonial-section {
            padding-top: 65px;
            padding-bottom: 65px;
        }

        .atulya-testimonial-section .testimonial-image {
            margin-bottom: 25px;
        }

        .atulya-testimonial-section .testimonial-image img {
            max-height: 400px;
        }

        .atulya-testimonial-section .testimonial-box-item-1 {
            padding: 25px;
        }
    }

    @media (max-width: 575px) {

        .atulya-testimonial-section {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .atulya-testimonial-section .testimonial-box-item-1 {
            margin-bottom: 10px;
            padding: 22px 20px;
        }

        .atulya-testimonial-section .testimonial-content p {
            font-size: 15px;
            line-height: 1.6;
        }
    }
</style>


<!-- Brand Section Start -->
<div class="brand-section section-padding fix">
    <div class="container">
        <div class="swiper brand-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/rheumatology.png') }}" style="width:180px; height:150px;"
                            alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/General Surgery.png') }}"
                            style="width:180px; height:150px;" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/ENT.png') }}" style="width:180px; height:150px;"
                            alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/Gastroenterology.png') }}"
                            style="width:180px; height:150px;" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/Urology.png') }}"
                            style="width:180px; height:150px;" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/Orthopedics.png') }}"
                            style="width:180px; height:150px;" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/Emergency.png') }}"
                            style="width:180px; height:150px;" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/plastic_surgery.png') }}"
                            style="width:180px; height:150px;" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- News Section Start -->
<section class="news-section section-padding fix pt-0">

    <div class="news-shape-1">
        <img
            src="{{ asset('assets/img/home-1/news/shape-01.png') }}"
            alt="img">
    </div>

    <div class="news-shape-2">
        <img
            src="{{ asset('assets/img/home-1/news/shape-02.png') }}"
            alt="img">
    </div>


    <div class="container">

        <!-- ========================= 
                HEADING 
        ========================== -->

        <div class="section-title text-center">

            <span class="subtitle tz-sub-tilte tz-sub-anim text-uppercase tx-subTitle">
                OUR BLOG
            </span>

            <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                Our Recent Insights, Blog <br>
                and News From Us
            </h2>

        </div>


        <!-- ========================= 
                BLOGS 
        ========================== -->

        @if(isset($blogs) && $blogs->count())

        <div class="row">

            @foreach($blogs as $blog)

            <div
                class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
                data-wow-delay="{{ ($loop->index + 3) / 10 }}s">

                <div class="news-box-items">

                    <!-- Blog Image -->

                    <div class="news-img blog-fixed-image">

                        @if($blog->featured_image)

                        <img
                            src="{{ asset('storage/' . $blog->featured_image) }}"
                            alt="{{ $blog->title }}">

                        @else

                        <img
                            src="{{ asset('assets/img/home-1/news/blog-1.png') }}"
                            alt="{{ $blog->title }}">

                        @endif


                        @if($blog->category)

                        <span class="post-box">
                            {{ $blog->category }}
                        </span>

                        @endif

                    </div>


                    <!-- Blog Content -->

                    <div class="news-content">

                        <span>
                            {{ $blog->published_at 
                                        ? $blog->published_at->format('d M, Y') 
                                        : $blog->created_at->format('d M, Y') 
                                    }}
                        </span>


                        <h3>

                            <a href="{{ route('blog.show', $blog->slug) }}">

                                {{ $blog->title }}

                            </a>

                        </h3>


                        @if($blog->short_description)

                        <p>
                            {{ \Illuminate\Support\Str::limit( 
                                            $blog->short_description, 
                                            120 
                                        ) }}
                        </p>

                        @endif

                    </div>

                </div>

            </div>

            @endforeach

        </div>


        <!-- ========================= 
                    SHOW MORE BLOGS 
            ========================== -->

        <div class="text-center mt-5">

            <a
                href="{{ route('blog') }}"
                class="theme-btn">

                <i class="far fa-chevron-right"></i>

                Show More Blogs

            </a>

        </div>

        @else

        <!-- Empty State -->

        <div class="text-center">

            <p>
                No blogs available at the moment.
            </p>

            <a
                href="{{ route('blog') }}"
                class="theme-btn">

                <i class="far fa-chevron-right"></i>

                View Blog

            </a>

        </div>

        @endif

    </div>

</section>



<style>
    .news-section .blog-fixed-image {
        width: 100%;
        height: 260px;
        overflow: hidden;
        position: relative;
    }

    .news-section .blog-fixed-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }


    /* Tablet */

    @media (max-width: 991px) {

        .news-section .blog-fixed-image {
            height: 240px;
        }

    }


    /* Mobile */

    @media (max-width: 767px) {

        .news-section .blog-fixed-image {
            height: 230px;
        }

    }


    /* Small Mobile */

    @media (max-width: 575px) {

        .news-section .blog-fixed-image {
            height: 220px;
        }

    }
</style>

<!-- Faq Section Start -->

<section class="faq-section section-padding bg-cover" style="background-image: url('assets/img/home-1/faq-bg.jpg');">
    <div class="container">
        <div class="faq-wrapper-1">
            <div class="row g-4">


                <!-- Left Content -->
                <div class="col-lg-6">
                    <div class="faq-content sticky-style">
                        <div class="section-title mb-0 text-start">
                            <span class="subtitle tz-sub-tilte tz-sub-anim text-uppercase tx-subTitle">
                                FREQUENTLY ASKED QUESTIONS
                            </span>

                            <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                                Have Questions About Our Healthcare Services?
                            </h2>
                        </div>

                        <div class="faq-button wow fadeInUp" data-wow-delay=".2s">
                            <a href="{{ url('/contact') }}" class="theme-btn">
                                <i class="far fa-chevron-right"></i>
                                Contact Us
                            </a>

                            <div class="icon-items">
                                <div class="icon">
                                    <i class="flaticon-support"></i>
                                </div>

                                <div class="content">
                                    <p>Emergency Assistance</p>
                                    <h4>
                                        <a href="{{ setting('phone') }}">
                                            {{ setting('phone') }}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Accordion -->
                <div class="col-lg-6">
                    <div class="faq-items">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordion">

                                <!-- FAQ 1 -->
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".2s">
                                    <h5 class="accordion-header" id="headingOne">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne"
                                            aria-expanded="false"
                                            aria-controls="collapseOne">
                                            What medical services are available at {{ setting('hospital_name') }}?
                                        </button>
                                    </h5>

                                    <div
                                        id="collapseOne"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            {{ setting('hospital_name') }} provides comprehensive multispeciality healthcare services including consultations, diagnosis, treatment, surgical care and other specialised medical services under one roof.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 2 -->
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".4s">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            How can I book an appointment with a doctor?
                                        </button>
                                    </h5>

                                    <div
                                        id="collapseTwo"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            You can book an appointment through our website appointment form or contact {{ setting('hospital_name') }} directly at {{ setting('phone') }} for assistance with scheduling your consultation.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 3 -->
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".6s">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree"
                                            aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Do I need an appointment before visiting the hospital?
                                        </button>
                                    </h5>

                                    <div
                                        id="collapseThree"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingThree"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Booking an appointment in advance is recommended for doctor consultations as it can help reduce waiting time. For urgent medical needs, you can contact the hospital directly for immediate guidance.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 4 -->
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".8s">
                                    <h5 class="accordion-header" id="headingFour">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour"
                                            aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Does {{ setting('hospital_name') }} provide emergency medical assistance?
                                        </button>
                                    </h5>

                                    <div
                                        id="collapseFour"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingFour"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes. For urgent medical assistance, patients or family members can contact {{ setting('hospital_name') }} at {{ setting('phone') }}. Our team will guide you according to the patient's medical requirements.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 5 -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                    <h5 class="accordion-header" id="headingFive">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive"
                                            aria-expanded="true"
                                            aria-controls="collapseFive">
                                            What should I bring for my doctor consultation?
                                        </button>
                                    </h5>

                                    <div
                                        id="collapseFive"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="headingFive"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Please bring your previous medical reports, prescriptions, current medication details and any relevant test results. These records can help our doctors better understand your medical history and provide appropriate care.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- Faq Section End -->


@endsection