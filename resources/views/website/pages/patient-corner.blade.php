@extends('website.layout.app')

@section('title', 'Patient Corner')

@section('content')

    {{-- Page Banner --}}
    @include('website.partials.page-banner', [
        'title' => 'Patient Corner',
        'breadcrumb' => 'Patient Corner'
    ])


    {{-- Patient Corner Intro --}}
    <section class="patient-corner-section section-padding fix">

        <div class="container">

            <div class="patient-corner-intro text-center">

                <span class="section-subtitle">
                    PATIENT CORNER
                </span>

                <h2>
                    Everything You Need For Your
                    <span>Healthcare Journey</span>
                </h2>

                <p>
                    At Atulya Super Speciality Hospital, we are committed to
                    making your healthcare experience simple, comfortable and
                    well informed. Explore useful information and services
                    designed especially for our patients and their families.
                </p>

            </div>


            {{-- Patient Options --}}
            <div class="row g-4 mt-4">

                {{-- Appointment --}}
                <div class="col-xl-4 col-md-6">

                    <div class="patient-corner-card">

                        <div class="patient-corner-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>

                        <div class="patient-corner-content">

                            <h3>
                                Book An Appointment
                            </h3>

                            <p>
                                Schedule your consultation with our doctors
                                at a convenient date and time.
                            </p>

                            <a href="{{route('appointment')}}" class="patient-corner-link">
                                Book Appointment
                                <i class="fas fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>


                {{-- Doctors --}}
                <div class="col-xl-4 col-md-6">

                    <div class="patient-corner-card">

                        <div class="patient-corner-icon">
                            <i class="fas fa-user-md"></i>
                        </div>

                        <div class="patient-corner-content">

                            <h3>
                                Find A Doctor
                            </h3>

                            <p>
                                Explore our team of experienced doctors and
                                specialists across different departments.
                            </p>

                            <a href="{{route('doctors.index')}}" class="patient-corner-link">
                                View Doctors
                                <i class="fas fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>


                {{-- Departments --}}
                <div class="col-xl-4 col-md-6">

                    <div class="patient-corner-card">

                        <div class="patient-corner-icon">
                            <i class="fas fa-hospital"></i>
                        </div>

                        <div class="patient-corner-content">

                            <h3>
                                Our Departments
                            </h3>

                            <p>
                                Learn more about our medical departments and
                                the specialised healthcare services available.
                            </p>

                            <a  href="{{route('departments.show')}}" class="patient-corner-link">
                                View Departments
                                <i class="fas fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>


                {{-- Facilities --}}
                <div class="col-xl-4 col-md-6">

                    <div class="patient-corner-card">

                        <div class="patient-corner-icon">
                            <i class="fas fa-procedures"></i>
                        </div>

                        <div class="patient-corner-content">

                            <h3>
                                Hospital Facilities
                            </h3>

                            <p>
                                Discover the facilities and services available
                                to support patients during their hospital stay.
                            </p>

                            <a href="{{route('facilities.show')}}" class="patient-corner-link">
                                View Facilities
                                <i class="fas fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>


                {{-- Contact --}}
                <div class="col-xl-4 col-md-6">

                    <div class="patient-corner-card">

                        <div class="patient-corner-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>

                        <div class="patient-corner-content">

                            <h3>
                                Contact Hospital
                            </h3>

                            <p>
                                Get in touch with our hospital team for any
                                assistance or general enquiries.
                            </p>

                            <a href="{{route('contact')}}" class="patient-corner-link">
                                Contact Us
                                <i class="fas fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>


                {{-- Patient Information --}}
                <div class="col-xl-4 col-md-6">

                    <div class="patient-corner-card">

                        <div class="patient-corner-icon">
                            <i class="fas fa-info-circle"></i>
                        </div>

                        <div class="patient-corner-content">

                            <h3>
                                Patient Information
                            </h3>

                            <p>
                                Important information and helpful resources
                                for patients and their attendants.
                            </p>

                            <a href="{{route('home')}}" class="patient-corner-link">
                                Explore Information
                                <i class="fas fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- Patient Care Information --}}
    <section class="patient-care-section section-padding pt-0">

        <div class="container">

            <div class="patient-care-box">

                <div class="row align-items-center g-4">

                    <div class="col-lg-7">

                        <span class="section-subtitle">
                            PATIENT CARE
                        </span>

                        <h2>
                            Your Comfort And Care
                            <span>Come First</span>
                        </h2>

                        <p>
                            We believe that quality healthcare goes beyond
                            medical treatment. Our team is committed to
                            providing patients and their families with a
                            supportive and comfortable healthcare experience.
                        </p>

                        <p class="mb-0">
                            More patient-focused services and useful resources
                            will be available here soon.
                        </p>

                    </div>

                    <div class="col-lg-5">

                        <div class="patient-care-highlight">

                            <div class="patient-care-highlight-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>

                            <h3>
                                Compassionate Healthcare
                            </h3>

                            <p>
                                Trusted care with a patient-first approach.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- Appointment CTA --}}
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


