@extends('website.layout.app')

@section('title', $department->name)

@section('content')

@php
$services = $department->services ?? [];
$specialities = $department->specialities ?? [];
$conditions = $department->conditions ?? [];
$whyChoose = $department->why_choose ?? [];
@endphp

<!-- =========================
        Department Details
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

                        <!-- Departments List -->

                        <div class="sidebar-widget">

                            <ul class="wow fadeInUp" data-wow-delay=".3s">

                                @foreach($departments as $item)

                                <li>

                                    <a href="{{ route('departments.show', $item->slug) }}">

                                        <span>
                                            {{ $item->name }}
                                        </span>

                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>

                                    </a>

                                </li>

                                @endforeach

                            </ul>

                        </div>


                        <!-- Department Image -->

                        <div
                            class="sidebar-widget-image wow fadeInUp"
                            data-wow-delay=".5s">

                            @if($department->image)

                            <img
                                src="{{ asset('storage/' . $department->image) }}"
                                alt="{{ $department->name }}">

                            @endif

                        </div>

                    </div>

                </div>


                <!-- =========================
                        RIGHT CONTENT
                    ========================== -->

                <div class="col-lg-8 order-1 order-xl-2">

                    <div class="service-details-right-items">


                        <!-- Main Department Image -->

                        @if($department->image)

                        <div class="service-img wow img-custom-anim-left">

                            <img
                                src="{{ asset('storage/' . $department->image) }}"
                                alt="{{ $department->name }}">

                        </div>

                        @endif


                        <!-- Department Name -->

                        <h3>
                            {{ $department->name }}
                        </h3>


                        <!-- Short Description -->

                        @if($department->short_description)

                        <p>
                            {{ $department->short_description }}
                        </p>

                        @endif


                        <!-- =========================
                                ABOUT DEPARTMENT
                            ========================== -->

                        @if($department->about_heading)

                        <h4>
                            {{ $department->about_heading }}
                        </h4>

                        @endif

                        @if($department->about_description)

                        <p>
                            {{ $department->about_description }}
                        </p>

                        @endif


                        <!-- =========================
                                SERVICES
                            ========================== -->

                        @if(!empty($services))

                        <h4>
                            Services
                        </h4>

                        <div class="list-box">

                            <ul>

                                @foreach(
                                array_slice(
                                $services,
                                0,
                                ceil(count($services) / 2)
                                ) as $service
                                )

                                <li>

                                    <i class="far fa-check"></i>

                                    {{ $service }}

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

                                    <i class="far fa-check"></i>

                                    {{ $service }}

                                </li>

                                @endforeach

                            </ul>

                        </div>

                        @endif


                        <!-- =========================
                                SPECIALITIES
                            ========================== -->

                        @if(!empty($specialities))

                        <h4>
                            Specialities
                        </h4>

                        <div class="list-box">

                            <ul>

                                @foreach(
                                array_slice(
                                $specialities,
                                0,
                                ceil(count($specialities) / 2)
                                ) as $speciality
                                )

                                <li>

                                    <i class="far fa-check"></i>

                                    {{ $speciality }}

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

                                    <i class="far fa-check"></i>

                                    {{ $speciality }}

                                </li>

                                @endforeach

                            </ul>

                        </div>

                        @endif


                        <!-- =========================
                                CONDITIONS & CARE AREAS
                            ========================== -->

                        @if(!empty($conditions))

                        <h4>
                            Conditions & Care Areas
                        </h4>

                        <div class="list-box">

                            <ul>

                                @foreach(
                                array_slice(
                                $conditions,
                                0,
                                ceil(count($conditions) / 2)
                                ) as $condition
                                )

                                <li>

                                    <i class="far fa-check"></i>

                                    {{ $condition }}

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

                                    <i class="far fa-check"></i>

                                    {{ $condition }}

                                </li>

                                @endforeach

                            </ul>

                        </div>

                        @endif


                        <!-- =========================
                                PATIENT CARE
                            ========================== -->

                        @if($department->patient_care_heading)

                        <h4>
                            {{ $department->patient_care_heading }}
                        </h4>

                        @endif

                        @if($department->patient_care_description)

                        <p>
                            {{ $department->patient_care_description }}
                        </p>

                        @endif


                        <!-- =========================
                                WHY CHOOSE
                            ========================== -->

                        @if(!empty($whyChoose))

                        <h4>
                            Why Choose Our Department
                        </h4>

                        <div class="list-box">

                            <ul>

                                @foreach(
                                array_slice(
                                $whyChoose,
                                0,
                                ceil(count($whyChoose) / 2)
                                ) as $item
                                )

                                <li>

                                    <i class="far fa-check"></i>

                                    {{ $item }}

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

                                    <i class="far fa-check"></i>

                                    {{ $item }}

                                </li>

                                @endforeach

                            </ul>

                        </div>

                        @endif




                       <!-- Related Doctors -->

@if($department->doctors->count())

    <h4>
        Related Doctors
    </h4>

    <div class="row g-3">

        @foreach($department->doctors as $doctor)

            <div class="col-lg-6 col-md-6">

                <div
                    style="
                        border: 1px solid #e2e2e2;
                        border-radius: 10px;
                        padding: 12px;
                        display: flex;
                        align-items: center;
                        gap: 14px;
                        height: 100%;
                        background: #fff;
                    "
                >

                    {{-- Doctor Image --}}

                    @if($doctor->image)

                        <img
                            src="{{ asset('storage/' . $doctor->image) }}"
                            alt="{{ $doctor->name }}"
                            style="
                                width: 75px;
                                height: 75px;
                                min-width: 75px;
                                object-fit: cover;
                                border-radius: 8px;
                            "
                        >

                    @endif


                    {{-- Doctor Details --}}

                    <div>

                        <h5 style="margin: 0 0 5px 0;">
                            <a href="{{ route('doctors.show', $doctor->slug) }}">
                                {{ $doctor->name }}
                            </a>
                        </h5>

                        <p style="margin: 0 0 3px 0;">
                            {{ $doctor->speciality }}
                        </p>


                    </div>

                </div>

            </div>

        @endforeach

    </div>

@else

    <p>
        No doctors currently assigned to this department.
    </p>

@endif

</section>


@endsection