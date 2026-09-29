@extends('website.layout.app')

@section('title', $department->name)

@section('page-banner')

    @include('website.partials.page-banner', [
        'title' => $department->name
    ])

@endsection

@section('content')

@php
    $services = $department->services ?? [];
    $specialities = $department->specialities ?? [];
    $conditions = $department->conditions ?? [];
    $whyChoose = $department->why_choose ?? [];
@endphp


<section class="department-details-section">

    <div class="container">

        <div class="service-details-wrapper">

            <div class="row g-5">

                {{-- Department Sidebar --}}

                <div class="col-lg-4 order-2 order-xl-1">

                    <div class="service-details-sidebar">

                        <div class="department-sidebar-card">

                            <h4 class="department-sidebar-title">
                                Our Departments
                            </h4>

                            <ul class="department-list">

                                @foreach($departments as $item)

                                    <li class="{{ $department->id == $item->id ? 'active' : '' }}">

                                        <a href="{{ route('departments.show', $item->slug) }}">

                                            <span class="department-name">
                                                {{ $item->name }}
                                            </span>

                                            <span class="department-arrow">
                                                <i class="far fa-chevron-right"></i>
                                            </span>

                                        </a>

                                    </li>

                                @endforeach

                            </ul>

                        </div>


                        {{-- Department Image --}}

                        @if($department->image)

                            <div class="department-sidebar-image">

                                <img
                                    src="{{ asset('storage/' . $department->image) }}"
                                    alt="{{ $department->name }}"
                                >

                            </div>

                        @endif

                    </div>

                </div>


                {{-- Department Content --}}

                <div class="col-lg-8 order-1 order-xl-2">

                    <div class="department-content-card">


                        {{-- Main Department Image --}}

                        @if($department->image)

                            <div class="department-main-image">

                                <div class="service-img wow img-custom-anim-left">

                                    <img
                                        src="{{ asset('storage/' . $department->image) }}"
                                        alt="{{ $department->name }}"
                                    >

                                </div>

                            </div>

                        @endif


                        {{-- Department Name --}}

                        <h3 class="department-title">
                            {{ $department->name }}
                        </h3>


                        {{-- Short Description --}}

                        @if($department->short_description)

                            <p class="department-description">
                                {{ $department->short_description }}
                            </p>

                        @endif


                        {{-- About Department --}}

                        @if($department->about_heading)

                            <h4 class="department-section-heading">
                                {{ $department->about_heading }}
                            </h4>

                        @endif


                        @if($department->about_description)

                            <p class="department-description">
                                {{ $department->about_description }}
                            </p>

                        @endif


                        {{-- Services --}}

                        @if(!empty($services))

                            <h4 class="department-section-heading">
                                Services
                            </h4>

                            <div class="department-list-box">

                                <ul>

                                    @foreach(
                                        array_slice(
                                            $services,
                                            0,
                                            ceil(count($services) / 2)
                                        ) as $service
                                    )

                                        <li>

                                            <span class="department-check-icon">
                                                <i class="far fa-check"></i>
                                            </span>

                                            <span>
                                                {{ $service }}
                                            </span>

                                        </li>

                                    @endforeach

                                </ul>


                                <ul>

                                    @foreach(
                                        array_slice(
                                            $services,
                                            ceil(count($services) / 2)
                                        ) as $service
                                    )

                                        <li>

                                            <span class="department-check-icon">
                                                <i class="far fa-check"></i>
                                            </span>

                                            <span>
                                                {{ $service }}
                                            </span>

                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        {{-- Specialities --}}

                        @if(!empty($specialities))

                            <h4 class="department-section-heading">
                                Specialities
                            </h4>

                            <div class="department-list-box">

                                <ul>

                                    @foreach(
                                        array_slice(
                                            $specialities,
                                            0,
                                            ceil(count($specialities) / 2)
                                        ) as $speciality
                                    )

                                        <li>

                                            <span class="department-check-icon">
                                                <i class="far fa-check"></i>
                                            </span>

                                            <span>
                                                {{ $speciality }}
                                            </span>

                                        </li>

                                    @endforeach

                                </ul>


                                <ul>

                                    @foreach(
                                        array_slice(
                                            $specialities,
                                            ceil(count($specialities) / 2)
                                        ) as $speciality
                                    )

                                        <li>

                                            <span class="department-check-icon">
                                                <i class="far fa-check"></i>
                                            </span>

                                            <span>
                                                {{ $speciality }}
                                            </span>

                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        {{-- Conditions & Care Areas --}}

                        @if(!empty($conditions))

                            <h4 class="department-section-heading">
                                Conditions & Care Areas
                            </h4>

                            <div class="department-list-box">

                                <ul>

                                    @foreach(
                                        array_slice(
                                            $conditions,
                                            0,
                                            ceil(count($conditions) / 2)
                                        ) as $condition
                                    )

                                        <li>

                                            <span class="department-check-icon">
                                                <i class="far fa-check"></i>
                                            </span>

                                            <span>
                                                {{ $condition }}
                                            </span>

                                        </li>

                                    @endforeach

                                </ul>


                                <ul>

                                    @foreach(
                                        array_slice(
                                            $conditions,
                                            ceil(count($conditions) / 2)
                                        ) as $condition
                                    )

                                        <li>

                                            <span class="department-check-icon">
                                                <i class="far fa-check"></i>
                                            </span>

                                            <span>
                                                {{ $condition }}
                                            </span>

                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        {{-- Patient Care --}}

                        @if($department->patient_care_heading)

                            <h4 class="department-section-heading">
                                {{ $department->patient_care_heading }}
                            </h4>

                        @endif


                        @if($department->patient_care_description)

                            <p class="department-description">
                                {{ $department->patient_care_description }}
                            </p>

                        @endif


                        {{-- Why Choose --}}

                        @if(!empty($whyChoose))

                            <h4 class="department-section-heading">
                                Why Choose Our Department
                            </h4>

                            <div class="department-list-box">

                                <ul>

                                    @foreach(
                                        array_slice(
                                            $whyChoose,
                                            0,
                                            ceil(count($whyChoose) / 2)
                                        ) as $item
                                    )

                                        <li>

                                            <span class="department-check-icon">
                                                <i class="far fa-check"></i>
                                            </span>

                                            <span>
                                                {{ $item }}
                                            </span>

                                        </li>

                                    @endforeach

                                </ul>


                                <ul>

                                    @foreach(
                                        array_slice(
                                            $whyChoose,
                                            ceil(count($whyChoose) / 2)
                                        ) as $item
                                    )

                                        <li>

                                            <span class="department-check-icon">
                                                <i class="far fa-check"></i>
                                            </span>

                                            <span>
                                                {{ $item }}
                                            </span>

                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        {{-- Related Doctors --}}

                        @if($department->doctors->count())

                            <h4 class="department-section-heading">
                                Related Doctors
                            </h4>

                            <div class="row g-3">

                                @foreach($department->doctors as $doctor)

                                    <div class="col-lg-6 col-md-6">

                                        <div class="department-doctor-card">

                                            @if($doctor->image)

                                                <img
                                                    src="{{ asset('storage/' . $doctor->image) }}"
                                                    alt="{{ $doctor->name }}"
                                                    class="department-doctor-image"
                                                >

                                            @endif


                                            <div class="department-doctor-content">

                                                <h5>
                                                    <a href="{{ route('doctors.show', $doctor->slug) }}">
                                                        {{ $doctor->name }}
                                                    </a>
                                                </h5>

                                                <p>
                                                    {{ $doctor->speciality }}
                                                </p>

                                                <a
                                                    href="{{ route('doctors.show', $doctor->slug) }}"
                                                    class="department-doctor-btn"
                                                >
                                                    View Profile
                                                    <i class="far fa-chevron-right"></i>
                                                </a>

                                            </div>

                                        </div>

                                    </div>

                                @endforeach

                            </div>

                        @else

                            <p class="department-no-doctor">
                                No doctors currently assigned to this department.
                            </p>

                        @endif

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

