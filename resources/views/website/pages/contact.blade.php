@extends('website.layout.app')

@section('title', 'Contact Us')

@section('content')


<!-- Appointment Section Start -->
<section class="appointment-section atulya-appointment-section">

    <div class="container">

        <div class="appointment-wrapper">

            <div class="row g-4 align-items-stretch">

                <!-- APPOINTMENT FORM -->
                <div class="col-lg-8">

                    <div class="appointment-items">

                        <h3>Book An Appointment</h3>
                        @if(session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                        @endif
                       <form action="{{ route('appointment.store') }}" method="POST">

                            @csrf

                            <div class="row">

                                <!-- NAME -->
                                <div class="col-md-6">
                                    <div class="form-clt">

                                        <p>Name*</p>

                                        <input
                                            type="text"
                                            name="name"
                                            value="{{ old('name') }}"
                                            placeholder="Enter Your Name"
                                            required>
                                        @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>


                                <!-- PHONE -->
                                <div class="col-md-6">
                                    <div class="form-clt">

                                        <p>Phone*</p>

                                        <input
                                            type="tel"
                                            name="phone"
                                            value="{{ old('phone') }}"
                                            placeholder="Enter Your Phone Number"
                                            required>
                                        @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>


                                <!-- DEPARTMENT -->
                                <div class="col-md-6">
                                    <div class="form-clt">

                                        <p>Department <span>(Optional)</span></p>

                                        <div class="form">

                                            <select name="department" id="appointmentDepartment" class="w-100">
                                                <option value="">Select Department</option>

                                                @foreach($departments as $department)
                                                <option
                                                    value="{{ $department }}"
                                                    {{ old('department') == $department ? 'selected' : '' }}>
                                                    {{ ucwords($department) }}
                                                </option>
                                                @endforeach
                                            </select>

                                            @error('department')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>

                                    </div>
                                </div>


                                <!-- DOCTOR -->
                                <div class="col-md-6">
                                    <div class="form-clt">

                                        <p>Doctor <span>(Optional)</span></p>

                                        <div class="form">

                                            <select name="doctor_id" id="appointmentDoctor" class="w-100" disabled>
                                                <option value="">Select Department First</option>

                                                @foreach($doctors as $doctor)
                                                <option
                                                    value="{{ $doctor->id }}"
                                                    data-department="{{ trim($doctor->department) }}"
                                                    style="display:none;"
                                                    {{ old('doctor_id') == $doctor->id ? 'selected' : '' }}>
                                                    {{ $doctor->name }}
                                                </option>
                                                @endforeach
                                            </select>

                                            @error('doctor_id')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>

                                    </div>
                                </div>


                                <!-- DATE -->
                                <div class="col-md-6">
                                    <div class="form-clt">

                                        <p>Date*</p>
                                        <input
                                            type="date"
                                            name="appointment_date"
                                            value="{{ old('appointment_date') }}"
                                            min="{{ date('Y-m-d') }}"
                                            required>

                                        @error('appointment_date')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>


                                <!-- TIME -->
                                <div class="col-md-6">
                                    <div class="form-clt">

                                        <p>Time <span>(Optional)</span></p>

                                        <input
                                            type="time"
                                            name="appointment_time"
                                            value="{{ old('appointment_time') }}">

                                        @error('appointment_time')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>


                                <!-- MESSAGE -->
                                <div class="col-12">
                                    <div class="form-clt">

                                        <p>Message <span>(Optional)</span></p>

                                        <textarea
                                            name="message"
                                            rows="3"
                                            placeholder="Write Your Message">{{ old('message') }}</textarea>

                                        @error('message')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>


                                <!-- BUTTON -->
                                <div class="col-12">
                                    <div class="form-clt">

                                        <button
                                            type="submit"
                                            class="theme-btn">
                                            <i class="far fa-chevron-right"></i>
                                            Submit Appointment
                                        </button>

                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>


                <!-- TWO IMAGES -->
                <div class="col-lg-4">

                    <div class="appointment-images">

                        <div class="appointment-image-item">

                            <img
                                src="{{ asset('assets/img/inner/contact/contact-img.jpg') }}"
                                alt="Atulya Super Speciality Hospital">

                        </div>

                        <div class="appointment-image-item">

                            <img
                               src="{{ asset('assets/img/home-1/hero/img1.png') }}"
                                alt="Atulya Super Speciality Hospital">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
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


@endsection