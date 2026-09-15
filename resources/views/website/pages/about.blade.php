@extends('website.layout.app')

@section('title', 'About Atulya Super Speciality Hospital & ICU | Ahmedabad')

@section('meta_description', 'Learn about Atulya Super Speciality Hospital & ICU in Ahmedabad, our specialist healthcare services, 24×7 emergency and critical care, modern infrastructure and patient-focused approach.')

@section('content')

<style>
    .atulya-about {
        background: #f7f9fc;
        color: #172965;
    }

    .atulya-container {
        width: min(1180px, calc(100% - 30px));
        margin: auto;
    }

    .atulya-section {
        padding: 80px 0;
    }

    .atulya-section-head {
        max-width: 720px;
        margin: 0 auto 45px;
        text-align: center;
    }

    .atulya-kicker {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 12px;
        color: #1c6fd1;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
    }

    .atulya-kicker::before {
        content: "";
        width: 28px;
        height: 2px;
        background: #1c6fd1;
    }

    .atulya-section-head h2 {
        margin: 0 0 14px;
        color: #172965;
        font-size: clamp(30px, 4vw, 44px);
        line-height: 1.15;
        font-weight: 700;
    }

    .atulya-section-head p {
        margin: 0;
        color: #68738a;
        font-size: 16px;
        line-height: 1.8;
    }

    /* HERO */

    .atulya-about-hero {
        position: relative;
        overflow: hidden;
        padding: 85px 0 75px;
        background:
            radial-gradient(
                circle at 90% 20%,
                rgba(44, 127, 218, .12),
                transparent 30%
            ),
            linear-gradient(135deg, #f8fbff 0%, #eef5fc 100%);
    }

    .atulya-about-hero::after {
        content: "";
        position: absolute;
        right: -120px;
        bottom: -160px;
        width: 380px;
        height: 380px;
        border: 70px solid rgba(28, 111, 209, .05);
        border-radius: 50%;
    }

    .atulya-hero-grid {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: 1.05fr .95fr;
        gap: 65px;
        align-items: center;
    }

    .atulya-hero-content h1 {
        max-width: 650px;
        margin: 0 0 22px;
        color: #172965;
        font-size: clamp(38px, 5vw, 62px);
        line-height: 1.08;
        font-weight: 750;
    }

    .atulya-hero-content h1 span {
        color: #1c6fd1;
    }

    .atulya-hero-content > p {
        max-width: 620px;
        margin: 0 0 30px;
        color: #667189;
        font-size: 17px;
        line-height: 1.85;
    }

    .atulya-hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin-bottom: 35px;
    }

    .atulya-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        min-height: 50px;
        padding: 0 23px;
        border-radius: 7px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 700;
        transition: .25s ease;
    }

    .atulya-btn-primary {
        background: #172965;
        color: #fff;
        box-shadow: 0 10px 25px rgba(23, 41, 101, .18);
    }

    .atulya-btn-primary:hover {
        background: #1c6fd1;
        color: #fff;
        transform: translateY(-2px);
    }

    .atulya-btn-outline {
        border: 1px solid #d5dfec;
        background: #fff;
        color: #172965;
    }

    .atulya-btn-outline:hover {
        border-color: #1c6fd1;
        color: #1c6fd1;
        transform: translateY(-2px);
    }

    .atulya-hero-points {
        display: flex;
        flex-wrap: wrap;
        gap: 22px;
    }

    .atulya-hero-point {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #3e4b65;
        font-size: 14px;
        font-weight: 600;
    }

    .atulya-hero-point i {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: #e4f1ff;
        color: #1c6fd1;
        font-size: 12px;
    }

    .atulya-hero-image {
        position: relative;
    }

    .atulya-hero-image img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        border-radius: 18px;
        box-shadow: 0 25px 60px rgba(23, 41, 101, .15);
    }

    .atulya-hero-badge {
        position: absolute;
        left: -25px;
        bottom: 30px;
        display: flex;
        align-items: center;
        gap: 13px;
        padding: 16px 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 15px 40px rgba(23, 41, 101, .15);
    }

    .atulya-hero-badge-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border-radius: 9px;
        background: #e8f3ff;
        color: #1c6fd1;
        font-size: 19px;
    }

    .atulya-hero-badge strong {
        display: block;
        margin-bottom: 2px;
        color: #172965;
        font-size: 16px;
    }

    .atulya-hero-badge span {
        color: #7a8498;
        font-size: 12px;
    }

    /* ABOUT */

    .atulya-about-grid {
        display: grid;
        grid-template-columns: .9fr 1.1fr;
        gap: 65px;
        align-items: center;
    }

    .atulya-about-image {
        position: relative;
    }

    .atulya-about-image img {
        width: 100%;
        height: 530px;
        object-fit: cover;
        border-radius: 16px;
    }

    .atulya-content .atulya-kicker {
        margin-bottom: 12px;
    }

    .atulya-content h2 {
        margin: 0 0 18px;
        color: #172965;
        font-size: clamp(30px, 4vw, 45px);
        line-height: 1.15;
    }

    .atulya-content > p {
        margin: 0 0 18px;
        color: #68738a;
        font-size: 15px;
        line-height: 1.85;
    }

    .atulya-check-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px 25px;
        margin-top: 28px;
    }

    .atulya-check {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        color: #3d4961;
        font-size: 14px;
        font-weight: 600;
    }

    .atulya-check i {
        flex: 0 0 auto;
        margin-top: 2px;
        color: #1c6fd1;
    }

    /* VISION MISSION */

    .atulya-purpose {
        background: #172965;
    }

    .atulya-purpose .atulya-section-head h2,
    .atulya-purpose .atulya-section-head p {
        color: #fff;
    }

    .atulya-purpose .atulya-kicker {
        color: #8fc7ff;
    }

    .atulya-purpose .atulya-kicker::before {
        background: #8fc7ff;
    }

    .atulya-purpose-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 22px;
    }

    .atulya-purpose-card {
        position: relative;
        padding: 35px;
        border: 1px solid rgba(255,255,255,.1);
        border-radius: 13px;
        background: rgba(255,255,255,.055);
        overflow: hidden;
    }

    .atulya-purpose-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        margin-bottom: 22px;
        border-radius: 10px;
        background: #fff;
        color: #1c6fd1;
        font-size: 20px;
    }

    .atulya-purpose-card h3 {
        margin: 0 0 12px;
        color: #fff;
        font-size: 25px;
    }

    .atulya-purpose-card p {
        position: relative;
        z-index: 1;
        margin: 0;
        color: rgba(255,255,255,.72);
        font-size: 14px;
        line-height: 1.8;
    }

    /* WHY */

    .atulya-why-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .atulya-why-card {
        padding: 28px;
        border: 1px solid #e4eaf2;
        border-radius: 12px;
        background: #fff;
        transition: .25s ease;
    }

    .atulya-why-card:hover {
        transform: translateY(-5px);
        border-color: #cddff2;
        box-shadow: 0 18px 40px rgba(23,41,101,.08);
    }

    .atulya-why-number {
        margin-bottom: 22px;
        color: #dceaf8;
        font-size: 30px;
        font-weight: 800;
    }

    .atulya-why-card h3 {
        margin: 0 0 10px;
        color: #172965;
        font-size: 19px;
    }

    .atulya-why-card p {
        margin: 0;
        color: #737e92;
        font-size: 14px;
        line-height: 1.75;
    }

    /* INFRASTRUCTURE */

    .atulya-infra {
        background: #f0f5fa;
    }

    .atulya-infra-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .atulya-infra-card {
        overflow: hidden;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 8px 25px rgba(23,41,101,.06);
    }

    .atulya-infra-image {
        height: 225px;
        overflow: hidden;
    }

    .atulya-infra-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .4s ease;
    }

    .atulya-infra-card:hover img {
        transform: scale(1.05);
    }

    .atulya-infra-content {
        padding: 21px 22px 23px;
    }

    .atulya-infra-content h3 {
        margin: 0 0 7px;
        color: #172965;
        font-size: 19px;
    }

    .atulya-infra-content p {
        margin: 0;
        color: #737e92;
        font-size: 13px;
        line-height: 1.7;
    }

    /* QUALITY */

    .atulya-quality {
        background: #fff;
    }

    .atulya-quality-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .atulya-quality-image {
        position: relative;
    }

    .atulya-quality-image img {
        width: 100%;
        height: 460px;
        object-fit: cover;
        border-radius: 16px;
    }

    .atulya-quality-content h2 {
        margin: 0 0 17px;
        color: #172965;
        font-size: clamp(30px, 4vw, 44px);
        line-height: 1.15;
    }

    .atulya-quality-content > p {
        margin: 0 0 24px;
        color: #68738a;
        font-size: 15px;
        line-height: 1.8;
    }

    .atulya-quality-list {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }

    .atulya-quality-item {
        display: flex;
        align-items: center;
        gap: 11px;
        padding: 13px 14px;
        border: 1px solid #e5ebf2;
        border-radius: 8px;
        color: #354159;
        font-size: 13px;
        font-weight: 600;
    }

    .atulya-quality-item i {
        color: #1c6fd1;
    }

    .atulya-trust {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-top: 25px;
        padding-top: 22px;
        border-top: 1px solid #e7ebf1;
    }

    .atulya-trust-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: #eaf4ff;
        color: #1c6fd1;
    }

    .atulya-trust strong {
        display: block;
        margin-bottom: 3px;
        color: #172965;
        font-size: 14px;
    }

    .atulya-trust span {
        color: #7b8597;
        font-size: 12px;
    }

    /* CTA */

    .atulya-cta {
        padding: 55px 0;
        background: #eef5fc;
    }

    .atulya-cta-box {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 30px;
        padding: 35px 40px;
        border-radius: 14px;
        background: #172965;
    }

    .atulya-cta-box h3 {
        margin: 0 0 7px;
        color: #fff;
        font-size: 27px;
    }

    .atulya-cta-box p {
        margin: 0;
        color: rgba(255,255,255,.7);
        font-size: 14px;
    }

    .atulya-cta-box .atulya-btn {
        flex: 0 0 auto;
        background: #fff;
        color: #172965;
    }

    .atulya-cta-box .atulya-btn:hover {
        background: #1c6fd1;
        color: #fff;
    }

    /* RESPONSIVE */

    @media (max-width: 991px) {
        .atulya-section {
            padding: 65px 0;
        }

        .atulya-hero-grid,
        .atulya-about-grid,
        .atulya-quality-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .atulya-hero-image img {
            height: 430px;
        }

        .atulya-about-image img,
        .atulya-quality-image img {
            height: 420px;
        }

        .atulya-hero-badge {
            left: 20px;
        }

        .atulya-why-grid,
        .atulya-infra-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 767px) {
        .atulya-section {
            padding: 50px 0;
        }

        .atulya-about-hero {
            padding: 55px 0;
        }

        .atulya-hero-content h1 {
            font-size: 40px;
        }

        .atulya-hero-content > p {
            font-size: 15px;
        }

        .atulya-hero-image img {
            height: 340px;
        }

        .atulya-about-image img,
        .atulya-quality-image img {
            height: 350px;
        }

        .atulya-purpose-grid,
        .atulya-why-grid,
        .atulya-infra-grid,
        .atulya-check-grid,
        .atulya-quality-list {
            grid-template-columns: 1fr;
        }

        .atulya-purpose-card {
            padding: 27px;
        }

        .atulya-cta-box {
            align-items: flex-start;
            flex-direction: column;
            padding: 28px;
        }

        .atulya-experience-box {
            right: 15px;
        }
    }

    @media (max-width: 480px) {
        .atulya-container {
            width: min(100% - 22px, 1180px);
        }

        .atulya-hero-content h1 {
            font-size: 34px;
        }

        .atulya-hero-actions {
            flex-direction: column;
        }

        .atulya-btn {
            width: 100%;
        }

        .atulya-hero-points {
            flex-direction: column;
            gap: 12px;
        }

        .atulya-hero-image img {
            height: 290px;
        }

        .atulya-about-image img,
        .atulya-quality-image img {
            height: 300px;
        }

        .atulya-hero-badge {
            position: relative;
            left: 0;
            bottom: auto;
            margin-top: 12px;
        }
    }
