@extends('website.layout.app')

@section('title', 'Atulya Super Speciality Hospital & ICU | Ahmedabad')

@section('meta_description', 'Atulya Super Speciality Hospital & ICU in Ahmedabad provides specialist healthcare, 24×7 emergency and critical care services with experienced doctors and modern hospital facilities.')

@section('content')


<!-- Hero Section Start -->

<section class="hero-section hero-1 bg-cover fix" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('assets/img/home-1/hero/bg-01.png') }}'); height:900px;">

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

                    <a href="{{ url('/departments/urology') }}" class="theme-btn wow fadeInUp" data-wow-delay=".5s">

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
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">

                    <div class="hero-feature-icon">

                        <div class="icon justify-content-between">

                            <img src="{{ asset('assets/img/home-1/hero/feature-2.png') }}" alt="Book an Appointment at Atulya Hospital">

                            <a href="{{ url('/contact') }}" class="arrow-icon" aria-label="Book an Appointment">

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
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">

                    <div class="hero-feature-icon ps-0">

                        <div class="icon justify-content-between">

                            <img src="{{ asset('assets/img/home-1/hero/feature-2.png') }}" alt="Specialist Doctors at Atulya Hospital">

                            <a href="{{ url('/doctors') }}" class="arrow-icon" aria-label="Meet Our Specialist Doctors">

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
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">

                    <div class="hero-feature-icon border-none">

                        <div class="icon">

                            <img src="{{ asset('assets/img/home-1/hero/feature-3.png') }}" alt="24x7 Emergency Care at Atulya Hospital">

                            <div class="content">

                                <p>
                                    Emergency Helpline
                                </p>

                                <h4>
                                    <a href="tel:+919727579000">
                                        +91 97275 79000
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
        <img src="{{ asset('assets/img/home-1/about/shape-01.png') }}" alt="Atulya Hospital healthcare">
    </div>

    <div class="shape-2-img">
        <img src="{{ asset('assets/img/home-1/about/shape-02.png') }}" alt="Atulya Hospital medical care">
    </div>

    <div class="shape-3-img">
        <img src="{{ asset('assets/img/home-1/about/shape-03.png') }}" alt="Atulya Hospital facilities">
    </div>

    <div class="container">
        <div class="about-wrapper">

            <div class="row g-4">

                <!-- IMAGE -->
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">

                    <div class="about-image">

                        <img src="{{ asset('assets/img/home-1/hero/img1.png') }}" alt="Atulya Super Speciality Hospital and ICU Ahmedabad" class="wow img-custom-anim-left">

                        <div class="about-img-2 float-bob-x">
                            <img src="{{ asset('assets/img/home-1/hero/img2.png') }}" alt="Atulya Hospital medical care">
                        </div>

                        <div class="about-img-3 float-bob-y">
                            <img src="{{ asset('assets/img/home-1/hero/img3.png') }}" alt="Atulya Hospital healthcare services">
                        </div>

                    </div>

                </div>


                <!-- CONTENT -->
                <div class="col-lg-7">

                    <div class="about-content">

                        <div class="section-title mb-0 text-start">

                            <span class="subtitle tz-sub-tilte tz-sub-anim text-uppercase tx-subTitle">
                                ABOUT ATULYA HOSPITAL
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
                                    <img src="{{ asset('assets/img/home-1/about/icon-01.png') }}" alt="Specialist medical care at Atulya Hospital">
                                </div>

                                <h5>
                                    Specialist Medical<br>
                                    Care
                                </h5>

                            </div>


                            <div class="about-items">

                                <div class="about-img">
                                    <img src="{{ asset('assets/img/home-1/about/icon-02.png') }}" alt="24x7 critical care at Atulya Hospital">
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
        <img src="{{ asset('assets/img/home-1/service/shape-1.png') }}" alt="img">
    </div>

    <div class="service-shape-2">
        <img src="{{ asset('assets/img/home-1/service/shape-2.png') }}" alt="img">
    </div>

    <div class="service-shape-3">
        <img src="{{ asset('assets/img/home-1/service/shape-3.png') }}" alt="img">
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
                        <li class="nav-item wow fadeInUp" data-wow-delay=".2s">

                            <a href="#thumb1" data-bs-toggle="tab" class="nav-link active">
                                Orthopedics
                                <i class="far fa-chevron-right"></i>
                            </a>

                        </li>


                        <!-- UROLOGY -->
                        <li class="nav-item wow fadeInUp" data-wow-delay=".4s">

                            <a href="#thumb2" data-bs-toggle="tab" class="nav-link">
                                Urology
                                <i class="far fa-chevron-right"></i>
                            </a>

                        </li>


                        <!-- ENT -->
                        <li class="nav-item wow fadeInUp" data-wow-delay=".6s">

                            <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
                                ENT Care
                                <i class="far fa-chevron-right"></i>
                            </a>

                        </li>


                        <!-- GENERAL SURGERY -->
                        <li class="nav-item wow fadeInUp" data-wow-delay=".8s">

                            <a href="#thumb4" data-bs-toggle="tab" class="nav-link">
                                General Surgery
                                <i class="far fa-chevron-right"></i>
                            </a>

                        </li>


                        <!-- JOINT REPLACEMENT -->
                        <li class="nav-item wow fadeInUp" data-wow-delay="1s">

                            <a href="#thumb5" data-bs-toggle="tab" class="nav-link">
                                Joint Replacement
                                <i class="far fa-chevron-right"></i>
                            </a>

                        </li>

                    </ul>

                </div>



                <!-- SERVICE CONTENT -->
                <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">

                    <div class="tab-content">


                        <!-- ORTHOPEDICS -->
                        <div id="thumb1" class="tab-pane fade show active">

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


                                    <a href="{{ url('/departments/orthopedic') }}" class="theme-btn mt-5">

                                        <i class="far fa-chevron-right"></i>

                                        More Details

                                    </a>

                                </div>


                                <!-- IMAGE -->
                                <div class="service-image" style="
                                        width:45%;
                                        min-width:45%;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                    ">

                                    <img src="{{ asset('assets/img/home-1/service/serviceimg.png') }}" alt="Orthopaedic Care" style="
                                            width:100%;
                                            max-width:100%;
                                            height:auto;
                                            object-fit:contain;
                                        ">

                                </div>

                            </div>

                        </div>



                        <!-- UROLOGY -->
                        <div id="thumb2" class="tab-pane fade">

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


                                    <a href="{{ url('/departments/urology') }}" class="theme-btn mt-5">

                                        <i class="far fa-chevron-right"></i>

                                        More Details

                                    </a>

                                </div>


                                <!-- IMAGE -->
                                <div class="service-image" style="
                                        width:45%;
                                        min-width:45%;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                    ">

                                    <img src="{{ asset('assets/img/home-1/service/serviceimg.png') }}" alt="Urology Care" style="
                                            width:100%;
                                            max-width:100%;
                                            height:auto;
                                            object-fit:contain;
                                        ">

                                </div>

                            </div>

                        </div>



                        <!-- ENT -->
                        <div id="thumb3" class="tab-pane fade">

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


                                    <a href="{{ url('/departments/ent') }}" class="theme-btn mt-5">

                                        <i class="far fa-chevron-right"></i>

                                        More Details

                                    </a>

                                </div>


                                <!-- IMAGE -->
                                <div class="service-image" style="
                                        width:45%;
                                        min-width:45%;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                    ">

                                    <img src="{{ asset('assets/img/home-1/service/serviceimg.png') }}" alt="ENT Care" style="
                                            width:100%;
                                            max-width:100%;
                                            height:auto;
                                            object-fit:contain;
                                        ">

                                </div>

                            </div>

                        </div>



                        <!-- GENERAL SURGERY -->
                        <div id="thumb4" class="tab-pane fade">

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


                                    <a href="{{ url('/departments/general-surgery') }}" class="theme-btn mt-5">

                                        <i class="far fa-chevron-right"></i>

                                        More Details

                                    </a>

                                </div>


                                <!-- IMAGE -->
                                <div class="service-image" style="
                                        width:45%;
                                        min-width:45%;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                    ">

                                    <img src="{{ asset('assets/img/home-1/service/serviceimg.png') }}" alt="General Surgery" style="
                                            width:100%;
                                            max-width:100%;
                                            height:auto;
                                            object-fit:contain;
                                        ">

                                </div>

                            </div>

                        </div>



                        <!-- JOINT REPLACEMENT -->
                        <div id="thumb5" class="tab-pane fade">

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


                                    <a href="{{ url('/departments/joint-replacement') }}" class="theme-btn mt-5">

                                        <i class="far fa-chevron-right"></i>

                                        More Details

                                    </a>

                                </div>


                                <!-- IMAGE -->
                                <div class="service-image" style="
                                        width:45%;
                                        min-width:45%;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                    ">

                                    <img src="{{ asset('assets/img/home-1/service/serviceimg.png') }}" alt="Joint Replacement Care" style="
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


    <!-- MOBILE RESPONSIVE IMAGE -->
    <style>
        @media (max-width: 991px) {

            .service-section .service-box-items {
                display: flex !important;
                flex-direction: column !important;
            }

            .service-section .service-box-items .service-icon-box {
                width: 100% !important;
                flex: 0 0 100% !important;
            }

            .service-section .service-box-items .service-image {
                width: 100% !important;
                min-width: 100% !important;
                margin-top: 25px;
            }

            .service-section .service-box-items .service-image img {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                object-fit: contain !important;
            }

        }

    </style>