<style>

/* Department Section */

.department-details-section {
    padding: 70px 0 80px;
    background: #f7fbfc;
}

.service-details-wrapper {
    width: 100%;
}


/* Sidebar */

.service-details-sidebar {
    position: sticky;
    top: 100px;
}

.department-sidebar-card {
    padding: 28px;

    background: #ffffff;

    border: 1px solid #e7eef0;
    border-radius: 14px;

    box-shadow: 0 8px 30px rgba(20, 45, 55, 0.06);
}

.department-sidebar-title {
    position: relative;

    margin: 0 0 22px;
    padding-bottom: 15px;

    color: #172b34 !important;

    font-size: 24px !important;
    line-height: 1.3;
    font-weight: 600 !important;
}

.department-sidebar-title::after {
    content: "";

    position: absolute;

    left: 0;
    bottom: 0;

    width: 42px;
    height: 3px;

    background: #08c7bd;

    border-radius: 10px;
}


/* Department List */

.department-list {
    padding: 0;
    margin: 0;

    list-style: none;
}

.department-list li {
    margin-bottom: 20px;
}

.department-list li:last-child {
    margin-bottom: 0;
}

.department-list li a {
    display: flex;
    align-items: center;
    justify-content: space-between;

    min-height: 53px;

    padding: 13px 15px;

    background: #f6f9fa;

    color: #33444b !important;

    border: 1px solid transparent;
    border-radius: 8px;

    text-decoration: none;

    font-size: 18px !important;
    line-height: 1.4;
    font-weight: 500;

    transition: all 0.3s ease;
}

