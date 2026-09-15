@extends('website.layout.app')

@section('title', $facility['name'])

@section('content')

<!-- =========================
        Facility Details Section
    ========================== -->
<section style="    margin-bottom: 3rem" class="service-details-section mb-10">
    <div class="container">
        <div class="service-details-wrapper">
            <div class="row g-5">

                <!-- =========================
                        LEFT SIDEBAR
                    ========================== -->
                <div class="col-lg-4 order-2 order-xl-1">

                    <div class="service-details-sidebar sticky-style">

                        <!-- Facilities List -->
                        <div class="sidebar-widget">

                            <ul class="wow fadeInUp" data-wow-delay=".3s">

                                <li>
                                    <a href="{{ url('/facilities/25-beds-central-oxygen') }}">
                                        <span>25 Beds with Central Oxygen</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/facilities/2-modular-class-100-ot') }}">
                                        <span>2 Modular Class 100 OT</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/facilities/6-beds-icu-with-dialysis') }}">
                                        <span>6 Beds ICU with Dialysis</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/facilities/24x7-emergency-ambulance') }}">
                                        <span>24×7 Emergency & Ambulance</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/facilities/24x7-laboratory-pharmacy') }}">
                                        <span>24×7 Laboratory & Pharmacy</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/facilities/x-ray-facility') }}">
                                        <span>X-Ray Facility</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>

                            </ul>

                        </div>


                        <!-- Contact Sidebar -->
                        <div class="sidebar-widget-image wow fadeInUp" data-wow-delay=".5s">

                            <img
                               src="{{ asset($facility['image1']) }}"
                                alt="{{ $facility['name'] }}">
                            <!-- <div class="content">

                                <div class="icon">
                                    <i class="flaticon-support"></i>
                                </div>

                                <h3>
                                    <a href="tel:+916355258425">
                                        +91 63552 58425
                                    </a>
                                </h3>

                                <h3>
                                    <a
                                        href="mailto:info@example.com"
                                        class="link">
                                        info@example.com
                                    </a>
                                </h3>

                            </div> -->

                        </div>

                    </div>

                </div>


                <!-- =========================
                        RIGHT CONTENT
                    ========================== -->
                <div class="col-lg-8 order-1 order-xl-2">

                    <div class="service-details-right-items">

                        <!-- Main Facility Image -->
                        <div class="service-img wow img-custom-anim-left">

                            <img
                                src="{{ asset($facility['image']) }}"
                                alt="{{ $facility['name'] }}">

                        </div>


                        <!-- Facility Name -->
                        <h3>
                            {{ $facility['name'] }}
                        </h3>


                        <!-- Facility Description -->
                        <p>
                            {{ $facility['description'] }}
                        </p>


                        <!-- Overview -->
                        <h4>
                            {{ $facility['overview_title'] }}
                        </h4>

                        <p>
                            {{ $facility['overview'] }}
                        </p>


                        <!-- Facility Highlights -->
                        <div class="list-box">

                            <ul>

                                @foreach(array_slice($facility['highlights'], 0, 3) as $highlight)

                                <li>
                                    <i class="far fa-check"></i>
                                    {{ $highlight }}
                                </li>

                                @endforeach

                            </ul>


                            <ul>

                                @foreach(array_slice($facility['highlights'], 3, 3) as $highlight)

                                <li>
                                    <i class="far fa-check"></i>
                                    {{ $highlight }}
                                </li>

                                @endforeach

                            </ul>

                        </div>


                        <!-- Supporting Information -->
                        <h4>
                            {{ $facility['why_title'] }}
                        </h4>

                        <p>
                            {{ $facility['supporting_information'] }}
                        </p>


                        <!-- Appointment Button -->
                        <div class="mt-4">

                            <a
                                href="{{ url('/appointment') }}"
                                class="theme-btn">
                                <i class="far fa-chevron-right"></i>
                                Make An Appointment
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

            <div class="row g-4">

                <!-- =========================
                        LEFT SIDE
                    ========================== -->
                <div class="col-lg-6">

                    <div class="contact-appointment-left-item">

                        <div
                            class="contact-appointment-image wow img-custom-anim-left"
                            data-wow-duration="1.3s"
                            data-wow-delay="0.3s">

                            <img
                                src="{{ asset('assets/img/inner/contact/contact.png') }}"
                                alt="Contact Hospital">

                        </div>


                        <div class="contact-appointment-list">

                            <h5
                                class="wow fadeInUp"
                                data-wow-delay=".3s">
                                Working Hours
                            </h5>

                            <div
                                class="contact-list wow fadeInUp"
                                data-wow-delay=".5s">

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
                                            alt="Call">

                                    </div>

                                    <div class="content">

                                        <span>For Help</span>

                                        <p>
                                            <a href="tel:+916355258425">
                                                +91 63552 58425
                                            </a>
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- =========================
                        RIGHT SIDE - APPOINTMENT
                    ========================== -->
                <div class="col-lg-6">

                    <div class="contact-appointment-box">

                        <h3>
                            Book An Appointment
                        </h3>

                        <form action="#" method="POST">

                            @csrf

                            <div class="row g-4">

                                <!-- Name -->
                                <div
                                    class="col-lg-6 wow fadeInUp"
                                    data-wow-delay=".3s">

                                    <div class="form-clt">

                                        <span>Name</span>

                                        <input
                                            type="text"
                                            name="name"
                                            placeholder="Your Name">

                                    </div>

                                </div>


                                <!-- Email -->
                                <div
                                    class="col-lg-6 wow fadeInUp"
                                    data-wow-delay=".5s">

                                    <div class="form-clt">

                                        <span>Email</span>

                                        <input
                                            type="email"
                                            name="email"
                                            placeholder="Your Email">

                                    </div>

                                </div>


                                <!-- Phone -->
                                <div
                                    class="col-lg-6 wow fadeInUp"
                                    data-wow-delay=".3s">

                                    <div class="form-clt">

                                        <span>Phone</span>

                                        <input
                                            type="text"
                                            name="phone"
                                            placeholder="Your Phone">

                                    </div>

                                </div>


                                <!-- Facility -->
                                <div
                                    class="col-lg-6 wow fadeInUp"
                                    data-wow-delay=".5s">

                                    <div class="form-clt">

                                        <span>Facility</span>

                                        <div class="form">

                                            <select
                                                name="facility"
                                                class="single-select w-100">

                                                <option value="">
                                                    Select Facility
                                                </option>

                                                <option
                                                    value="{{ $facility['slug'] }}"
                                                    selected>
                                                    {{ $facility['name'] }}
                                                </option>

                                            </select>

                                        </div>

                                    </div>

                                </div>


                                <!-- Age -->
                                <div
                                    class="col-lg-12 wow fadeInUp"
                                    data-wow-delay=".5s">

                                    <div class="form-clt">

                                        <span>Select Age</span>

                                        <div class="form">

                                            <select
                                                name="age"
                                                class="single-select w-100">

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
                                <div
                                    class="col-lg-12 wow fadeInUp"
                                    data-wow-delay=".3s">

                                    <div class="form-clt">

                                        <span>Your Message</span>

                                        <textarea
                                            name="message"
                                            placeholder="Write your message..."></textarea>

                                    </div>

                                </div>


                                <!-- Submit -->
                                <div
                                    class="col-lg-12 wow fadeInUp"
                                    data-wow-delay=".3s">

                                    <button
                                        type="submit"
                                        class="theme-btn">

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