</section>
<!-- Service Section End -->


<!-- Cta Section Start -->

<section class="cta-section color-bg-1 section-padding pt-0 fix">


    <div class="team-shape-2">
        <img src="{{ asset('assets/img/home-1/team/shape-2.png') }}" alt="img">
    </div>

    <div class="container">

        <!-- CTA -->
        <div class="cta-wrapper zoom-effect-style bg-cover" style="background-image:  url('{{ asset('assets/img/home-1/cta/bg-image.png') }}');">



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
                        <img src="{{ asset('assets/img/home-1/cta/call-icon.png') }}" alt="Emergency Helpline">
                    </div>

                    <div class="content">
                        <p>Call Emergency</p>

                        <a href="tel:+919727579000">
                            +91 97275 79000
                        </a>
                    </div>

                </div>

            </div>
        </div>



        <!-- Doctors -->
        <div class="section-padding pb-0 advance-wrap">

            <div class="doctor-slider-wrapper">

                <div id="doctorSliderTrack" style="
                display: flex;
                gap: 24px;
                transition: transform 0.5s ease;
                width: 100%;
            ">

                    @foreach($doctors as $doctor)

                    <div class="doctor-slide-item" style="
                        flex: 0 0 calc((100% - 72px) / 4);
                        min-width: 0;
                    ">

                        <div class="team-box-items mt-0 advance-item h-100 d-flex flex-column">

                            <!-- Doctor Image -->
                            <div class="team-image">

                                <a href="{{ route('doctors.show', $doctor['slug']) }}">

                                    <img src="{{ asset($doctor['image']) }}" alt="{{ $doctor['name'] }}">

                                </a>

                                <!-- Department -->
                                <span class="post-box">
                                    {{ $doctor['department'] }}
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

                <div class="doctor-slider-buttons" style="
                    display:flex;
                    justify-content:center;
                    align-items:center;
                    gap:15px;
                    margin-top:30px;
                ">

                    <!-- PREVIOUS -->
                    <button type="button" id="doctorPrev" aria-label="Previous Doctor" style="
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
                    <button type="button" id="doctorNext" aria-label="Next Doctor" style="
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


        <style>
            .doctor-slider-wrapper {
                width: 100%;
                overflow: hidden;
            }

            #doctorSliderTrack {
                width: 100%;
            }

            .doctor-slide-item {
                box-sizing: border-box;
            }


            @media (max-width: 1199px) {

                .doctor-slide-item {
                    flex: 0 0 calc((100% - 48px) / 3) !important;
                }

            }


            @media (max-width: 767px) {

                #doctorSliderTrack {
                    gap: 20px !important;
                }

                .doctor-slide-item {
                    flex: 0 0 calc((100% - 20px) / 2) !important;
                }

            }


            @media (max-width: 575px) {

                .doctor-slide-item {
                    flex: 0 0 100% !important;
                }

            }

        </style>


        <script>
            document.addEventListener('DOMContentLoaded', function() {

                const track = document.getElementById('doctorSliderTrack');

                const nextButton = document.getElementById('doctorNext');

                const prevButton = document.getElementById('doctorPrev');


                if (!track || !nextButton || !prevButton) {
                    return;
                }


                const doctors = track.querySelectorAll('.doctor-slide-item');

                let currentIndex = 0;


                function getVisibleDoctors() {

                    if (window.innerWidth <= 575) {
                        return 1;
                    }

                    if (window.innerWidth <= 767) {
                        return 2;
                    }

                    if (window.innerWidth <= 1199) {
                        return 3;
                    }

                    return 4;

                }


                function moveSlider() {

                    const visibleDoctors = getVisibleDoctors();

                    const gap = window.innerWidth <= 767 ? 20 : 24;

                    const slideWidth =
                        doctors[0].getBoundingClientRect().width;


                    /*
                     * Last position ke baad
                     * directly first doctor par.
                     */
                    const maxIndex = doctors.length - visibleDoctors;


                    if (currentIndex < maxIndex) {

                        currentIndex++;

                    } else {

                        currentIndex = 0;

                    }


                    const moveAmount =
                        currentIndex * (slideWidth + gap);


                    track.style.transform =
                        'translateX(-' + moveAmount + 'px)';

                }


                function movePrevious() {

                    const visibleDoctors = getVisibleDoctors();

                    const maxIndex = doctors.length - visibleDoctors;


                    if (currentIndex > 0) {

                        currentIndex--;

                    } else {

                        currentIndex = maxIndex;

                    }


                    const gap = window.innerWidth <= 767 ? 20 : 24;

                    const slideWidth =
                        doctors[0].getBoundingClientRect().width;


                    const moveAmount =
                        currentIndex * (slideWidth + gap);


                    track.style.transform =
                        'translateX(-' + moveAmount + 'px)';

                }


                nextButton.addEventListener('click', function() {

                    moveSlider();

                });


                prevButton.addEventListener('click', function() {

                    movePrevious();

                });


                window.addEventListener('resize', function() {

                    currentIndex = 0;

                    track.style.transform = 'translateX(0)';

                });

            });

        </script>

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
{{-- =========================================================
     VIDEO SECTION
========================================================= --}}