.department-name {
    color: inherit !important;
}

.department-arrow {
    width: 29px;
    height: 29px;

    display: flex;
    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    background: #ffffff;

    border-radius: 50%;

    color: #08c7bd !important;

    font-size: 18px;

    transition: all 0.3s ease;
}

.department-list li a:hover {
    background: #eafafa;

    color: #08a9a1 !important;

    border-color: #d4f1ef;
}

.department-list li a:hover .department-arrow {
    background: #08c7bd;
    color: #ffffff !important;
}


/* Active Department */

.department-list li.active a {
    background: #08c7bd;

    color: #ffffff !important;

    border-color: #08c7bd;

    box-shadow: 0 8px 20px rgba(8, 199, 189, 0.20);
}

.department-list li.active a .department-name {
    color: #ffffff !important;
}

.department-list li.active a .department-arrow {
    background: rgba(255, 255, 255, 0.22);

    color: #ffffff !important;
}


/* Sidebar Image */

.department-sidebar-image {
    margin-top: 25px;

    overflow: hidden;

    border-radius: 14px;

    background: #ffffff;

    box-shadow: 0 8px 30px rgba(20, 45, 55, 0.06);
}

.department-sidebar-image img {
    width: 100%;
    height: auto;

    display: block;

    opacity: 1 !important;
    filter: none !important;
    mix-blend-mode: normal !important;

    transition: transform 0.5s ease;
}

.department-sidebar-image:hover img {
    transform: scale(1.03);
}


/* Main Content */

.department-content-card {
    padding: 32px;

    background: #ffffff;

    border: 1px solid #e7eef0;
    border-radius: 14px;

    box-shadow: 0 8px 30px rgba(20, 45, 55, 0.06);
}


/* Main Image */

.department-main-image {
    margin-bottom: 30px;

    overflow: hidden;

    border-radius: 12px;
}

.department-main-image .service-img {
    margin: 0;
}

.department-main-image .service-img img {
    opacity: 1 !important;
    filter: none !important;
    mix-blend-mode: normal !important;
}


/* Department Title */

.department-title {
    position: relative;

    margin: 0 0 20px;
    padding-bottom: 16px;

    color: #172b34 !important;

    font-size: 38px !important;
    line-height: 1.2;
    font-weight: 600 !important;
}

.department-title::after {
    content: "";

    position: absolute;

    left: 0;
    bottom: 0;

    width: 52px;
    height: 3px;

    background: #08c7bd;

    border-radius: 10px;
}


/* Description */

.department-description {
    margin: 0 0 25px;

    color: #5f6f75 !important;

    font-size: 18px !important;
    line-height: 1.85 !important;
}


/* Section Headings */

.department-section-heading {
    position: relative;

    margin: 34px 0 17px;
    padding-left: 15px;

    color: #172b34 !important;

    font-size: 24px !important;
    line-height: 1.35;

    font-weight: 600 !important;
}

.department-section-heading::before {
    content: "";

    position: absolute;

    left: 0;
    top: 4px;

    width: 4px;
    height: 24px;

    background: #08c7bd;

    border-radius: 10px;
}


/* Information Lists */

.department-list-box {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 12px;

    margin: 20px 0 30px;
    padding: 20px;

    background: #f5fbfb;

    border: 1px solid #e2f0f0;

    border-radius: 10px;
}

.department-list-box ul {
    padding: 0;
    margin: 0;

    list-style: none;
}

.department-list-box li {
    display: flex;
    align-items: center;

    min-height: 50px;

    padding: 11px 14px;

    background: #ffffff;

    border: 1px solid #e8eff0;

    border-radius: 8px;

    color: #4b5c62 !important;

    font-size: 18px !important;
    line-height: 1.5;

    transition: all 0.3s ease;
}

