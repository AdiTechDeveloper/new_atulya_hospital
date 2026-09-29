@extends('website.layout.app')

@section('title', 'Our Doctors')

@section('page-banner')

    @include('website.partials.page-banner', [
        'title' => 'Our Doctors'
    ])

@endsection

@section('content')


<section class="team-section fix atulya-doctors-section">

    <div class="container pb-10">

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


        <div class="row g-4">

            @foreach($doctors as $doctor)

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
                    data-wow-delay=".2s">

                    <div class="team-box-items mt-0 h-100 d-flex flex-column border rounded-3 shadow-sm overflow-hidden">

                        <div class="team-image p-3">

                            <img
                                src="{{ asset('storage/' . $doctor->image) }}"
                                alt="{{ $doctor->name }}"
                                class="w-75 h-auto d-block mx-auto"
                            >

                            <span class="post-box">
                                {{ $doctor->department }}
                            </span>

                        </div>


                        <div class="team-content d-flex flex-column flex-grow-1 p-4">

                            <h3 class="mb-2">

                                <a href="{{ route('doctors.show', $doctor->slug) }}">
                                    {{ $doctor->name }}
                                </a>

                            </h3>


                            <p class="mb-2">
                                {{ $doctor->speciality }}
                            </p>


                            <p class="mb-3">

                                <strong>
                                    {{ $doctor->qualification }}
                                </strong>

                            </p>


                            <div class="mt-auto pt-2">

                                <a
                                    href="{{ route('doctors.show', $doctor->slug) }}"
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