<section class="vedio-bg-section fix bg-cover atulya-home-video" style="background-image: url('{{ asset('assets/img/home-1/counter/video-img.png') }}');">

    {{-- Background Overlay --}}
    <div class="atulya-video-overlay"></div>


    <div class="container">

        <div class="atulya-video-inner">

            {{-- =================================================
                 HEADING
            ================================================== --}}

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


            @if(isset($featuredVideo) && $featuredVideo)

            @php

            /*
            |--------------------------------------------------------------------------
            | YouTube ID
            |--------------------------------------------------------------------------
            */

            $youtubeId = null;

            if (
            preg_match(
            '/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/|youtube\.com\/shorts\/)([^&?\/]+)/',
            $featuredVideo->youtube_url,
            $matches
            )
            ) {
            $youtubeId = $matches[1];
            }


            /*
            |--------------------------------------------------------------------------
            | YouTube Thumbnail
            |--------------------------------------------------------------------------
            */

            if ($youtubeId) {

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


            {{-- =================================================
                     FEATURED VIDEO CARD
                ================================================== --}}

            <div class="atulya-video-card">


                {{-- =================================================
                         THUMBNAIL
                    ================================================== --}}

                <div class="atulya-video-thumbnail">

                    <img src="{{ $videoThumbnail }}" alt="{{ $featuredVideo->title }}" loading="lazy">


                    <div class="atulya-thumbnail-overlay"></div>


                    {{-- Play Button --}}
                    <button type="button" class="atulya-video-play" id="openVideo" data-video-url="{{ $featuredVideo->youtube_url }}" aria-label="Play {{ $featuredVideo->title }}">

                        <span>
                            <i class="fas fa-play"></i>
                        </span>

                    </button>

                </div>


                {{-- =================================================
                         VIDEO CONTENT
                    ================================================== --}}

                <div class="atulya-video-info">

                    <div class="atulya-video-info-inner">

                        <span class="atulya-video-label">
                            Featured Video
                        </span>


                        <h3>
                            {{ $featuredVideo->title }}
                        </h3>


                        @if($featuredVideo->description)

                        <p>
                            {{ \Illuminate\Support\Str::limit(
                                        $featuredVideo->description,
                                        130
                                    ) }}
                        </p>

                        @else

                        <p>
                            Explore healthcare information,
                            awareness and updates from Atulya Hospital.
                        </p>

                        @endif

                    </div>


                    {{-- See All Videos --}}
                    <a href="{{ route('videos.index') }}" class="theme-btn atulya-see-videos">

                        <span>
                            See All Videos
                        </span>

                        <i class="fas fa-arrow-right"></i>

                    </a>

                </div>

            </div>


            @else

            {{-- =================================================
                     NO VIDEO
                ================================================== --}}

            <div class="atulya-video-empty">

                <i class="fas fa-video"></i>

                <h3>
                    Videos Coming Soon
                </h3>

                <p>
                    We are preparing informative healthcare
                    content for you.
                </p>


                <a href="{{ route('videos.index') }}" class="theme-btn atulya-see-videos">

                    <span>
                        See All Videos
                    </span>

                    <i class="fas fa-arrow-right"></i>

                </a>

            </div>

            @endif

        </div>

    </div>


    {{-- =========================================================
         VIDEO POPUP
    ========================================================== --}}

    <div id="videoModal" class="atulya-video-modal">

        <div class="atulya-video-modal-content">

            <button type="button" id="closeVideo" class="atulya-video-close" aria-label="Close video">

                <i class="fas fa-times"></i>

            </button>


            <div class="atulya-video-iframe-wrapper">

                <iframe id="popupVideo" src="" title="Atulya Hospital Video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                </iframe>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     VIDEO SECTION CSS
========================================================= --}}

