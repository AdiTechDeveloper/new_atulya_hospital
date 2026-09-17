@extends('website.layout.app')

@section('title', $facility->title)

@section('content')

<!-- =========================
        Facility Details Section
    ========================== -->

<section style="margin-bottom: 3rem" class="service-details-section mb-10">

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

                                @foreach($facilities as $item)

                                    <li>

                                        <a href="{{ route('facilities.show', $item->slug) }}">

                                            <span>
                                                {{ $item->title }}
                                            </span>

                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>

                                        </a>

                                    </li>

                                @endforeach

                            </ul>

                        </div>


                        <!-- Contact Sidebar -->

                        <div
                            class="sidebar-widget-image wow fadeInUp"
                            data-wow-delay=".5s">

                            @if($facility->secondary_image)

                                <img
                                    src="{{ asset('storage/' . $facility->secondary_image) }}"
                                    alt="{{ $facility->title }}">

                            @elseif($facility->main_image)

                                <img
                                    src="{{ asset('storage/' . $facility->main_image) }}"
                                    alt="{{ $facility->title }}">

                            @endif

                        </div>

                    </div>

                </div>


                <!-- =========================
                        RIGHT CONTENT
                    ========================== -->

                <div class="col-lg-8 order-1 order-xl-2">

                    <div class="service-details-right-items">


                        <!-- Main Facility Image -->

                        @if($facility->main_image)

                            <div class="service-img wow img-custom-anim-left">

                                <img
                                    src="{{ asset('storage/' . $facility->main_image) }}"
                                    alt="{{ $facility->title }}">

                            </div>

                        @endif


                        <!-- Facility Name -->

                        <h3>
                            {{ $facility->title }}
                        </h3>


                        <!-- Facility Description -->

                        @if($facility->short_description)

                            <p>
                                {{ $facility->short_description }}
                            </p>

                        @endif


                        <!-- Overview -->

                        @if($facility->section_heading)

                            <h4>
                                {{ $facility->section_heading }}
                            </h4>

                        @endif


                        @if($facility->section_description)

                            <p>
                                {{ $facility->section_description }}
                            </p>

                        @endif


                        <!-- Facility Highlights -->

                        @if(!empty($facility->features))

                            <div class="list-box">

                                <ul>

                                    @foreach(array_slice($facility->features, 0, 3) as $feature)

                                        <li>

                                            <i class="far fa-check"></i>

                                            {{ $feature }}

                                        </li>

                                    @endforeach

                                </ul>


                                <ul>

                                    @foreach(array_slice($facility->features, 3, 3) as $feature)

                                        <li>

                                            <i class="far fa-check"></i>

                                            {{ $feature }}

                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        <!-- Supporting Information -->

                        @if($facility->bottom_heading)

                            <h4>
                                {{ $facility->bottom_heading }}
                            </h4>

                        @endif


                        @if($facility->bottom_description)

                            <p>
                                {{ $facility->bottom_description }}
                            </p>

                        @endif


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

                                        <span>
                                            Name
                                        </span>

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

                                        <span>
                                            Email
                                        </span>

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

                                        <span>
                                            Phone
                                        </span>

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

                                        <span>
                                            Facility
                                        </span>

                                        <div class="form">

                                            <select
                                                name="facility"
                                                class="single-select w-100">

                                                <option value="">
                                                    Select Facility
                                                </option>


                                                @foreach($facilities as $item)

                                                    <option
                                                        value="{{ $item->slug }}"
                                                        {{ $item->id == $facility->id ? 'selected' : '' }}>

                                                        {{ $item->title }}

                                                    </option>

                                                @endforeach

                                            </select>

                                        </div>

                                    </div>

                                </div>


                                <!-- Age -->

                                <div
                                    class="col-lg-6 wow fadeInUp"
                                    data-wow-delay=".5s">

                                    <div class="form-clt">

                                        <span>
                                            Select Age
                                        </span>

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
                                    class="col-lg-6 wow fadeInUp"
                                    data-wow-delay=".3s">

                                    <div class="form-clt">

                                        <span>
                                            Your Message
                                        </span>

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