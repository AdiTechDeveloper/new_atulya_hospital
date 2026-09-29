@extends('website.layout.app')

@section('title', $facility->title)
@section('page-banner')

@include('website.partials.page-banner', [
'title' => $facility->title
])

@endsection

@section('content')

<!-- =========================
        FACILITY DETAILS SECTION
========================== -->

<section class="facility-details-section section-padding">

    <div class="container">

        <div class="facility-details-wrapper">

            <div class="row g-5">


                <!-- =========================
                        LEFT SIDEBAR
                ========================== -->

                <div class="col-lg-4 order-2 order-xl-1">

                    <div class="facility-sidebar sticky-style">

                        <div class="sidebar-widget">

                            <h4 class="facility-sidebar-title">
                                Our Facilities
                            </h4>


                            <ul
                                class="facility-list wow fadeInUp"
                                data-wow-delay=".3s">

                                @foreach ($facilities as $item)

                                <li class="{{ $facility->id == $item->id ? 'active' : '' }}">

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

                    </div>

                </div>


                <!-- =========================
                        RIGHT CONTENT
                ========================== -->

                <div class="col-lg-8 order-1 order-xl-2">

                    <div class="facility-details-content">


                        <!-- =========================
                                FACILITY IMAGES
                        ========================== -->

                        <div class="facility-images">

                            <div class="row g-3">


                                {{-- Main Image --}}

                                @if ($facility->main_image)

                                <div class="col-md-7">

                                    <div
                                        class="facility-image large-image wow img-custom-anim-left">

                                        <img
                                            src="{{ asset('storage/' . $facility->main_image) }}"
                                            alt="{{ $facility->title }}">

                                    </div>

                                </div>

                                @endif


                                {{-- Secondary Image --}}

                                @if ($facility->secondary_image)

                                <div class="col-md-5">

                                    <div
                                        class="facility-image small-image wow img-custom-anim-right">

                                        <img
                                            src="{{ asset('storage/' . $facility->secondary_image) }}"
                                            alt="{{ $facility->title }}">

                                    </div>

                                </div>

                                @elseif ($facility->main_image)

                                {{-- If secondary image does not exist --}}

                                <div class="col-md-5">

                                    <div class="facility-image small-image">

                                        <img
                                            src="{{ asset('storage/' . $facility->main_image) }}"
                                            alt="{{ $facility->title }}">

                                    </div>

                                </div>

                                @endif


                            </div>

                        </div>


                        <!-- =========================
                                FACILITY TITLE
                        ========================== -->

                        <div class="facility-content mt-4">

                            <h2 class="facility-title">

                                {{ $facility->title }}

                            </h2>


                            <!-- =========================
                                    MAIN DESCRIPTION
                            ========================== -->

                            @if ($facility->short_description)

                            <p class="facility-description">

                                {{ $facility->short_description }}

                            </p>

                            @endif


                            <!-- =========================
                                    SECTION HEADING
                            ========================== -->

                            @if ($facility->section_heading)

                            <h4 class="facility-section-heading">

                                {{ $facility->section_heading }}

                            </h4>

                            @endif


                            <!-- =========================
                                    SECTION DESCRIPTION
                            ========================== -->

                            @if ($facility->section_description)

                            <p class="facility-section-description">

                                {{ $facility->section_description }}

                            </p>

                            @endif


                            <!-- =========================
                                    FEATURES
                            ========================== -->

                            @if (!empty($facility->features))

                            <div class="facility-features">

                                <div class="row">

                                    @foreach ($facility->features as $feature)

                                    <div class="col-md-6">

                                        <div class="facility-feature-item">

                                            <span class="feature-icon">

                                                <i class="far fa-check"></i>

                                            </span>

                                            <span class="feature-text">

                                                {{ $feature }}

                                            </span>

                                        </div>

                                    </div>

                                    @endforeach

                                </div>

                            </div>

                            @endif


                            <!-- =========================
                                    BOTTOM CONTENT
                            ========================== -->

                            @if ($facility->bottom_heading)

                            <h4 class="facility-bottom-heading">

                                {{ $facility->bottom_heading }}

                            </h4>

                            @endif


                            @if ($facility->bottom_description)

                            <p class="facility-bottom-description">

                                {{ $facility->bottom_description }}

                            </p>

                            @endif


                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