@push('styles')

<style>
    /* =========================================================
   SECTION
========================================================= */

    .atulya-home-video {
        position: relative !important;

        padding: 80px 0 85px !important;

        background-position: center center !important;
        background-size: cover !important;
        background-repeat: no-repeat !important;

        overflow: hidden;
    }


    /* =========================================================
   OVERLAY
========================================================= */

    .atulya-video-overlay {
        position: absolute;

        inset: 0;

        z-index: 1;

        background: rgba(11, 39, 76, 0.70);
    }


    /* =========================================================
   INNER
========================================================= */

    .atulya-video-inner {
        position: relative;

        z-index: 2;

        width: 100%;
    }


    /* =========================================================
   HEADING
========================================================= */

    .atulya-video-heading {
        max-width: 680px;

        margin: 0 auto 35px;

        text-align: center;
    }


    .atulya-video-heading span {
        display: inline-block;

        margin-bottom: 8px;

        color: #ffffff;

        font-size: 11px;

        font-weight: 700;

        letter-spacing: 2px;

        text-transform: uppercase;
    }


    .atulya-video-heading h2 {
        margin: 0 0 10px;

        color: #ffffff;

        font-size: 38px;

        line-height: 1.2;

        font-weight: 700;
    }


    .atulya-video-heading p {
        max-width: 610px;

        margin: 0 auto;

        color: rgba(255, 255, 255, .82);

        font-size: 14px;

        line-height: 1.7;
    }


    /* =========================================================
   CARD
========================================================= */

    .atulya-video-card {
        display: grid;

        grid-template-columns: 58% 42%;

        width: 100%;

        max-width: 1000px;

        height: 325px;

        margin: 0 auto;

        overflow: hidden;

        border-radius: 12px;

        background: #ffffff;

        box-shadow:
            0 18px 45px rgba(0, 0, 0, .25);
    }


    /* =========================================================
   THUMBNAIL
========================================================= */

    .atulya-video-thumbnail {
        position: relative;

        width: 100%;

        height: 325px;

        overflow: hidden;

        background: #122442;
    }


    .atulya-video-thumbnail img {
        width: 100%;

        height: 100%;

        display: block;

        object-fit: cover;

        object-position: center;

        transition: transform .5s ease;
    }


    .atulya-video-card:hover .atulya-video-thumbnail img {
        transform: scale(1.035);
    }


    /* =========================================================
   THUMBNAIL OVERLAY
========================================================= */

    .atulya-thumbnail-overlay {
        position: absolute;

        inset: 0;

        z-index: 2;

        background:
            linear-gradient(to bottom,
                rgba(0, 0, 0, .02),
                rgba(0, 0, 0, .32));

        pointer-events: none;
    }


    /* =========================================================
   PLAY BUTTON
========================================================= */

    .atulya-video-play {
        position: absolute;

        left: 50%;
        top: 50%;

        z-index: 5;

        width: 76px;
        height: 76px;

        padding: 0;

        border: 0;

        border-radius: 50%;

        background: rgba(255, 255, 255, .96);

        display: flex;

        align-items: center;
        justify-content: center;

        transform: translate(-50%, -50%);

        cursor: pointer;

        box-shadow:
            0 10px 28px rgba(0, 0, 0, .25);

        transition: .3s ease;
    }


    .atulya-video-play::before {
        content: "";

        position: absolute;

        inset: -7px;

        border: 2px solid rgba(255, 255, 255, .50);

        border-radius: 50%;
    }


    .atulya-video-play span {
        width: 55px;
        height: 55px;

        border-radius: 50%;

        background: #172965;

        color: #ffffff;

        display: flex;

        align-items: center;
        justify-content: center;

        padding-left: 3px;

        transition: .3s ease;
    }


    .atulya-video-play span i {
        font-size: 16px;
    }


    .atulya-video-play:hover {
        transform:
            translate(-50%, -50%) scale(1.08);
    }


    .atulya-video-play:hover span {
        background: #2196f3;
    }


    /* =========================================================
   VIDEO INFO
========================================================= */

    .atulya-video-info {
        display: flex;

        flex-direction: column;

        justify-content: space-between;

        padding: 38px 35px;

        background: #ffffff;
    }


    .atulya-video-info-inner {
        margin-top: 5px;
    }


    /* =========================================================
   LABEL
========================================================= */

    .atulya-video-label {
        display: inline-block;

        margin-bottom: 12px;

        padding: 6px 10px;

        border-radius: 4px;

        background: #eaf4ff;

        color: #1c6fd1;

        font-size: 9px;

        line-height: 1;

        font-weight: 700;

        letter-spacing: 1px;

        text-transform: uppercase;
    }


    /* =========================================================
   TITLE
========================================================= */

    .atulya-video-info h3 {
        margin: 0 0 12px;

        color: #172965;

        font-size: 24px;

        line-height: 1.3;

        font-weight: 700;
    }


    /* =========================================================
   DESCRIPTION
========================================================= */

    .atulya-video-info p {
        max-width: 320px;

        margin: 0;

        color: #68738a;

        font-size: 13px;

        line-height: 1.7;
    }


    /* =========================================================
   SEE ALL VIDEOS
========================================================= */

    .atulya-see-videos {
        align-self: flex-start;

        display: inline-flex !important;

        align-items: center;

        justify-content: space-between;

        gap: 14px;

        min-width: 170px;

        height: 48px;

        padding: 0 8px 0 20px !important;

        border-radius: 30px !important;

        color: #ffffff !important;

        font-size: 13px;

        font-weight: 600;

        box-shadow:
            0 8px 18px rgba(28, 111, 209, .18);

        transition: .3s ease !important;
    }


    .atulya-see-videos i {
        width: 34px;

        height: 34px;

        border-radius: 50%;

        background: #ffffff;

        color: #1c6fd1;

        display: flex;

        align-items: center;
        justify-content: center;

        font-size: 12px;

        transition: .3s ease;
    }


    .atulya-see-videos:hover {
        transform: translateY(-2px);

        box-shadow:
            0 12px 25px rgba(28, 111, 209, .28);
    }


    .atulya-see-videos:hover i {
        transform: translateX(2px);
    }


    /* =========================================================
   EMPTY
========================================================= */

    .atulya-video-empty {
        max-width: 650px;

        margin: 0 auto;

        padding: 45px 25px;

        text-align: center;

        border-radius: 10px;

        background: #ffffff;
    }


    .atulya-video-empty>i {
        display: block;

        margin-bottom: 12px;

        color: #1c6fd1;

        font-size: 35px;
    }


    .atulya-video-empty h3 {
        margin: 0 0 8px;

        color: #172965;

        font-size: 22px;
    }


    .atulya-video-empty p {
        margin: 0 0 20px;

        color: #68738a;

        font-size: 14px;
    }


    /* =========================================================
   MODAL
========================================================= */

    .atulya-video-modal {
        position: fixed;

        inset: 0;

        z-index: 999999;

        display: none;

        align-items: center;

        justify-content: center;

        padding: 20px;

        background: rgba(0, 0, 0, .88);
    }


    .atulya-video-modal.active {
        display: flex;
    }


    .atulya-video-modal-content {
        position: relative;

        width: 100%;

        max-width: 950px;

        background: #000;

        border-radius: 10px;

        overflow: visible;
    }


    .atulya-video-iframe-wrapper {
        position: relative;

        width: 100%;

        padding-top: 56.25%;

        overflow: hidden;

        border-radius: 10px;
    }


    .atulya-video-iframe-wrapper iframe {
        position: absolute;

        inset: 0;

        width: 100%;

        height: 100%;

        border: 0;
    }


    /* =========================================================
   CLOSE
========================================================= */

    .atulya-video-close {
        position: absolute;

        right: 0;

        top: -48px;

        z-index: 10;

        width: 40px;

        height: 40px;

        padding: 0;

        border: 0;

        border-radius: 50%;

        background: #ffffff;

        color: #172965;

        display: flex;

        align-items: center;

        justify-content: center;

        cursor: pointer;

        transition: .25s ease;
    }


    .atulya-video-close:hover {
        background: #2196f3;

        color: #ffffff;
    }


    /* =========================================================
   TABLET
========================================================= */

    @media (max-width: 991px) {

        .atulya-home-video {
            padding: 70px 0 75px !important;
        }


        .atulya-video-card {
            grid-template-columns: 1fr;

            height: auto;

            max-width: 700px;
        }


        .atulya-video-thumbnail {
            height: 350px;
        }


        .atulya-video-info {
            min-height: 260px;

            padding: 30px;
        }


        .atulya-video-info p {
            max-width: 100%;
        }

    }


    /* =========================================================
   MOBILE
========================================================= */

    @media (max-width: 767px) {

        .atulya-home-video {
            padding: 55px 0 60px !important;
        }


        .atulya-video-heading {
            padding: 0 10px;

            margin-bottom: 28px;
        }


        .atulya-video-heading h2 {
            font-size: 30px;
        }


        .atulya-video-heading p {
            font-size: 13px;
        }


        .atulya-video-thumbnail {
            height: 250px;
        }


        .atulya-video-info {
            min-height: auto;

            padding: 25px 22px;
        }


        .atulya-video-info h3 {
            font-size: 21px;
        }


        .atulya-video-info p {
            margin-bottom: 24px;

            font-size: 13px;
        }


        .atulya-video-play {
            width: 70px;

            height: 70px;
        }


        .atulya-video-play span {
            width: 51px;

            height: 51px;
        }


        .atulya-see-videos {
            min-width: 165px;

            height: 46px;
        }

    }


    /* =========================================================
   SMALL MOBILE
========================================================= */

    @media (max-width: 575px) {

        .atulya-home-video {
            padding: 45px 0 50px !important;
        }


        .atulya-video-heading h2 {
            font-size: 27px;
        }


        .atulya-video-thumbnail {
            height: 215px;
        }


        .atulya-video-info {
            padding: 22px 18px;
        }


        .atulya-video-info h3 {
            font-size: 19px;
        }


        .atulya-video-info p {
            font-size: 13px;
        }


        .atulya-video-modal {
            padding: 12px;
        }

    }