@endsection


@push('styles')

<style>

    .patient-corner-section {
        background: #ffffff;
    }

    .patient-corner-intro {
        max-width: 850px;
        margin: 0 auto;
    }

    .patient-corner-intro .section-subtitle,
    .patient-care-box .section-subtitle,
    .patient-corner-cta .section-subtitle {
        display: inline-block;
        color: #08c7bd;
        font-size: 18px;
        font-weight: 700;
        letter-spacing: 2px;
        margin-bottom: 14px;
    }

    .patient-corner-intro h2,
    .patient-care-box h2,
    .patient-corner-cta h2 {
        color: #172965;
        font-size: clamp(32px, 4vw, 48px);
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 20px;
    }

    .patient-corner-intro h2 span,
    .patient-care-box h2 span {
        color: #1c6fd1;
    }

    .patient-corner-intro p,
    .patient-care-box p,
    .patient-corner-cta p {
        color: #666666;
        font-size: 18px;
        line-height: 1.8;
        margin-bottom: 0;
    }


    /* Patient Cards */

    .patient-corner-card {
        height: 100%;
        background: #ffffff;
        border: 1px solid #e6eef5;
        border-radius: 16px;
        padding: 32px;
        transition: all 0.3s ease;
        box-shadow: 0 8px 30px rgba(23, 41, 101, 0.05);
    }

    .patient-corner-card:hover {
        transform: translateY(-7px);
        border-color: #08c7bd;
        box-shadow: 0 15px 40px rgba(23, 41, 101, 0.10);
    }

    .patient-corner-icon {
        width: 68px;
        height: 68px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eefafa;
        color: #08aaa3;
        border-radius: 14px;
        font-size: 26px;
        margin-bottom: 24px;
    }

    .patient-corner-content h3 {
        color: #172965;
        font-size: 24px;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 12px;
    }

    .patient-corner-content p {
        color: #666666;
        font-size: 18px;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .patient-corner-link {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        color: #1c6fd1;
        font-size: 18px;
        font-weight: 700;
        transition: all 0.3s ease;
    }

    .patient-corner-link:hover {
        color: #08aaa3;
        gap: 13px;
    }


    /* Patient Care */

    .patient-care-box {
        background: #f5fbfc;
        border-radius: 20px;
        padding: 55px;
    }

    .patient-care-highlight {
        background: #172965;
        border-radius: 18px;
        padding: 40px;
        text-align: center;
        color: #ffffff;
    }

    .patient-care-highlight-icon {
        width: 72px;
        height: 72px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.12);
        color: #08c7bd;
        font-size: 30px;
    }

    .patient-care-highlight h3 {
        color: #ffffff;
        font-size: 25px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .patient-care-highlight p {
        color: #ffffff;
        opacity: 0.85;
        font-size: 18px;
        line-height: 1.6;
    }


    /* CTA */

    .patient-corner-cta {
        background: #f7fbfc;
    }

    .patient-corner-cta-inner {
        max-width: 850px;
        margin: 0 auto;
    }

    .patient-corner-cta h2 {
        margin-bottom: 15px;
    }

    .patient-corner-cta .theme-btn {
        margin-top: 28px;
    }


    /* Responsive */

    @media (max-width: 991px) {

        .patient-care-box {
            padding: 40px;
        }

    }


    @media (max-width: 767px) {

        .patient-corner-card {
            padding: 26px;
        }

        .patient-corner-content h3 {
            font-size: 22px;
        }

        .patient-corner-content p,
        .patient-corner-intro p,
        .patient-care-box p,
        .patient-corner-cta p {
            font-size: 18px;
        }

        .patient-care-box {
            padding: 30px 24px;
        }

        .patient-care-highlight {
            padding: 30px 20px;
        }

    }

</style>

@endpush