@extends('website.layout.app')

@section('title', 'Atulya Super Speciality Hospital & ICU | Ahmedabad')

@section('meta_description', 'Atulya Super Speciality Hospital & ICU in Ahmedabad provides specialist healthcare, 24×7 emergency and critical care services with experienced doctors and modern hospital facilities.')

@section('content')


<!-- Hero Section Start -->

<section class="hero-section hero-1 bg-cover fix"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('assets/img/home-1/hero/bg-01.png') }}'); height:900px;">

    <div class="container">
        <div class="row g-2 align-items-center">

            <div class="col-lg-8">


                <div class="hero-content">

                    <h1 class="wow fadeInUp text-navy" data-wow-delay=".2s">
                        Quality Healthcare with Compassionate Care
                    </h1>

                    <p class="wow fadeInUp text-white" data-wow-delay=".3s">
                        Comprehensive medical care supported by experienced doctors, critical care services and modern hospital facilities.
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
                            src="{{ asset('assets/img/home-1/hero/img1.png') }}"
                            alt="Atulya Super Speciality Hospital and ICU Ahmedabad"
                            class="wow img-custom-anim-left">

                        <div class="about-img-2 float-bob-x">
                            <img
                                src="{{ asset('assets/img/home-1/hero/img2.png') }}"
                                alt="{{ setting('hospital_name') }} medical care">
                        </div>

                        <div class="about-img-3 float-bob-y">
                            <img
                                src="{{ asset('assets/img/home-1/hero/img3.png') }}"
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
            alt="img">
    </div>

    <div class="service-shape-2">
        <img
            src="{{ asset('assets/img/home-1/service/shape-2.png') }}"
            alt="img">
    </div>

    <div class="service-shape-3">
        <img
            src="{{ asset('assets/img/home-1/service/shape-3.png') }}"
            alt="img">
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


        <div class="service-wrapper">

            <div class="row">


                <!-- SERVICE CATEGORIES -->
                <div class="col-lg-4">

                    <ul class="nav">

                        <!-- ORTHOPEDICS -->
                        <li
                            class="nav-item wow fadeInUp"
                            data-wow-delay=".2s">

                            <a
                                href="#thumb1"
                                data-bs-toggle="tab"
                                class="nav-link active">
                                Orthopedics
                                <i class="far fa-chevron-right"></i>
                            </a>

                        </li>


                        <!-- UROLOGY -->
                        <li
                            class="nav-item wow fadeInUp"
                            data-wow-delay=".4s">

                            <a
                                href="#thumb2"
                                data-bs-toggle="tab"
                                class="nav-link">
                                Urology
                                <i class="far fa-chevron-right"></i>
                            </a>

                        </li>


                        <!-- ENT -->
                        <li
                            class="nav-item wow fadeInUp"
                            data-wow-delay=".6s">

                            <a
                                href="#thumb3"
                                data-bs-toggle="tab"
                                class="nav-link">
                                ENT Care
                                <i class="far fa-chevron-right"></i>
                            </a>

                        </li>


                        <!-- GENERAL SURGERY -->
                        <li
                            class="nav-item wow fadeInUp"
                            data-wow-delay=".8s">

                            <a
                                href="#thumb4"
                                data-bs-toggle="tab"
                                class="nav-link">
                                General Surgery
                                <i class="far fa-chevron-right"></i>
                            </a>

                        </li>


                        <!-- JOINT REPLACEMENT -->
                        <li
                            class="nav-item wow fadeInUp"
                            data-wow-delay="1s">

                            <a
                                href="#thumb5"
                                data-bs-toggle="tab"
                                class="nav-link">
                                Joint Replacement
                                <i class="far fa-chevron-right"></i>
                            </a>

                        </li>

                    </ul>

                </div>



                <!-- SERVICE CONTENT -->
                <div
                    class="col-lg-8 wow fadeInUp"
                    data-wow-delay=".3s">

                    <div class="tab-content">


                        <!-- ORTHOPEDICS -->
                        <div
                            id="thumb1"
                            class="tab-pane fade show active">

                            <div class="service-box-items">

                                <!-- CONTENT -->
                                <div class="service-icon-box">

                                    <div class="icon">
                                        <i class="flaticon-good-heart"></i>
                                    </div>


                                    <h3>

                                        <a href="{{ url('/departments/orthopedic') }}">
                                            Advanced Orthopedics <br>
                                            Care & Treatment
                                        </a>

                                    </h3>


                                    <p>
                                        Comprehensive orthopaedic care focused
                                        on accurate diagnosis, effective treatment
                                        and helping patients regain mobility and
                                        improve their quality of life.
                                    </p>


                                    <a
                                        href="{{ url('/departments/orthopedic') }}"
                                        class="theme-btn mt-5">

                                        <i class="far fa-chevron-right"></i>

                                        More Details

                                    </a>

                                </div>


                                <!-- IMAGE -->
                                <div
                                    class="service-image"
                                    style="
                                        width:45%;
                                        min-width:45%;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                    ">

                                    <img
                                        src="{{ asset('assets/img/home-1/service/serviceimg.png') }}"
                                        alt="Orthopaedic Care"
                                        style="
                                            width:100%;
                                            max-width:100%;
                                            height:auto;
                                            object-fit:contain;
                                        ">

                                </div>

                            </div>

                        </div>



                        <!-- UROLOGY -->
                        <div
                            id="thumb2"
                            class="tab-pane fade">

                            <div class="service-box-items">

                                <!-- CONTENT -->
                                <div class="service-icon-box">

                                    <div class="icon">
                                        <i class="flaticon-good-heart"></i>
                                    </div>


                                    <h3>

                                        <a href="{{ url('/departments/urology') }}">
                                            Advanced Urology <br>
                                            Care & Treatment
                                        </a>

                                    </h3>


                                    <p>
                                        Comprehensive care for urinary tract
                                        and male reproductive health, including
                                        diagnosis and treatment of urological
                                        conditions.
                                    </p>


                                    <a
                                        href="{{ url('/departments/urology') }}"
                                        class="theme-btn mt-5">

                                        <i class="far fa-chevron-right"></i>

                                        More Details

                                    </a>

                                </div>


                                <!-- IMAGE -->
                                <div
                                    class="service-image"
                                    style="
                                        width:45%;
                                        min-width:45%;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                    ">

                                    <img
                                        src="{{ asset('assets/img/home-1/service/serviceimg.png') }}"
                                        alt="Urology Care"
                                        style="
                                            width:100%;
                                            max-width:100%;
                                            height:auto;
                                            object-fit:contain;
                                        ">

                                </div>

                            </div>

                        </div>



                        <!-- ENT -->
                        <div
                            id="thumb3"
                            class="tab-pane fade">

                            <div class="service-box-items">

                                <!-- CONTENT -->
                                <div class="service-icon-box">

                                    <div class="icon">
                                        <i class="flaticon-good-heart"></i>
                                    </div>


                                    <h3>

                                        <a href="{{ url('/departments/ent') }}">
                                            Complete ENT <br>
                                            Care & Treatment
                                        </a>

                                    </h3>


                                    <p>
                                        Comprehensive treatment for ear, nose
                                        and throat conditions with specialist
                                        consultation, accurate diagnosis and
                                        personalised patient care.
                                    </p>


                                    <a
                                        href="{{ url('/departments/ent') }}"
                                        class="theme-btn mt-5">

                                        <i class="far fa-chevron-right"></i>

                                        More Details

                                    </a>

                                </div>


                                <!-- IMAGE -->
                                <div
                                    class="service-image"
                                    style="
                                        width:45%;
                                        min-width:45%;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                    ">

                                    <img
                                        src="{{ asset('assets/img/home-1/service/serviceimg.png') }}"
                                        alt="ENT Care"
                                        style="
                                            width:100%;
                                            max-width:100%;
                                            height:auto;
                                            object-fit:contain;
                                        ">

                                </div>

                            </div>

                        </div>



                        <!-- GENERAL SURGERY -->
                        <div
                            id="thumb4"
                            class="tab-pane fade">

                            <div class="service-box-items">

                                <!-- CONTENT -->
                                <div class="service-icon-box">

                                    <div class="icon">
                                        <i class="flaticon-good-heart"></i>
                                    </div>


                                    <h3>

                                        <a href="{{ url('/departments/general-surgery') }}">
                                            General Surgery <br>
                                            Care & Treatment
                                        </a>

                                    </h3>


                                    <p>
                                        Expert surgical care for a wide range
                                        of conditions, with a focus on safe,
                                        effective and minimally invasive
                                        procedures.
                                    </p>


                                    <a
                                        href="{{ url('/departments/general-surgery') }}"
                                        class="theme-btn mt-5">

                                        <i class="far fa-chevron-right"></i>

                                        More Details

                                    </a>

                                </div>


                                <!-- IMAGE -->
                                <div
                                    class="service-image"
                                    style="
                                        width:45%;
                                        min-width:45%;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                    ">

                                    <img
                                        src="{{ asset('assets/img/home-1/service/serviceimg.png') }}"
                                        alt="General Surgery"
                                        style="
                                            width:100%;
                                            max-width:100%;
                                            height:auto;
                                            object-fit:contain;
                                        ">

                                </div>

                            </div>

                        </div>



                        <!-- JOINT REPLACEMENT -->
                        <div
                            id="thumb5"
                            class="tab-pane fade">

                            <div class="service-box-items">

                                <!-- CONTENT -->
                                <div class="service-icon-box">

                                    <div class="icon">
                                        <i class="flaticon-good-heart"></i>
                                    </div>


                                    <h3>

                                        <a href="{{ url('/departments/joint-replacement') }}">
                                            Joint Replacement <br>
                                            Care & Treatment
                                        </a>

                                    </h3>


                                    <p>
                                        Advanced joint replacement care focused
                                        on restoring mobility, reducing pain and
                                        helping patients return to their daily
                                        activities with confidence.
                                    </p>


                                    <a
                                        href="{{ url('/departments/joint-replacement') }}"
                                        class="theme-btn mt-5">

                                        <i class="far fa-chevron-right"></i>

                                        More Details

                                    </a>

                                </div>


                                <!-- IMAGE -->
                                <div
                                    class="service-image"
                                    style="
                                        width:45%;
                                        min-width:45%;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                    ">

                                    <img
                                        src="{{ asset('assets/img/home-1/service/serviceimg.png') }}"
                                        alt="Joint Replacement Care"
                                        style="
                                            width:100%;
                                            max-width:100%;
                                            height:auto;
                                            object-fit:contain;
                                        ">

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

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



            <div class="section-title-area align-items-end mb-0">

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