</style>

@endpush


{{-- =========================================================
     VIDEO JS
========================================================= --}}

@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const openButton =
            document.getElementById('openVideo');

        const modal =
            document.getElementById('videoModal');

        const iframe =
            document.getElementById('popupVideo');

        const closeButton =
            document.getElementById('closeVideo');


        if (!openButton || !modal || !iframe) {
            return;
        }


        /*
        |--------------------------------------------------------------------------
        | YouTube ID
        |--------------------------------------------------------------------------
        */

        function getYoutubeId(url) {

            if (!url) {
                return null;
            }


            const patterns = [

                /youtube\.com\/watch\?v=([^&]+)/,

                /youtu\.be\/([^?&]+)/,

                /youtube\.com\/embed\/([^?&]+)/,

                /youtube\.com\/shorts\/([^?&]+)/

            ];


            for (const pattern of patterns) {

                const match =
                    url.match(pattern);

                if (match) {
                    return match[1];
                }

            }


            return null;
        }


        /*
        |--------------------------------------------------------------------------
        | OPEN
        |--------------------------------------------------------------------------
        */

        openButton.addEventListener('click', function() {

            const youtubeUrl =
                this.getAttribute('data-video-url');

            const videoId =
                getYoutubeId(youtubeUrl);


            if (!videoId) {
                return;
            }


            iframe.src =
                'https://www.youtube.com/embed/' +
                videoId +
                '?autoplay=1&rel=0';


            modal.classList.add('active');

            document.body.style.overflow = 'hidden';

        });


        /*
        |--------------------------------------------------------------------------
        | CLOSE
        |--------------------------------------------------------------------------
        */

        function closeVideo() {

            modal.classList.remove('active');

            iframe.src = '';

            document.body.style.overflow = '';

        }


        if (closeButton) {

            closeButton.addEventListener(
                'click'
                , closeVideo
            );

        }


        /*
        |--------------------------------------------------------------------------
        | OUTSIDE CLICK
        |--------------------------------------------------------------------------
        */

        modal.addEventListener('click', function(event) {

            if (event.target === modal) {

                closeVideo();

            }

        });


        /*
        |--------------------------------------------------------------------------
        | ESCAPE
        |--------------------------------------------------------------------------
        */

        document.addEventListener('keydown', function(event) {

            if (event.key === 'Escape') {

                closeVideo();

            }

        });

    });

