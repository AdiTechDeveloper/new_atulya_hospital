@extends('website.layout.app')

@section('title', 'About Atulya Super Speciality Hospital & ICU | Ahmedabad')

@section('meta_description', 'Learn about Atulya Super Speciality Hospital & ICU in Ahmedabad, our specialist healthcare services, 24×7 emergency and critical care, modern infrastructure and patient-focused approach.')

@section('content')



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

                        <a href="{{ setting('phone') }}"
                           class="atulya-btn atulya-btn-outline">
                            <i class="far fa-phone-alt"></i>
                           {{ setting('phone') }}
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
                            <strong>{{ setting('hospital_name') }}</strong>
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
                            alt="25-Bed Hospital Facility at {{ setting('hospital_name') }} Ahmedabad"
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
                            alt="Modular Operation Theatre at {{ setting('hospital_name') }} Ahmedabad"
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
                            alt="Critical Care ICU at {{ setting('hospital_name') }} Ahmedabad"
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
                            alt="24x7 Emergency Facility at{{ setting('hospital_name') }} Ahmedabad"
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
                            alt="Laboratory and Pharmacy Facility at {{ setting('hospital_name') }} Ahmedabad"
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
                            alt="X-Ray Diagnostic Facility at {{ setting('hospital_name') }} Ahmedabad"
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
                    href="{{ setting('phone') }}"
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