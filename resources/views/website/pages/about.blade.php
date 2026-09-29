@extends('website.layout.app')

@section('title', 'About Atulya Super Speciality Hospital & ICU | Ahmedabad')

@section('meta_description', 'Learn about Atulya Super Speciality Hospital & ICU in Ahmedabad, our specialist healthcare services, 24×7 emergency and critical care, modern infrastructure and patient-focused approach.')

@section('page-banner')
    @include('website.partials.page-banner', [
        'title' => 'About Atulya'
    ])
@endsection

@push('styles')
<style>
    .atulya-about {
        --primary: #172965;
        --secondary: #1c6fd1;
        --accent: #08c7bd;
        --text: #4d5870;
        --light: #f5f8fc;
        --border: #e4eaf2;
        background: #ffffff;
        color: var(--primary);
        overflow: hidden;
    }

    .atulya-container {
        width: min(92%, 1200px);
        margin: 0 auto;
    }

    .atulya-section {
        padding: 5rem 0;
    }

    .atulya-section-light {
        background: var(--light);
    }

    .atulya-kicker {
        display: inline-flex;
        align-items: center;
        gap: .5rem;
        margin-bottom: .9rem;
        color: var(--secondary);
        font-size: 1.125rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .06em;
    }

    .atulya-kicker::before {
        content: "";
        width: 2rem;
        height: 2px;
        background: var(--accent);
    }

    .atulya-section-head {
        max-width: 760px;
        margin: 0 auto 2.8rem;
        text-align: center;
    }

    .atulya-section-head h2 {
        margin: 0 0 1rem;
        color: var(--primary);
        font-size: clamp(2rem, 3vw, 3rem);
        line-height: 1.15;
        font-weight: 700;
    }

    .atulya-section-head p {
        margin: 0;
        color: var(--text);
        font-size: 1.125rem;
        line-height: 1.7;
    }

    /* Hero */

    .atulya-about-hero {
        padding: 4.5rem 0;
        background: linear-gradient(135deg, #f3f8ff 0%, #ffffff 65%);
    }

    .atulya-hero-grid {
        display: grid;
        grid-template-columns: 1.05fr .95fr;
        align-items: center;
        gap: 4rem;
    }

    .atulya-hero-content h1 {
        margin: 0 0 1.25rem;
        color: var(--primary);
        font-size: clamp(2.5rem, 4vw, 4rem);
        line-height: 1.08;
        font-weight: 700;
    }

    .atulya-hero-content h1 span {
        display: block;
        color: var(--secondary);
    }

    .atulya-hero-content > p {
        max-width: 650px;
        margin: 0 0 1.8rem;
        color: var(--text);
        font-size: 1.125rem;
        line-height: 1.75;
    }

    .atulya-hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: .9rem;
        margin-bottom: 1.8rem;
    }

    .atulya-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: .7rem;
        min-height: 3.3rem;
        padding: .75rem 1.3rem;
        border-radius: 999px;
        border: 1px solid transparent;
        font-size: 1.125rem;
        font-weight: 600;
        line-height: 1;
        transition: all .25s ease;
    }

    .atulya-btn-primary {
        color: #ffffff;
        background: var(--secondary);
    }

    .atulya-btn-primary:hover {
        color: #ffffff;
        background: var(--primary);
    }

    .atulya-btn-outline {
        color: var(--primary);
        background: #ffffff;
        border-color: var(--border);
    }

    .atulya-btn-outline:hover {
        color: #ffffff;
        background: var(--primary);
        border-color: var(--primary);
    }

    .atulya-hero-points {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem 1.5rem;
    }

    .atulya-hero-point {
        display: flex;
        align-items: center;
        gap: .55rem;
        color: var(--primary);
        font-size: 1.125rem;
        font-weight: 600;
    }

    .atulya-hero-point i {
        color: var(--accent);
        font-size: 1.15rem;
    }

    .atulya-hero-image {
        position: relative;
        display: flex;
        justify-content: center;
    }

    .atulya-hero-image img {
        width: 100%;
        max-width: 34rem;
        height: auto;
        display: block;
        border-radius: 1.25rem;
    }

    .atulya-hero-badge {
        position: absolute;
        left: 0;
        bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: .8rem;
        max-width: 90%;
        padding: .9rem 1.1rem;
        background: rgba(255, 255, 255, .96);
        border-radius: .9rem;
        box-shadow: 0 .8rem 2rem rgba(23, 41, 101, .12);
    }

    .atulya-hero-badge-icon {
        width: 2.8rem;
        height: 2.8rem;
        flex: 0 0 2.8rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        background: var(--accent);
        border-radius: 50%;
        font-size: 1.2rem;
    }

    .atulya-hero-badge strong {
        display: block;
        margin-bottom: .25rem;
        color: var(--primary);
        font-size: 1.125rem;
    }

    .atulya-hero-badge span {
        display: block;
        color: var(--text);
        font-size: 1rem;
    }

    /* About Hospital */

    .atulya-about-grid {
        display: grid;
        grid-template-columns: .95fr 1.05fr;
        align-items: center;
        gap: 4rem;
    }

    .atulya-about-image img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 1.25rem;
    }

    .atulya-content h2 {
        margin: 0 0 1.25rem;
        color: var(--primary);
        font-size: clamp(2rem, 3vw, 3rem);
        line-height: 1.15;
        font-weight: 700;
    }

    .atulya-content > p {
        margin: 0 0 1rem;
        color: var(--text);
        font-size: 1.125rem;
        line-height: 1.75;
    }

    .atulya-check-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: .8rem 1.5rem;
        margin-top: 1.7rem;
    }

    .atulya-check {
        display: flex;
        align-items: center;
        gap: .65rem;
        color: var(--primary);
        font-size: 1.125rem;
        font-weight: 600;
    }

    .atulya-check i {
        flex: 0 0 auto;
        color: var(--accent);
        font-size: 1.15rem;
    }

    /* Approach */

    .atulya-approach-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1.5rem;
    }

    .atulya-approach-card {
        padding: 2rem;
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: 1rem;
        box-shadow: 0 .5rem 1.5rem rgba(23, 41, 101, .05);
    }

    .atulya-approach-number {
        width: 3.2rem;
        height: 3.2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.3rem;
        color: #ffffff;
        background: var(--secondary);
        border-radius: .8rem;
        font-size: 1.125rem;
        font-weight: 700;
    }

    .atulya-approach-card h3 {
        margin: 0 0 .8rem;
        color: var(--primary);
        font-size: 1.4rem;
        line-height: 1.3;
    }

    .atulya-approach-card p {
        margin: 0;
        color: var(--text);
        font-size: 1.125rem;
        line-height: 1.65;
    }

    /* Vision Mission */

    .atulya-purpose {
        background: var(--light);
    }

    .atulya-purpose-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 1.5rem;
    }

    .atulya-purpose-card {
        padding: 2.2rem;
        background: #ffffff;
        border-radius: 1rem;
        border: 1px solid var(--border);
        box-shadow: 0 .5rem 1.5rem rgba(23, 41, 101, .05);
    }

    .atulya-purpose-icon {
        width: 3.5rem;
        height: 3.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.3rem;
        color: #ffffff;
        background: var(--accent);
        border-radius: 50%;
        font-size: 1.35rem;
    }

    .atulya-purpose-card h3 {
        margin: 0 0 .8rem;
        color: var(--primary);
        font-size: 1.5rem;
    }

    .atulya-purpose-card p {
        margin: 0;
        color: var(--text);
        font-size: 1.125rem;
        line-height: 1.7;
    }

    /* Why Atulya */

    .atulya-why-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1.5rem;
    }

    .atulya-why-card {
        padding: 1.8rem;
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: 1rem;
        box-shadow: 0 .5rem 1.5rem rgba(23, 41, 101, .05);
    }

    .atulya-why-number {
        margin-bottom: 1rem;
        color: var(--secondary);
        font-size: 1.4rem;
        font-weight: 700;
    }

    .atulya-why-card h3 {
        margin: 0 0 .7rem;
        color: var(--primary);
        font-size: 1.35rem;
        line-height: 1.3;
    }

    .atulya-why-card p {
        margin: 0;
        color: var(--text);
        font-size: 1.125rem;
        line-height: 1.65;
    }

    /* Infrastructure */

    .atulya-infra {
        background: var(--light);
    }

    .atulya-infra-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1.5rem;
    }

    .atulya-infra-card {
        overflow: hidden;
        background: #ffffff;
        border: 1px solid var(--border);
        border-radius: 1rem;
        box-shadow: 0 .5rem 1.5rem rgba(23, 41, 101, .05);
    }

    .atulya-infra-image {
        aspect-ratio: 16 / 10;
        overflow: hidden;
    }

    .atulya-infra-image img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        transition: transform .3s ease;
    }

    .atulya-infra-card:hover .atulya-infra-image img {
        transform: scale(1.04);
    }

    .atulya-infra-content {
        padding: 1.4rem;
    }

    .atulya-infra-content h3 {
        margin: 0 0 .5rem;
        color: var(--primary);
        font-size: 1.3rem;
        line-height: 1.3;
    }

    .atulya-infra-content p {
        margin: 0;
        color: var(--text);
        font-size: 1.125rem;
        line-height: 1.6;
    }

    /* Quality */

    .atulya-quality-grid {
        display: grid;
        grid-template-columns: .95fr 1.05fr;
        align-items: center;
        gap: 4rem;
    }

    .atulya-quality-image img {
        width: 100%;
        max-width: 34rem;
        height: auto;
        display: block;
        margin: 0 auto;
        border-radius: 1.25rem;
    }

    .atulya-quality-content h2 {
        margin: 0 0 1.2rem;
        color: var(--primary);
        font-size: clamp(2rem, 3vw, 3rem);
        line-height: 1.15;
    }

    .atulya-quality-content > p {
        margin: 0;
        color: var(--text);
        font-size: 1.125rem;
        line-height: 1.75;
    }

    .atulya-quality-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: .8rem;
        margin-top: 1.7rem;
    }

    .atulya-quality-item {
        display: flex;
        align-items: center;
        gap: .6rem;
        color: var(--primary);
        font-size: 1.125rem;
        font-weight: 600;
    }

    .atulya-quality-item i {
        color: var(--accent);
    }

    .atulya-trust {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-top: 1.8rem;
        padding: 1.2rem;
        background: var(--light);
        border-radius: .9rem;
    }

    .atulya-trust-icon {
        width: 3rem;
        height: 3rem;
        flex: 0 0 3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        background: var(--secondary);
        border-radius: 50%;
        font-size: 1.2rem;
    }

    .atulya-trust strong {
        display: block;
        margin-bottom: .25rem;
        color: var(--primary);
        font-size: 1.125rem;
    }

    .atulya-trust span {
        display: block;
        color: var(--text);
        font-size: 1.125rem;
        line-height: 1.5;
    }

    /* CTA */

    .atulya-cta {
        padding: 0 0 5rem;
    }

    .atulya-cta-box {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2rem;
        padding: 2.3rem 2.5rem;
        background: var(--primary);
        border-radius: 1.2rem;
    }

    .atulya-cta-box h3 {
        margin: 0 0 .5rem;
        color: #ffffff;
        font-size: 1.8rem;
    }

    .atulya-cta-box p {
        margin: 0;
        color: rgba(255, 255, 255, .82);
        font-size: 1.125rem;
        line-height: 1.6;
    }

    .atulya-cta-box .atulya-btn {
        flex: 0 0 auto;
        color: var(--primary);
        background: #ffffff;
    }

    .atulya-cta-box .atulya-btn:hover {
        color: #ffffff;
        background: var(--accent);
    }

    @media (max-width: 991px) {
        .atulya-section {
            padding: 4rem 0;
        }

        .atulya-about-hero {
            padding: 4rem 0;
        }

        .atulya-hero-grid,
        .atulya-about-grid,
        .atulya-quality-grid {
            grid-template-columns: 1fr;
            gap: 2.8rem;
        }

        .atulya-hero-content {
            text-align: center;
        }

        .atulya-hero-content > p {
            margin-left: auto;
            margin-right: auto;
        }

        .atulya-hero-actions,
        .atulya-hero-points {
            justify-content: center;
        }

        .atulya-hero-image {
            order: -1;
        }

        .atulya-hero-image img {
            max-width: 30rem;
        }

        .atulya-approach-grid,
        .atulya-why-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .atulya-infra-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .atulya-quality-image {
            text-align: center;
        }

        .atulya-cta-box {
            padding: 2rem;
        }
    }

    @media (max-width: 767px) {
        .atulya-section {
            padding: 3.2rem 0;
        }

        .atulya-about-hero {
            padding: 3.2rem 0;
        }

        .atulya-container {
            width: min(92%, 100%);
        }

        .atulya-hero-content h1 {
            font-size: 2.35rem;
        }

        .atulya-section-head h2,
        .atulya-content h2,
        .atulya-quality-content h2 {
            font-size: 2rem;
        }

        .atulya-approach-grid,
        .atulya-purpose-grid,
        .atulya-why-grid,
        .atulya-infra-grid {
            grid-template-columns: 1fr;
        }

        .atulya-check-grid,
        .atulya-quality-list {
            grid-template-columns: 1fr;
        }

        .atulya-hero-badge {
            position: relative;
            left: auto;
            bottom: auto;
            width: 100%;
            max-width: 100%;
            margin-top: -1rem;
        }

        .atulya-cta {
            padding-bottom: 3.2rem;
        }

        .atulya-cta-box {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    @media (max-width: 480px) {
        .atulya-hero-actions {
            flex-direction: column;
        }

        .atulya-btn {
            width: 100%;
        }

        .atulya-hero-points {
            align-items: flex-start;
            flex-direction: column;
        }

        .atulya-purpose-card,
        .atulya-approach-card,
        .atulya-why-card {
            padding: 1.5rem;
        }

        .atulya-hero-content h1 {
            font-size: 2.1rem;
        }

        .atulya-section-head h2,
        .atulya-content h2,
        .atulya-quality-content h2 {
            font-size: 1.9rem;
        }
    }
</style>
@endpush

@section('content')

<div class="atulya-about">

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

                        <a href="tel:{{ setting('phone') }}"
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


    <section class="atulya-section atulya-section-light">

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

            <div class="atulya-approach-grid">

                <div class="atulya-approach-card">
                    <div class="atulya-approach-number">01</div>

                    <h3>Patient-Centred Care</h3>

                    <p>
                        Care is planned around the patient's medical needs,
                        comfort and overall healthcare journey.
                    </p>
                </div>

                <div class="atulya-approach-card">
                    <div class="atulya-approach-number">02</div>

                    <h3>Clear Communication</h3>

                    <p>
                        We value clear communication with patients and
                        families throughout the care process.
                    </p>
                </div>

                <div class="atulya-approach-card">
                    <div class="atulya-approach-number">03</div>

                    <h3>Timely Access</h3>

                    <p>
                        Emergency, critical care and specialist services
                        support timely access to appropriate medical care.
                    </p>
                </div>

            </div>

        </div>

    </section>


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

                @forelse($facilities as $facility)

                    <div class="atulya-infra-card">

                        <div class="atulya-infra-image">

                            @if($facility->main_image)

                                <img
                                    src="{{ asset('storage/' . $facility->main_image) }}"
                                    alt="{{ $facility->title }} at {{ setting('hospital_name') }} Ahmedabad"
                                >

                            @else

                                <img
                                    src="{{ asset('assets/img/inner/facilities/default.jpg') }}"
                                    alt="{{ $facility->title }} at {{ setting('hospital_name') }} Ahmedabad"
                                >

                            @endif

                        </div>

                        <div class="atulya-infra-content">

                            <h3>
                                {{ $facility->title }}
                            </h3>

                            @if($facility->short_description)

                                <p>
                                    {{ $facility->short_description }}
                                </p>

                            @endif

                        </div>

                    </div>

                @empty

                    <div class="col-12">
                        <p class="text-center">
                            No hospital facilities available.
                        </p>
                    </div>

                @endforelse

            </div>

        </div>

    </section>


    <section class="atulya-section">

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
                    href="tel:{{ setting('phone') }}"
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