<section
    class="vedio-bg-section fix bg-cover atulya-home-video"
    style="background-image: url('{{ asset('assets/img/home-1/counter/video-img.png') }}');">

    <div class="atulya-video-overlay"></div>

    <div class="container">

        <div class="atulya-video-inner">

            {{-- =========================
                    HEADING
            ========================== --}}

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


            {{-- =========================
                    VIDEOS
            ========================== --}}

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


                {{-- VIDEO CARD --}}

                <div class="col-xl-3 col-lg-3 col-md-6">

                    <div class="atulya-video-card">

                        {{-- Thumbnail --}}

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


                        {{-- Content --}}

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


            {{-- SEE ALL --}}

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

            {{-- EMPTY STATE --}}

            <div class="atulya-video-empty">

                <i class="fas fa-video"></i>

                <h3>
                    Videos Coming Soon
                </h3>

                <p>
                    We are preparing informative healthcare
                    content for you.
                </p>

                <a
                    href="{{ route('videos.index') }}"
                    class="theme-btn atulya-see-videos">

                    <span>
                        View All Videos
                    </span>

                    <i class="fas fa-arrow-right"></i>

                </a>

            </div>

            @endif

        </div>

    </div>


    {{-- =========================
            VIDEO POPUP
    ========================== --}}

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