</section>
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


<!-- =========================
        FACILITY CSS
========================== -->

<style>
 /* Facility Details */

.facility-details-section {
    padding: 70px 0 80px;
    background: #f7fbfc;
}

.facility-details-wrapper {
    width: 100%;
}

.facility-details-wrapper .row {
    align-items: flex-start;
}


/* Facility Sidebar */

.facility-sidebar {
    position: sticky;
    top: 100px;
}

.facility-sidebar .sidebar-widget {
    padding: 28px;
    background: #ffffff;
    border: 1px solid #e8eef0;
    border-radius: 14px;
    box-shadow: 0 8px 30px rgba(20, 45, 55, 0.06);
}

.facility-sidebar-title {
    position: relative;

    margin: 0 0 22px;
    padding-bottom: 16px;

    font-size: 25px;
    line-height: 1.3;
    font-weight: 600;

    color: #172b34;
}

.facility-sidebar-title::after {
    content: "";

    position: absolute;
    left: 0;
    bottom: 0;

    width: 42px;
    height: 3px;

    background: #08c7bd;
    border-radius: 10px;
}


/* Facility List */

.facility-list {
    padding: 0;
    margin: 0;

    list-style: none;
}

.facility-list li {
    margin-bottom: 20px;
}

.facility-list li:last-child {
    margin-bottom: 0;
}

.facility-list li a {
    position: relative;

    display: flex;
    align-items: center;
    justify-content: space-between;

    min-height: 52px;

    padding: 13px 15px;

    background: #f6f9fa;

    color: #33444b;

    text-decoration: none;

    border: 1px solid transparent;
    border-radius: 8px;

    font-size: 19px;
    line-height: 1.4;
    font-weight: 500;

    transition: all 0.3s ease;
}

.facility-list li a span:first-child {
    padding-right: 12px;
}

.facility-list li a .icon {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 28px;
    height: 28px;

    flex-shrink: 0;

    border-radius: 50%;

    background: #ffffff;

    color: #08c7bd;

    font-size: 12px;

    transition: all 0.3s ease;
}

.facility-list li a:hover {
    background: #eafafa;
    color: #08a9a1;
    border-color: #d5f2f0;
}

.facility-list li a:hover .icon {
    background: #08c7bd;
    color: #ffffff;
}

.facility-list li.active a {
    background: #08c7bd;
    color: #ffffff;
    border-color: #08c7bd;

    box-shadow: 0 7px 18px rgba(8, 199, 189, 0.18);
}

.facility-list li.active a .icon {
    background: rgba(255, 255, 255, 0.2);
    color: #ffffff;
}


/* Facility Content */

.facility-details-content {
    padding: 32px;

    background: #ffffff;

    border: 1px solid #e8eef0;
    border-radius: 14px;

    box-shadow: 0 8px 30px rgba(20, 45, 55, 0.06);
}


/* Facility Images */

.facility-images {
    margin-bottom: 30px;
}

.facility-images .row {
    --bs-gutter-x: 14px;
    --bs-gutter-y: 14px;
}

.facility-image {
    position: relative;

    width: 100%;
    height: 300px;

    overflow: hidden;

    border-radius: 12px;

    background: #eef3f4;
}

.facility-image::after {
    content: "";

    position: absolute;
    inset: 0;

    background: linear-gradient(
        to top,
        rgba(0, 0, 0, 0.12),
        transparent 35%
    );

    pointer-events: none;
}

.facility-image img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;

    transition: transform 0.5s ease;
}

.facility-image:hover img {
    transform: scale(1.04);
}

.facility-image.large-image {
    height: 300px;
}