.department-list-box li:hover {
    border-color: #cceeed;

    transform: translateY(-2px);
}

.department-list-box li > span:last-child {
    color: #4b5c62 !important;
}

.department-check-icon {
    width: 29px;
    height: 29px;

    margin-right: 10px;

    display: flex;
    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    background: #e5faf8;

    border-radius: 50%;

    color: #08b9b0 !important;

    font-size: 18px;
}

.department-check-icon i {
    color: #08b9b0 !important;
}


/* Related Doctors */

.department-doctor-card {
    display: flex;
    align-items: center;

    height: 100%;

    padding: 15px;

    gap: 15px;

    background: #ffffff;

    border: 1px solid #e5edef;

    border-radius: 10px;

    transition: all 0.3s ease;
}

.department-doctor-card:hover {
    border-color: #cceeed;

    box-shadow: 0 8px 22px rgba(20, 45, 55, 0.07);

    transform: translateY(-2px);
}

.department-doctor-image {
    width: 80px;
    height: 80px;

    min-width: 80px;

    display: block;

    object-fit: cover;

    border-radius: 9px;

    opacity: 1 !important;
    filter: none !important;
}

.department-doctor-content {
    min-width: 0;

    flex: 1;
}

.department-doctor-content h5 {
    margin: 0 0 6px;

    font-size: 16px !important;
    line-height: 1;

    font-weight: 600;
}

.department-doctor-content h5 a {
    color: #172b34 !important;

    text-decoration: none;
}

.department-doctor-content h5 a:hover {
    color: #08b9b0 !important;
}

.department-doctor-content p {
    margin: 0 0 8px;

    color: #66757c !important;

    font-size: 15px !important;
    line-height: 1;
}


/* Doctor Profile Button */

.department-doctor-btn {
    display: inline-flex;
    align-items: center;

    gap: 7px;

    padding: 8px 13px;

    background: #08c7bd;

    color: #ffffff !important;

    border-radius: 6px;

    font-size: 14px;

    line-height: 1;
    font-weight: 500;

    text-decoration: none;

    transition: all 0.3s ease;
}

.department-doctor-btn i {
    color: #ffffff !important;

    font-size: 12px;
}

.department-doctor-btn:hover {
    background: #079f98;

    color: #ffffff !important;

    transform: translateX(2px);
}


/* No Doctors */

.department-no-doctor {
    margin: 0;

    color: #66757c !important;

    font-size: 16px;

    line-height: 1.7;
}


/* Responsive */

@media (max-width: 1199px) {

    .department-details-section {
        padding: 60px 0 70px;
    }

    .department-content-card {
        padding: 28px;
    }

    .department-title {
        font-size: 35px !important;
    }

}


@media (max-width: 991px) {

    .department-details-section {
        padding: 55px 0 65px;
    }

    .service-details-sidebar {
        position: static;
    }

    .department-sidebar-card {
        margin-bottom: 25px;
    }

    .department-content-card {
        padding: 25px;
    }

    .department-title {
        font-size: 34px !important;
    }

}


@media (max-width: 767px) {

    .department-details-section {
        padding: 45px 0 55px;
    }

    .department-content-card {
        padding: 22px;
    }

    .department-title {
        font-size: 30px !important;
    }

    .department-section-heading {
        font-size: 22px !important;
    }

    .department-description {
        font-size: 15px !important;
    }

    .department-list-box {
        grid-template-columns: 1fr;

        padding: 15px;
    }

}


@media (max-width: 575px) {

    .department-details-section {
        padding: 35px 0 45px;
    }

    .department-sidebar-card {
        padding: 22px;
    }

    .department-content-card {
        padding: 17px;
    }

    .department-title {
        font-size: 27px !important;
    }

    .department-section-heading {
        font-size: 20px !important;
    }

    .department-description {
        font-size: 18px !important;
    }

    .department-list-box {
        padding: 12px;
    }

    .department-list-box li {
        font-size: 18px !important;
    }

    .department-doctor-card {
        padding: 12px;
        gap: 12px;
    }

    .department-doctor-image {
        width: 68px;
        height: 68px;
        min-width: 68px;
    }

    .department-doctor-content h5 {
        font-size: 22px !important;
    }

    .department-doctor-content p {
        font-size: 18px !important;
    }

}

</style>

@endsection