</script>

@endpush


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
                WHY CHOOSE ATULYA HOSPITAL
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
                        Atulya Hospital provides comprehensive healthcare services
                        under one roof.
                    </p>

                </div>
            </div>

        </div>

    </div>

</section>



<!--  Appointment Section Start -->
<section class="appointment-section section-padding">

    <div class="container">

        <div class="appointment-wrapper">

            <div class="row g-2">

                <!-- APPOINTMENT FORM -->
                <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">

                    <div class="appointment-items">

                        <h3>Book An Appointment</h3>

                        <form action="#">

                            <div class="row">

                                <!-- NAME -->
                                <div class="col-xl-4 col-lg-6 col-md-6">

                                    <div class="form-clt">

                                        <p>Name</p>

                                        <input type="text" placeholder="Your name">

                                    </div>

                                </div>


                                <!-- PHONE -->
                                <div class="col-xl-4 col-lg-6 col-md-6">

                                    <div class="form-clt">

                                        <p>Phone</p>

                                        <input type="tel" placeholder="Your phone">

                                    </div>

                                </div>


                                <!-- DEPARTMENT -->
                                <div class="col-xl-4 col-lg-6 col-md-6">

                                    <div class="form-clt">

                                        <p>Department</p>

                                        <div class="form">

                                            <select class="single-select w-100">

                                                <option value="">
                                                    Select Department
                                                </option>

                                                <option value="Orthopedic">
                                                    Orthopedic
                                                </option>

                                                <option value="Urology">
                                                    Urology
                                                </option>

                                                <option value="Rheumatology">
                                                    Rheumatology
                                                </option>

                                                <option value="General Surgery">
                                                    General Surgery
                                                </option>

                                                <option value="Critical Care">
                                                    Critical Care
                                                </option>

                                                <option value="ENT">
                                                    ENT
                                                </option>

                                                <option value="Gynecology">
                                                    Gynecology
                                                </option>

                                                <option value="Physician">
                                                    Physician
                                                </option>

                                            </select>

                                        </div>

                                    </div>

                                </div>


                                <!-- DATE -->
                                <div class="col-xl-4 col-lg-6 col-md-6">

                                    <div class="form-clt">

                                        <p>Date</p>

                                        <input type="date" placeholder="Select date">

                                    </div>

                                </div>


                                <!-- TIME -->
                                <div class="col-xl-4 col-lg-6 col-md-6">

                                    <div class="form-clt">

                                        <p>Time</p>

                                        <input type="time" placeholder="Select time">

                                    </div>

                                </div>


                                <!-- BUTTON -->
                                <div class="col-xl-12">

                                    <div class="form-clt">

                                        <button class="theme-btn" type="submit">
                                            Make an Appointment
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                <!-- IMAGE -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay=".5s">

                    <div class="appointment-image">

                        <img src="{{ asset('assets/img/inner/contact/contact-img.jpg') }}" alt="Book an Appointment">

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
                                                “I am a doctor myself and have taken the help of my colleague Dr. Dhaivat Shukla for joint-related problems in my relatives. His diagnosis and treatment approach have always impressed me. His knowledge, dedication, and patient care are truly commendable. Best wishes to my dear friend Dr. Shukla and the entire Atulya Hospital team.”
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
                                                “My mother was suffering from arthritis, severe morning stiffness, and constant pain. Dr. Dhaivat Shukla at Atulya Hospital helped us manage her condition with proper treatment and guidance. Her pain improved significantly, and we are truly thankful to Dr. Shukla and the entire Atulya team.”
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
                            <img src="{{ asset('assets/img/home-1/brand/rheumatology.png') }}"style="width:180px; height:150px;"
                                alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="barnd-image text-center">
                            <img src="{{ asset('assets/img/home-1/brand/General Surgery.png') }}"
                                style="width:180px; height:150px;"alt="img">
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
{{-- <section class="news-section section-padding fix pt-0">
    <div class="news-shape-1">
        <img src="{{ asset('assets/img/home-1/news/shape-01.png') }}" alt="img">
</div>
<div class="news-shape-2">
    <img src="{{ asset('assets/img/home-1/news/shape-02.png') }}" alt="img">
</div>
<div class="container">
    <div class="section-title text-center">
        <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">OUR BLOG</span>
        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Our Recent Insights, Blog <br> and News From Us</h2>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="news-box-items">
                <div class="news-img">
                    <img src="{{ asset('assets/img/home-1/news/blog-1.png') }}" alt="img">
                    <span class="post-box">
                        Medical
                    </span>
                </div>
                <div class="news-content">
                    <span>09 May, 2026</span>
                    <h3><a href="{{ url('/blog') }}">When to See a Doctor: Warning <br> Signs You Shouldn’t Ignore</a></h3>
                    <p>A brief statement outlining the purpose and <br> mission of the clinic this can include.</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="news-box-items">
                <div class="news-img">
                    <img src="{{ asset('assets/img/home-1/news/blog-2.png') }}" alt="img">
                    <span class="post-box">
                        Medical
                    </span>
                </div>
                <div class="news-content">
                    <span>20 July, 2026</span>
                    <h3><a href="{{ url('/blog') }}">10 Everyday Habits for a Healthier <br> Life for Your Life</a></h3>
                    <p>A brief statement outlining the purpose and <br> mission of the clinic this can include.</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
            <div class="news-box-items">
                <div class="news-img">
                    <img src="{{ asset('assets/img/home-1/news/blog-3.png') }}" alt="img">
                    <span class="post-box">
                        Medical
                    </span>
                </div>
                <div class="news-content">
                    <span>20 January, 2026</span>
                    <h3><a href="{{ url('/blog') }}">10 Simple Daily Habits to Improve <br> Your Healthcare</a></h3>
                    <p>A brief statement outlining the purpose and <br> mission of the clinic this can include.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section> --}}