<section class="appointment-section section-padding atulya-appointment-section">

    <div class="container">

        <div class="appointment-wrapper">

            <div class="row g-4 align-items-stretch">

                <!-- APPOINTMENT FORM -->
                <div class="col-lg-8">

                    <div class="appointment-items">

                        <h3>Book An Appointment</h3>
                        @if(session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                        @endif
                       <form action="{{ route('appointment.store') }}" method="POST">

                            @csrf

                            <div class="row">

                                <!-- NAME -->
                                <div class="col-md-6">
                                    <div class="form-clt">

                                        <p>Name</p>

                                        <input
                                            type="text"
                                            name="name"
                                            value="{{ old('name') }}"
                                            placeholder="Enter Your Name"
                                            required>
                                        @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>


                                <!-- PHONE -->
                                <div class="col-md-6">
                                    <div class="form-clt">

                                        <p>Phone</p>

                                        <input
                                            type="tel"
                                            name="phone"
                                            value="{{ old('phone') }}"
                                            placeholder="Enter Your Phone Number"
                                            required>
                                        @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>


                                <!-- DEPARTMENT -->
                                <div class="col-md-6">
                                    <div class="form-clt">

                                        <p>Department <span>(Optional)</span></p>

                                        <div class="form">

                                            <select name="department" id="appointmentDepartment" class="w-100">
                                                <option value="">Select Department</option>

                                                @foreach($departments as $department)
                                                <option
                                                    value="{{ $department }}"
                                                    {{ old('department') == $department ? 'selected' : '' }}>
                                                    {{ ucwords($department) }}
                                                </option>
                                                @endforeach
                                            </select>

                                            @error('department')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>

                                    </div>
                                </div>


                                <!-- DOCTOR -->
                                <div class="col-md-6">
                                    <div class="form-clt">

                                        <p>Doctor <span>(Optional)</span></p>

                                        <div class="form">

                                            <select name="doctor_id" id="appointmentDoctor" class="w-100" disabled>
                                                <option value="">Select Department First</option>

                                                @foreach($doctors as $doctor)
                                                <option
                                                    value="{{ $doctor->id }}"
                                                    data-department="{{ trim($doctor->department) }}"
                                                    style="display:none;"
                                                    {{ old('doctor_id') == $doctor->id ? 'selected' : '' }}>
                                                    {{ $doctor->name }}
                                                </option>
                                                @endforeach
                                            </select>

                                            @error('doctor_id')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>

                                    </div>
                                </div>


                                <!-- DATE -->
                                <div class="col-md-6">
                                    <div class="form-clt">

                                        <p>Date</p>
                                        <input
                                            type="date"
                                            name="appointment_date"
                                            value="{{ old('appointment_date') }}"
                                            min="{{ date('Y-m-d') }}"
                                            required>

                                        @error('appointment_date')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>


                                <!-- TIME -->
                                <div class="col-md-6">
                                    <div class="form-clt">

                                        <p>Time <span>(Optional)</span></p>

                                        <input
                                            type="time"
                                            name="appointment_time"
                                            value="{{ old('appointment_time') }}">

                                        @error('appointment_time')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>


                                <!-- MESSAGE -->
                                <div class="col-12">
                                    <div class="form-clt">

                                        <p>Message <span>(Optional)</span></p>

                                        <textarea
                                            name="message"
                                            rows="3"
                                            placeholder="Write Your Message">{{ old('message') }}</textarea>

                                        @error('message')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>


                                <!-- BUTTON -->
                                <div class="col-12">
                                    <div class="form-clt">

                                        <button
                                            type="submit"
                                            class="theme-btn">
                                            <i class="far fa-chevron-right"></i>
                                            Submit Appointment
                                        </button>

                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>


                <!-- TWO IMAGES -->
                <div class="col-lg-4">

                    <div class="appointment-images">

                        <div class="appointment-image-item">

                            <img
                                src="{{ asset('assets/img/inner/contact/contact-img.jpg') }}"
                                alt="Atulya Super Speciality Hospital">

                        </div>

                        <div class="appointment-image-item">

                            <img
                                src="{{ asset('assets/img/inner/contact/contact-img.jpg') }}"
                                alt="Atulya Super Speciality Hospital">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- Testimonial Section5 Start -->
<section class="testimonial-section-1 section-padding pb-0 bg-cover fix" style="background-image: url('assets/img/home-1/testimonial/bg-test1.png');">
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
                            <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">OUR TESTIMONIAL</span>
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                Our Real Story of Clients
                            </h2>
                        </div>
                        <div class="array-button-2">
                            <button class="array-prev"><i class="fas fa-chevron-left"></i></button>
                            <button class="array-next"><i class="fas fa-chevron-right"></i></button>
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
                                                “I am a doctor myself and have taken the help of my colleague Dr. Dhaivat Shukla for joint-related problems in my relatives. His diagnosis and treatment approach have always impressed me. His knowledge, dedication, and patient care are truly commendable. Best wishes to my dear friend Dr. Shukla and the entire {{ setting('hospital_name') }} team.”
                                            </p>
                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>Sangeeta Sheth</h5>

                                                </div>
                                                <div class="icon">

                                                </div>
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
                                                “Dr. Priyanka Prajapati provided excellent treatment for my father he was suffering from malaria. She was professional, knowledgeable, and he received the right treatment at the right time. Her caring approach gave us confidence throughout the treatment. Thanks to her and the Atulya team for their excellent care.”
                                            </p>
                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>
                                                        Krishtal Parikh</h5>

                                                </div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div>
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
                                                “My mother was suffering from arthritis, severe morning stiffness, and constant pain. Dr. Dhaivat Shukla at {{ setting('hospital_name') }} helped us manage her condition with proper treatment and guidance. Her pain improved significantly, and we are truly thankful to Dr. Shukla and the entire Atulya team.”
                                            </p>
                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>
                                                        Taksh Shrimali</h5>

                                                </div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div>
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
                                                “Dr. Dhaivat Shukla is an excellent doctor. I was suffering from Ankylosing Spondylitis, and he diagnosed my condition quickly and started effective treatment. He is very supportive, helpful, and caring towards his patients. I am very satisfied with his treatment and would highly recommend him.”
                                            </p>
                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>
                                                        Shivani Joshi</h5>

                                                </div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div>
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
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
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
    </div>
</section>

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


<!-- =========================
     BLOG IMAGE CONSISTENCY
========================== -->

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