@extends('website.layout.app')

@section('title', 'Contact Us')

@section('content')

```
<!-- Contact-Appointment Section Start -->
<section class="contact-appointment-section fix">

    <div class="container">

        <div class="contact-appointment-wrapper-5">

            <div class="row g-4">

                <!-- Contact Image -->
                <div class="col-lg-6">

                    <div class="contact-appointment-left-item">

                        <div class="contact-appointment-image wow img-custom-anim-left"
                             data-wow-duration="1.3s"
                             data-wow-delay="0.3s">

                            <img src="{{ asset('assets/img/inner/contact/contact.png') }}"
                                 alt="Atulya Hospital">

                        </div>

                    </div>

                </div>


                <!-- Appointment Form -->
                <div class="col-lg-6">

                    <div class="contact-appointment-box">

                        <h3>Book An Appointment</h3>

                        <form action="#" method="POST">

                            @csrf

                            <div class="row g-4">

                                <!-- Name -->
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">

                                    <div class="form-clt">

                                        <span>Name</span>

                                        <input type="text"
                                               name="name"
                                               placeholder="Your Name"
                                               required>

                                    </div>

                                </div>


                                <!-- Email -->
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">

                                    <div class="form-clt">

                                        <span>Email</span>

                                        <input type="email"
                                               name="email"
                                               placeholder="Your Email"
                                               required>

                                    </div>

                                </div>


                                <!-- Phone -->
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">

                                    <div class="form-clt">

                                        <span>Phone</span>

                                        <input type="tel"
                                               name="phone"
                                               placeholder="Your Phone Number"
                                               required>

                                    </div>

                                </div>


                                <!-- Department -->
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">

                                    <div class="form-clt">

                                        <span>Department</span>

                                        <div class="form">

                                            <select name="department"
                                                    class="single-select w-100"
                                                    required>

                                                <option value="">Select Department</option>

                                                <option value="orthopaedics">
                                                    Orthopaedics
                                                </option>

                                                <option value="joint-replacement">
                                                    Joint Replacement
                                                </option>

                                                <option value="general-surgery">
                                                    General Surgery
                                                </option>

                                                <option value="general-medicine">
                                                    General Medicine
                                                </option>

                                                <option value="ent">
                                                    ENT
                                                </option>

                                                <option value="urology">
                                                    Urology
                                                </option>

                                                <option value="critical-care">
                                                    Critical Care
                                                </option>

                                                <option value="emergency">
                                                    Emergency Care
                                                </option>

                                                <option value="other">
                                                    Other
                                                </option>

                                            </select>

                                        </div>

                                    </div>

                                </div>


                                <!-- Message -->
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">

                                    <div class="form-clt">

                                        <span>Your Message</span>

                                        <textarea name="message"
                                                  id="message"
                                                  placeholder="Write your message..."></textarea>

                                    </div>

                                </div>


                                <!-- Submit -->
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">

                                    <button type="submit" class="theme-btn">

                                        <i class="far fa-chevron-right"></i>

                                        Book Your Appointment

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

                        <a href="tel:+919727579000">

                            +91 97275 79000

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
                      Atulya Superspeciality Hospital & ICU, 206–214, 2nd Floor, Elite Magnum, Bhuyangdev Cross Road, Ahmedabad – 380061, Gujarat

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
                src="https://www.google.com/maps?q=Atulya+Super+Speciality+Hospital+%26+ICU,+2nd+Floor,+Elite+Magnum,+Bhuyangdev+Cross+Road,+Ahmedabad,+Gujarat+380061&output=embed"
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
