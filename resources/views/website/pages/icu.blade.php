@extends('website.layout.app')

@section('title', 'ICU & Emergency')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/icu-emergency.css') }}">

<section class="icu-emergency-section">

    <div class="container">

        {{-- =========================
            PAGE INTRO
        ========================== --}}
        <div class="icu-intro text-center">

            <span class="icu-badge">
                24×7 CRITICAL CARE
            </span>

            <h1>
                ICU & Emergency
            </h1>

            <p>
                Our dedicated ICU & Emergency services provide
                round-the-clock critical care and emergency support
                for patients requiring immediate medical attention,
                intensive monitoring and specialized care.
            </p>

        </div>


        {{-- =========================
            MAIN IMAGE
        ========================== --}}
        <div class="icu-main-image">

            <img
                src="{{ asset('assets/img/inner/facilities/emergency.jpg') }}"
                alt="ICU & Emergency"
            >

        </div>


        {{-- =========================
            SERVICES HEADING
        ========================== --}}
        <div class="icu-services-heading text-center">

            <span class="icu-badge">
                OUR SERVICES
            </span>

            <h2>
                Comprehensive Emergency & Critical Care
            </h2>

            <p>
                We are equipped to handle medical emergencies and critical
                conditions with advanced facilities and an experienced
                medical team.
            </p>

        </div>


        {{-- =========================
            SERVICE CARDS
        ========================== --}}
        <div class="row g-4">


            {{-- Emergency --}}
            <div class="col-lg-6">

                <div class="icu-service-card h-100">

                    <div class="icu-card-header">

                        <div class="icu-card-icon emergency-icon">
                            <i class="fas fa-ambulance"></i>
                        </div>

                        <div>
                            <span class="icu-small-title">
                                EMERGENCY CARE
                            </span>

                            <h3>
                                24×7 Emergency Services
                            </h3>
                        </div>

                    </div>

                    <p>
                        Our emergency department is available 24×7 to
                        provide prompt medical assessment and immediate
                        support during urgent and emergency situations.
                        Our medical team focuses on timely evaluation,
                        stabilization and appropriate treatment.
                    </p>

                    <div class="icu-points">

                        <div>
                            <i class="far fa-check"></i>
                            24×7 Emergency Services
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            Critical Emergency Care
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            Immediate Medical Assistance
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            Continuous Medical Support
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            Emergency Patient Assessment
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            Ambulance Support
                        </div>

                    </div>

                </div>

            </div>


            {{-- Critical Care --}}
            <div class="col-lg-6">

                <div class="icu-service-card h-100">

                    <div class="icu-card-header">

                        <div class="icu-card-icon critical-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>

                        <div>
                            <span class="icu-small-title">
                                INTENSIVE CARE
                            </span>

                            <h3>
                                Advanced Critical Care
                            </h3>
                        </div>

                    </div>

                    <p>
                        Our critical care unit provides dedicated medical
                        support for patients requiring continuous observation,
                        intensive monitoring and specialized treatment.
                        The ICU is supported by critical care physicians,
                        trained nursing staff and essential medical infrastructure.
                    </p>

                    <div class="icu-points">

                        <div>
                            <i class="far fa-check"></i>
                            6-Bed Intensive Care Unit
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            Critical Care Physicians
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            24×7 Critical Care
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            Dedicated Nursing Support
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            Continuous Patient Monitoring
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            Intensive Medical Supervision
                        </div>

                    </div>

                </div>

            </div>


            {{-- Dialysis --}}
            <div class="col-lg-6">

                <div class="icu-service-card h-100">

                    <div class="icu-card-header">

                        <div class="icu-card-icon dialysis-icon">
                            <i class="fas fa-procedures"></i>
                        </div>

                        <div>
                            <span class="icu-small-title">
                                SPECIALIZED SUPPORT
                            </span>

                            <h3>
                                ICU With Dialysis Support
                            </h3>
                        </div>

                    </div>

                    <p>
                        Dialysis support is available for patients who
                        require renal care while undergoing intensive
                        treatment. This helps provide critical and renal
                        care within the hospital when clinically required.
                    </p>

                    <div class="icu-points">

                        <div>
                            <i class="far fa-check"></i>
                            Dialysis Support
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            Renal Care Assistance
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            ICU Patient Support
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            Continuous Monitoring
                        </div>

                    </div>

                </div>

            </div>


            {{-- Oxygen --}}
            <div class="col-lg-6">

                <div class="icu-service-card h-100">

                    <div class="icu-card-header">

                        <div class="icu-card-icon oxygen-icon">
                            <i class="fas fa-lungs"></i>
                        </div>

                        <div>
                            <span class="icu-small-title">
                                HOSPITAL FACILITY
                            </span>

                            <h3>
                                Central Oxygen Facility
                            </h3>
                        </div>

                    </div>

                    <p>
                        The hospital is supported by a centralized oxygen
                        supply system to provide dependable oxygen availability
                        for patients requiring respiratory support across
                        emergency, ICU and inpatient care.
                    </p>

                    <div class="icu-points">

                        <div>
                            <i class="far fa-check"></i>
                            Centralized Oxygen Supply
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            Emergency Respiratory Support
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            ICU Oxygen Availability
                        </div>

                        <div>
                            <i class="far fa-check"></i>
                            Inpatient Support
                        </div>

                    </div>

                </div>

            </div>


            {{-- Ambulance --}}
            <div class="col-12">

                <div class="icu-service-card icu-wide-card">

                    <div class="icu-card-header">

                        <div class="icu-card-icon ambulance-icon">
                            <i class="fas fa-ambulance"></i>
                        </div>

                        <div>
                            <span class="icu-small-title">
                                24×7 TRANSPORT SUPPORT
                            </span>

                            <h3>
                                24×7 Ambulance Services
                            </h3>
                        </div>

                    </div>

                    <p>
                        Ambulance support is available for emergency
                        transportation and timely patient transfer.
                        Patients and family members can contact the hospital
                        directly whenever urgent medical transportation
                        assistance is required.
                    </p>

                </div>

            </div>

        </div>


        {{-- =========================
            EMERGENCY CTA
        ========================== --}}
        <div class="icu-emergency-cta">

            <div class="icu-cta-icon">
                <i class="fas fa-phone-alt"></i>
            </div>

            <div class="icu-cta-content">

                <span class="icu-small-title">
                    EMERGENCY SUPPORT
                </span>

                <h2>
                    Need Emergency Assistance?
                </h2>

                <p>
                    For emergency medical assistance, ICU enquiries
                    or ambulance support, contact Atulya Super
                    Speciality Hospital & ICU.
                </p>

            </div>

            <div class="icu-cta-action">

                <a
                    href="tel:+919727579000"
                    class="theme-btn"
                >
                    <i class="fas fa-phone-alt"></i>
                    +91 97275 79000
                </a>

                <span>
                    AVAILABLE 24×7
                </span>

            </div>

        </div>

    </div>

</section>

@endsection