.facility-image.small-image {
    height: 300px;
}


/* Facility Content */

.facility-content {
    margin-top: 5px !important;
}

.facility-title {
    position: relative;

    margin: 0 0 18px;
    padding-bottom: 16px;

    color: #172b34;

    font-size: 32px;
    line-height: 1.25;
    font-weight: 600;
}

.facility-title::after {
    content: "";

    position: absolute;
    left: 0;
    bottom: 0;

    width: 50px;
    height: 3px;

    background: #08c7bd;

    border-radius: 10px;
}

.facility-description,
.facility-section-description,
.facility-bottom-description {
    margin-bottom: 22px;

    color: #66757c;

    font-size: 19px;
    line-height: 1.8;
}

.facility-section-heading,
.facility-bottom-heading {
    position: relative;

    margin: 30px 0 14px;
    padding-left: 15px;

    color: #172b34;

    font-size: 22px;
    line-height: 1.4;
    font-weight: 600;
}

.facility-section-heading::before,
.facility-bottom-heading::before {
    content: "";

    position: absolute;
    left: 0;
    top: 5px;

    width: 4px;
    height: 22px;

    background: #08c7bd;

    border-radius: 10px;
}


/* Facility Features */

.facility-features {
    margin: 28px 0;
    padding: 22px;

    background: #f7fbfb;

    border: 1px solid #e7f2f2;
    border-radius: 10px;
}

.facility-features .row {
    --bs-gutter-x: 12px;
    --bs-gutter-y: 12px;
}

.facility-feature-item {
    display: flex;
    align-items: center;

      min-height: 52px;
    padding: 13px 15px;

    margin-bottom: 0;
    

    background: #ffffff;

    border: 1px solid #edf1f2;
    border-radius: 8px;

    color: #4a5b61;

    font-size: 14px;
    line-height: 1.5;

    transition: all 0.3s ease;
}

.facility-feature-item:hover {
    border-color: #cceeed;
    transform: translateY(-2px);
}

.feature-icon {
     width: 30px;
    height: 30px;
    margin-right: 11px;

    display: flex;
    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    background: #e7faf9;

    border-radius: 50%;

    color: #08b9b0;
}

.feature-icon i {
    color: #08b9b0;
    font-size: 18px;
}

.feature-text {
    line-height: 1.5;
}


/* Responsive */

@media (max-width: 1199px) {

    .facility-details-section {
        padding: 60px 0 70px;
    }

    .facility-details-content {
        padding: 28px;
    }

    .facility-image.large-image,
    .facility-image.small-image {
        height: 270px;
    }

}


@media (max-width: 991px) {

    .facility-details-section {
        padding: 55px 0 65px;
    }

    .facility-sidebar {
        position: static;
    }

    .facility-sidebar .sidebar-widget {
        margin-bottom: 30px;
    }

    .facility-details-content {
        padding: 25px;
    }

    .facility-image.large-image,
    .facility-image.small-image {
        height: 280px;
    }

}


@media (max-width: 767px) {

    .facility-details-section {
        padding: 45px 0 55px;
    }

    .facility-sidebar .sidebar-widget {
        padding: 22px;
    }

    .facility-details-content {
        padding: 20px;
    }

    .facility-image.large-image,
    .facility-image.small-image {
        height: 240px;
    }

    .facility-title {
        font-size: 27px;
    }

    .facility-section-heading,
    .facility-bottom-heading {
        font-size: 20px;
    }

    .facility-features {
        padding: 15px;
    }

}


@media (max-width: 575px) {

    .facility-details-section {
        padding: 35px 0 45px;
    }

    .facility-details-content {
        padding: 16px;
        border-radius: 10px;
    }

    .facility-image.large-image,
    .facility-image.small-image {
        height: 220px;
    }

    .facility-title {
        font-size: 36px;
    }

    .facility-description,
    .facility-section-description,
    .facility-bottom-description {
        font-size: 17px;
         line-height: 1.85;
    }

}
</style>

@endsection