<!-- Faq Section Start -->

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
                                        <a href="tel:+919727579000">
                                            +91 97275 79000
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            What medical services are available at Atulya Hospital?
                                        </button>
                                    </h5>

                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Atulya Hospital provides comprehensive multispeciality healthcare services including consultations, diagnosis, treatment, surgical care and other specialised medical services under one roof.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 2 -->
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".4s">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How can I book an appointment with a doctor?
                                        </button>
                                    </h5>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            You can book an appointment through our website appointment form or contact Atulya Hospital directly at +91 97275 79000 for assistance with scheduling your consultation.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 3 -->
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".6s">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Do I need an appointment before visiting the hospital?
                                        </button>
                                    </h5>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Booking an appointment in advance is recommended for doctor consultations as it can help reduce waiting time. For urgent medical needs, you can contact the hospital directly for immediate guidance.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 4 -->
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".8s">
                                    <h5 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Does Atulya Hospital provide emergency medical assistance?
                                        </button>
                                    </h5>

                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes. For urgent medical assistance, patients or family members can contact Atulya Hospital at +91 97275 79000. Our team will guide you according to the patient's medical requirements.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 5 -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                    <h5 class="accordion-header" id="headingFive">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            What should I bring for my doctor consultation?
                                        </button>
                                    </h5>

                                    <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordion">
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
<script>
    const openVideo = document.getElementById("openVideo");
    const closeVideo = document.getElementById("closeVideo");
    const videoModal = document.getElementById("videoModal");
    const popupVideo = document.getElementById("popupVideo");

    // Open popup
    openVideo.addEventListener("click", function() {
        videoModal.style.display = "flex";
        popupVideo.currentTime = 0;
        popupVideo.play();
    });

    // Close popup
    closeVideo.addEventListener("click", function() {
        videoModal.style.display = "none";
        popupVideo.pause();
        popupVideo.currentTime = 0;
    });

    // Close when clicking outside video
    videoModal.addEventListener("click", function(e) {
        if (e.target === videoModal) {
            videoModal.style.display = "none";
            popupVideo.pause();
            popupVideo.currentTime = 0;
        }
    });

</script>
<style>
    /* Video Popup */
    .video-modal {
        display: none;
        position: fixed;
        z-index: 99999;
        inset: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.85);

        align-items: center;
        justify-content: center;
    }

    .video-modal-content {
        position: relative;
        width: 80%;
        max-width: 1000px;
    }

    .video-modal-content video {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 8px;
    }

    .video-close {
        position: absolute;
        right: -40px;
        top: -40px;

        color: #fff;
        font-size: 40px;
        font-weight: 300;

        cursor: pointer;
        z-index: 100000;
    }

    .video-close:hover {
        color: #ddd;
    }


    /* Mobile */
    @media (max-width: 768px) {

        .video-modal-content {
            width: 92%;
        }

        .video-close {
            right: 0;
            top: -45px;
            font-size: 35px;
        }
    }

</style>
@endsection
