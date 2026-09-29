@extends('website.layout.app')

@section('title', 'Contact Us')
@section('page-banner')

    @include('website.partials.page-banner', [
        'title' => 'Contact Us'
    ])

@endsection

@section('content')


<!-- Appointment Section Start -->

<!-- Appointment Section End -->


<!-- Contact Info Section Start -->
<section class="contact-info-section section-padding ">

    <div class="container">

        <div class="row">


            <!-- Phone -->
            <div class="col-lg-4">

                <div class="contact-info-box-items">

                    <div class="icon">

                        <i class="far fa-phone-alt"></i>

                    </div>

                    <div class="content">

                        <h6>Call Us</h6>

                        <a href="{{ setting('phone') }}">

                            {{ setting('phone') }}

                        </a>

                    </div>

                </div>

            </div>


            <!-- Appointment -->
            <div class="col-lg-4">

                <div class="contact-info-box-items">

                    <div class="icon">

                        <i class="far fa-calendar-check"></i>

                    </div>

                    <div class="content">

                        <h6>Book Appointment</h6>

                        <a href="#">

                            Book With Our Specialists

                        </a>

                    </div>

                </div>

            </div>


            <!-- Location -->
            <div class="col-lg-4">

                <div class="contact-info-box-items">

                    <div class="icon">

                        <i class="fal fa-map-marker-alt"></i>

                    </div>

                    <div class="content">

                        <h6>Our Location</h6>
                        {{ setting('address') }}

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- Map Section Start -->
<div class="map-section fix">

    <div class="map-items">

        <div class="googpemap">

            <iframe
                src="{{ setting('google_maps_embed_url') }}"
                width="100%"
                height="500"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    </div>

</div>
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
                    href="#"
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