</style>


<div class="atulya-about">

    {{-- =========================
         HERO
    ========================= --}}
    <section class="atulya-about-hero">

        <div class="atulya-container">

            <div class="atulya-hero-grid">

                <div class="atulya-hero-content">

                    <div class="atulya-kicker">
                        About Atulya
                    </div>

                    <h1>
                        About Atulya Super Speciality
                        <span>Hospital & ICU</span>
                    </h1>

                    <p>
                        Atulya Super Speciality Hospital & ICU is committed
                        to delivering dependable healthcare through experienced
                        specialists, critical care services, modern
                        infrastructure and a patient-first approach.
                    </p>

                    <div class="atulya-hero-actions">

                        <a href="{{ url('/doctors') }}"
                           class="atulya-btn atulya-btn-primary">
                            Meet Our Doctors
                            <i class="far fa-arrow-right"></i>
                        </a>

                        <a href="tel:+919727579000"
                           class="atulya-btn atulya-btn-outline">
                            <i class="far fa-phone-alt"></i>
                            +91 97275 79000
                        </a>

                    </div>

                    <div class="atulya-hero-points">

                        <div class="atulya-hero-point">
                            <i class="far fa-check"></i>
                            Specialist Care
                        </div>

                        <div class="atulya-hero-point">
                            <i class="far fa-check"></i>
                            24×7 Critical Care
                        </div>

                        <div class="atulya-hero-point">
                            <i class="far fa-check"></i>
                            Patient First
                        </div>

                    </div>

                </div>


                <div class="atulya-hero-image">

                    <img
                        src="{{ asset('assets/img/home-1/service/serviceimg.png') }}"
                        alt="Atulya Super Speciality Hospital & ICU in Ahmedabad"
                    >

                    <div class="atulya-hero-badge">

                        <div class="atulya-hero-badge-icon">
                            <i class="far fa-hospital"></i>
                        </div>

                        <div>
                            <strong>Atulya Hospital</strong>
                            <span>Super Speciality Hospital & ICU</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         ABOUT HOSPITAL
    ========================= --}}
    <section class="atulya-section">

        <div class="atulya-container">

            <div class="atulya-about-grid">

                <div class="atulya-about-image">

                    <img
                        src="{{ asset('assets/img/inner/contact/contact-img.jpg') }}"
                        alt="About Atulya Super Speciality Hospital Ahmedabad"
                    >

                </div>


                <div class="atulya-content">

                    <div class="atulya-kicker">
                        About Hospital
                    </div>

                    <h2>
                        A Healthcare Environment
                        Built Around Patients
                    </h2>

                    <p>
                        Atulya Super Speciality Hospital & ICU provides
                        comprehensive medical care with an emphasis on
                        clinical expertise, patient safety and compassionate
                        service.
                    </p>

                    <p>
                        Our hospital brings together specialist doctors,
                        emergency services, critical care, surgical
                        infrastructure and diagnostic support to provide
                        patients with a dependable healthcare experience
                        under one roof.
                    </p>

                    <div class="atulya-check-grid">

                        <div class="atulya-check">
                            <i class="far fa-check-circle"></i>
                            Experienced specialist doctors
                        </div>

                        <div class="atulya-check">
                            <i class="far fa-check-circle"></i>
                            24×7 emergency support
                        </div>

                        <div class="atulya-check">
                            <i class="far fa-check-circle"></i>
                            Critical care facilities
                        </div>

                        <div class="atulya-check">
                            <i class="far fa-check-circle"></i>
                            Modern surgical infrastructure
                        </div>

                        <div class="atulya-check">
                            <i class="far fa-check-circle"></i>
                            Diagnostic support
                        </div>

                        <div class="atulya-check">
                            <i class="far fa-check-circle"></i>
                            Patient-focused approach
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         OUR APPROACH
    ========================= --}}
    <section class="atulya-section">

        <div class="atulya-container">

            <div class="atulya-section-head">

                <div class="atulya-kicker">
                    Our Approach
                </div>

                <h2>
                    Care That Puts Patients First
                </h2>

                <p>
                    Atulya Super Speciality Hospital & ICU focuses on
                    patient-centred healthcare through clear communication,
                    timely access to medical services and coordinated care.
                </p>

            </div>


            <div class="atulya-why-grid">

                <div class="atulya-why-card">
                    <div class="atulya-why-number">01</div>

                    <h3>Patient-Centred Care</h3>

                    <p>
                        Care is planned around the patient's medical needs,
                        comfort and overall healthcare journey.
                    </p>
                </div>


                <div class="atulya-why-card">
                    <div class="atulya-why-number">02</div>

                    <h3>Clear Communication</h3>

                    <p>
                        We value clear communication with patients and
                        families throughout the care process.
                    </p>
                </div>


                <div class="atulya-why-card">
                    <div class="atulya-why-number">03</div>

                    <h3>Timely Access</h3>

                    <p>
                        Emergency, critical care and specialist services
                        support timely access to appropriate medical care.
                    </p>
                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         VISION & MISSION
    ========================= --}}
    <section class="atulya-section atulya-purpose">

        <div class="atulya-container">

            <div class="atulya-section-head">

                <div class="atulya-kicker">
                    Vision & Mission
                </div>

                <h2>
                    Our Purpose
                </h2>

                <p>
                    Our direction is guided by quality healthcare,
                    compassion, patient safety and continuous improvement.
                </p>

            </div>


            <div class="atulya-purpose-grid">

                {{-- Vision --}}
                <div class="atulya-purpose-card">

                    <div class="atulya-purpose-icon">
                        <i class="far fa-eye"></i>
                    </div>

                    <h3>
                        Our Vision
                    </h3>

                    <p>
                        To build trust through quality healthcare,
                        compassionate service, patient safety and
                        continuous improvement.
                    </p>

                </div>


                {{-- Mission --}}
                <div class="atulya-purpose-card">

                    <div class="atulya-purpose-icon">
                        <i class="far fa-bullseye"></i>
                    </div>

                    <h3>
                        Our Mission
                    </h3>

                    <p>
                        To deliver patient-focused care supported by
                        qualified professionals, appropriate infrastructure
                        and coordinated clinical services.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         VALUES
    ========================= --}}
    <section class="atulya-section">

        <div class="atulya-container">

            <div class="atulya-section-head">

                <div class="atulya-kicker">
                    Our Values
                </div>

                <h2>
                    Principles That Guide Our Care
                </h2>

                <p>
                    Our approach to healthcare is built around values that
                    support respectful, responsible and patient-focused care.
                </p>

            </div>


            <div class="atulya-check-grid">

                <div class="atulya-check">
                    <i class="far fa-check-circle"></i>
                    Compassion
                </div>

                <div class="atulya-check">
                    <i class="far fa-check-circle"></i>
                    Integrity
                </div>

                <div class="atulya-check">
                    <i class="far fa-check-circle"></i>
                    Patient Safety
                </div>

                <div class="atulya-check">
                    <i class="far fa-check-circle"></i>
                    Clinical Excellence
                </div>

                <div class="atulya-check">
                    <i class="far fa-check-circle"></i>
                    Respect
                </div>

                <div class="atulya-check">
                    <i class="far fa-check-circle"></i>
                    Teamwork
                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         WHY ATULYA
    ========================= --}}
    <section class="atulya-section">

        <div class="atulya-container">

            <div class="atulya-section-head">

                <div class="atulya-kicker">
                    Why Atulya
                </div>

                <h2>
                    Healthcare Support You Can Rely On
                </h2>

                <p>
                    Atulya brings together specialist medical care,
                    emergency support, critical care and hospital
                    infrastructure to support different healthcare needs.
                </p>

            </div>


            <div class="atulya-why-grid">

                <div class="atulya-why-card">
                    <div class="atulya-why-number">01</div>

                    <h3>Experienced Medical Team</h3>

                    <p>
                        Care is supported by qualified medical professionals
                        across multiple specialities.
                    </p>
                </div>


                <div class="atulya-why-card">
                    <div class="atulya-why-number">02</div>

                    <h3>24/7 Emergency Care</h3>

                    <p>
                        Emergency support is available around the clock
                        for urgent healthcare requirements.
                    </p>
                </div>


                <div class="atulya-why-card">
                    <div class="atulya-why-number">03</div>

                    <h3>ICU & Critical Care</h3>

                    <p>
                        Critical care services support patients requiring
                        close monitoring and specialised medical attention.
                    </p>
                </div>


                <div class="atulya-why-card">
                    <div class="atulya-why-number">04</div>

                    <h3>Multispeciality Services</h3>

                    <p>
                        Multiple clinical departments provide access to
                        different areas of specialist healthcare.
                    </p>
                </div>


                <div class="atulya-why-card">
                    <div class="atulya-why-number">05</div>

                    <h3>Modern Clinical Infrastructure</h3>

                    <p>
                        Hospital infrastructure includes critical care,
                        surgical and diagnostic facilities.
                    </p>
                </div>


                <div class="atulya-why-card">
                    <div class="atulya-why-number">06</div>

                    <h3>Patient-Centred Care</h3>

                    <p>
                        Our approach focuses on respectful communication,
                        coordinated services and patient needs.
                    </p>
                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         INFRASTRUCTURE
    ========================= --}}
    <section class="atulya-section atulya-infra">

        <div class="atulya-container">

            <div class="atulya-section-head">

                <div class="atulya-kicker">
                    Infrastructure
                </div>

                <h2>
                    Hospital Facilities
                </h2>

                <p>
                    Our hospital infrastructure supports emergency care,
                    critical care, surgical procedures and diagnostic needs.
                </p>

            </div>


            <div class="atulya-infra-grid">

                <div class="atulya-infra-card">

                    <div class="atulya-infra-image">
                        <img
                            src="{{ asset('assets/img/inner/facilities/25-beds.jpg') }}"
                            alt="25-Bed Hospital Facility at Atulya Hospital Ahmedabad"
                        >
                    </div>

                    <div class="atulya-infra-content">
                        <h3>25-Bed Hospital Facility</h3>

                        <p>
                            Hospital beds supporting inpatient healthcare
                            and patient care requirements.
                        </p>
                    </div>

                </div>


                <div class="atulya-infra-card">

                    <div class="atulya-infra-image">
                        <img
                            src="{{ asset('assets/img/inner/facilities/modular-ot.jpg') }}"
                            alt="Modular Operation Theatre at Atulya Hospital Ahmedabad"
                        >
                    </div>

                    <div class="atulya-infra-content">
                        <h3>Modular Operation Theatre</h3>

                        <p>
                            Surgical infrastructure designed to support
                            operative procedures.
                        </p>
                    </div>

                </div>


                <div class="atulya-infra-card">

                    <div class="atulya-infra-image">
                        <img
                            src="{{ asset('assets/img/inner/facilities/icu.jpg') }}"
                            alt="Critical Care ICU at Atulya Hospital Ahmedabad"
                        >
                    </div>

                    <div class="atulya-infra-content">
                        <h3>ICU & Critical Care</h3>

                        <p>
                            Critical care infrastructure for patients
                            requiring close medical monitoring.
                        </p>
                    </div>

                </div>


                <div class="atulya-infra-card">

                    <div class="atulya-infra-image">
                        <img
                            src="{{ asset('assets/img/inner/facilities/emergency.jpg') }}"
                            alt="24x7 Emergency Facility at Atulya Hospital Ahmedabad"
                        >
                    </div>

                    <div class="atulya-infra-content">
                        <h3>Emergency Care</h3>

                        <p>
                            Emergency facilities supporting urgent
                            medical care requirements.
                        </p>
                    </div>

                </div>


                <div class="atulya-infra-card">

                    <div class="atulya-infra-image">
                        <img
                            src="{{ asset('assets/img/inner/facilities/lab-pharmacy.jpg') }}"
                            alt="Laboratory and Pharmacy Facility at Atulya Hospital Ahmedabad"
                        >
                    </div>

                    <div class="atulya-infra-content">
                        <h3>Laboratory & Pharmacy</h3>

                        <p>
                            Diagnostic laboratory and pharmacy support
                            for patient care.
                        </p>
                    </div>

                </div>


                <div class="atulya-infra-card">

                    <div class="atulya-infra-image">
                        <img
                            src="{{ asset('assets/img/inner/facilities/xray.jpg') }}"
                            alt="X-Ray Diagnostic Facility at Atulya Hospital Ahmedabad"
                        >
                    </div>

                    <div class="atulya-infra-content">
                        <h3>X-Ray & Diagnostics</h3>

                        <p>
                            Diagnostic support for medical evaluation
                            and treatment planning.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         QUALITY
    ========================= --}}
    <section class="atulya-section atulya-quality">

        <div class="atulya-container">

            <div class="atulya-quality-grid">

                <div class="atulya-quality-image">

                    <img
                        src="{{ asset('assets/img/inner/service-details/11.png') }}"
                        alt="Quality Healthcare Infrastructure at Atulya Super Speciality Hospital"
                    >

                </div>


                <div class="atulya-quality-content">

                    <div class="atulya-kicker">
                        Quality & Care
                    </div>

                    <h2>
                        Focused on Safe & Responsible Healthcare
                    </h2>

                    <p>
                        Atulya Super Speciality Hospital & ICU is committed
                        to providing healthcare through clinical expertise,
                        appropriate infrastructure, coordinated services
                        and a patient-first approach.
                    </p>


                    <div class="atulya-quality-list">

                        <div class="atulya-quality-item">
                            <i class="far fa-check-circle"></i>
                            Patient Safety
                        </div>

                        <div class="atulya-quality-item">
                            <i class="far fa-check-circle"></i>
                            Clinical Care
                        </div>

                        <div class="atulya-quality-item">
                            <i class="far fa-check-circle"></i>
                            Coordinated Services
                        </div>

                        <div class="atulya-quality-item">
                            <i class="far fa-check-circle"></i>
                            Appropriate Infrastructure
                        </div>

                    </div>


                    <div class="atulya-trust">

                        <div class="atulya-trust-icon">
                            <i class="far fa-shield-check"></i>
                        </div>

                        <div>

                            <strong>
                                Patient-Focused Approach
                            </strong>

                            <span>
                                Care designed around patient needs and
                                healthcare requirements.
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         FINAL CTA
    ========================= --}}
    <section class="atulya-cta">

        <div class="atulya-container">

            <div class="atulya-cta-box">

                <div>

                    <h3>
                        Need Medical Assistance?
                    </h3>

                    <p>
                        Contact Atulya Super Speciality Hospital & ICU
                        for appointments and healthcare assistance.
                    </p>

                </div>


                <a
                    href="tel:+919727579000"
                    class="atulya-btn"
                >
                    <i class="far fa-phone-alt"></i>
                    Call Hospital
                </a>

            </div>

        </div>

    </section>

</div>


@endsection