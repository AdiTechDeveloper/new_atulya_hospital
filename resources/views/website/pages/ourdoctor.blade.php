@extends('website.layout.app')

@section('title', 'Our Doctors')

@section('content')

<section class="team-section fix ">

    <div class="container">

        {{-- Section Heading --}}
        <div class="section-title text-center mb-5 wow fadeInUp"
             data-wow-delay=".2s">

            <span class="subtitle">
                OUR DOCTORS
            </span>

            <h2>
                Meet Our Expert Doctors
            </h2>

            <p>
                Our experienced specialists are dedicated to providing
                quality healthcare with compassionate patient care.
            </p>

        </div>


        {{-- Doctors --}}
        <div class="row g-4">

            @foreach($doctors as $doctor)

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
                     data-wow-delay=".2s">

                    {{-- Doctor Card --}}
                    <div class="team-box-items mt-0 h-100 d-flex flex-column border rounded-3 shadow-sm overflow-hidden">

                        {{-- Doctor Image --}}
                        <div class="team-image p-3">

                            <img
                                src="{{ asset($doctor['image']) }}"
                                alt="{{ $doctor['name'] }}"
                                class="w-75 h-auto d-block mx-auto"
                            >

                            {{-- Department Badge --}}
                            <span class="post-box">
                                {{ $doctor['department'] }}
                            </span>

                        </div>


                        {{-- Doctor Content --}}
                        <div class="team-content d-flex flex-column flex-grow-1 p-4">

                            {{-- Doctor Name --}}
                            <h3 class="mb-2">
                                <a href="{{ route('doctors.show', $doctor['slug']) }}">
                                    {{ $doctor['name'] }}
                                </a>
                            </h3>


                            {{-- Specialization --}}
                            <p class="mb-2">
                                {{ $doctor['specialization'] }}
                            </p>


                            {{-- Qualification --}}
                            <p class="mb-3">
                                <strong>
                                    {{ $doctor['qualification'] }}
                                </strong>
                            </p>


                            {{-- Appointment --}}
                            <div class="phone-box mb-2">

                                <i class="fas fa-phone-alt"></i>

                                <span>
                                    <b>Appointment</b> :
                                    <a href="tel:+919727579000">
                                        +91 97275 79000
                                    </a>
                                </span>

                            </div>


                            {{-- OPD Timing --}}
                            <div class="phone-box mb-3">

                                <i class="far fa-clock"></i>

                                <span>
                                    <b>OPD Timing</b> :
                                    {{ $doctor['timing'] }}
                                </span>

                            </div>


                            {{-- View Profile --}}
                            <div class="mt-auto pt-2">

                                <a
                                    href="{{ route('doctors.show', $doctor['slug']) }}"
                                    class="theme-btn"
                                >
                                    <i class="far fa-chevron-right"></i>
                                    View Profile
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endsection