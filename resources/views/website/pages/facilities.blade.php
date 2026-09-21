@extends('website.layout.app')

@section('title', $facility->title)

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
                                data-wow-delay=".3s"
                            >

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
                                            class="facility-image large-image wow img-custom-anim-left"
                                        >

                                            <img
                                                src="{{ asset('storage/' . $facility->main_image) }}"
                                                alt="{{ $facility->title }}"
                                            >

                                        </div>

                                    </div>

                                @endif


                                {{-- Secondary Image --}}

                                @if ($facility->secondary_image)

                                    <div class="col-md-5">

                                        <div
                                            class="facility-image small-image wow img-custom-anim-right"
                                        >

                                            <img
                                                src="{{ asset('storage/' . $facility->secondary_image) }}"
                                                alt="{{ $facility->title }}"
                                            >

                                        </div>

                                    </div>

                                @elseif ($facility->main_image)

                                    {{-- If secondary image does not exist --}}

                                    <div class="col-md-5">

                                        <div class="facility-image small-image">

                                            <img
                                                src="{{ asset('storage/' . $facility->main_image) }}"
                                                alt="{{ $facility->title }}"
                                            >

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


<!-- =========================
        FACILITY CSS
========================== -->

<style>

/* =========================================
   FACILITY DETAILS
========================================= */

.facility-details-section {
    padding: 80px 0;
}

.facility-sidebar {
    position: sticky;
    top: 100px;
}

.facility-sidebar-title {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 20px;
}


/* =========================================
   FACILITY LIST
========================================= */

.facility-list {
    padding: 0;
    margin: 0;
    list-style: none;
}

.facility-list li {
    margin-bottom: 10px;
}

.facility-list li a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 18px;
    background: #f5f7fa;
    color: #222;
    text-decoration: none;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.facility-list li a:hover {
    background: #238fe5;
    color: #fff;
}

.facility-list li.active a {
    background: #238fe5;
    color: #fff;
}

.facility-list li a .icon {
    font-size: 14px;
}


/* =========================================
   FACILITY IMAGES
========================================= */

.facility-images {
    margin-bottom: 30px;
}

.facility-image {
    width: 100%;
    overflow: hidden;
    border-radius: 6px;
}

.facility-image.large-image {
    height: 430px;
}

.facility-image.small-image {
    height: 430px;
}

.facility-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.facility-image:hover img {
    transform: scale(1.04);
}


/* =========================================
   FACILITY CONTENT
========================================= */

.facility-title {
    font-size: 34px;
    line-height: 1.3;
    font-weight: 600;
    margin-bottom: 18px;
}

.facility-description {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
    margin-bottom: 25px;
}

.facility-section-heading {
    font-size: 25px;
    font-weight: 600;
    margin-top: 30px;
    margin-bottom: 15px;
}

.facility-section-description {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
    margin-bottom: 25px;
}


/* =========================================
   FACILITY FEATURES
========================================= */

.facility-features {
    margin: 30px 0;
}

.facility-feature-item {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
    font-size: 16px;
    color: #444;
}

.feature-icon {
    width: 22px;
    height: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.feature-icon i {
    color: #238fe5;
    font-size: 14px;
}

.feature-text {
    line-height: 1.5;
}


/* =========================================
   BOTTOM CONTENT
========================================= */

.facility-bottom-heading {
    font-size: 25px;
    line-height: 1.4;
    font-weight: 600;
    margin-top: 30px;
    margin-bottom: 15px;
}

.facility-bottom-description {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
    margin-bottom: 0;
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 991px) {

    .facility-details-section {
        padding: 60px 0;
    }

    .facility-sidebar {
        position: static;
    }

    .facility-image.large-image,
    .facility-image.small-image {
        height: 350px;
    }

}


@media (max-width: 767px) {

    .facility-details-section {
        padding: 50px 0;
    }

    .facility-image.large-image,
    .facility-image.small-image {
        height: 300px;
    }

    .facility-title {
        font-size: 28px;
    }

    .facility-section-heading,
    .facility-bottom-heading {
        font-size: 22px;
    }

    .facility-feature-item {
        margin-bottom: 14px;
    }

}


@media (max-width: 575px) {

    .facility-image.large-image,
    .facility-image.small-image {
        height: 250px;
    }

    .facility-title {
        font-size: 25px;
    }

}

</style>

@endsection