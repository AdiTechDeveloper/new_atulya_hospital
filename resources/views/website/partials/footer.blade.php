
<!-- Footer Section Start -->
<footer class="footer-section   mt-10  section-bg-2 fix">

    <div class="left-shape float-bob-y">
        <img src="{{ asset('assets/img/home-1/footer/left-shape.png') }}" alt="img">
    </div>

    <div class="right-shape float-bob-x">
        <img src="{{ asset('assets/img/home-1/footer/right-shape.png') }}" alt="img">
    </div>

    <div class="top-shape float-bob-y">
        <img src="{{ asset('assets/img/home-1/footer/top.png') }}" alt="img">
    </div>

    <div class="container">
        <div class="footer-widget-wrapper">

            <div class="row">

                <!-- About Hospital -->
                <div class="col-xxl-4 col-xl-4 colo-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                     data-wow-delay=".2s">

                    <div class="single-footer-widget style-bg-white">

                        <div class="widget-head">
                            <a href="{{ url('/') }}" class="footer-logo">
                                <img width="150px"
                                     src="{{ asset('assets/img/logo/Atulya-Logo.png') }}"
                                     alt="Atulya Hospital">
                            </a>
                        </div>

                        <div class="footer-content">

                            <p>
                                Atulya Hospital is committed to providing
                                compassionate, comprehensive and quality
                                healthcare with a patient-centred approach.
                            </p>

                            <ul>
                                <li>
                                    Monday - Friday
                                    <span>9AM - 10PM</span>
                                </li>

                                <li>
                                    Saturday
                                    <span>9AM - 8PM</span>
                                </li>

                                <li>
                                    Sunday
                                    <span>9AM - 12AM</span>
                                </li>
                            </ul>

                            <div class="icon">

                                <img src="{{ asset('assets/img/home-1/hero/feature-3.png') }}"
                                     alt="Appointment">

                                <div class="content">

                                    <p>
                                        For Appointments
                                    </p>

                                    <h4>
                                        <a href="tel:+919727579000">
                                            +91 97275 79000
                                        </a>
                                    </h4>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Quick Links + Services -->
                <div class="col-xxl-4 col-xl-3 colo-lg-4 col-md-6 ps-lg-5 col-sm-12 wow fadeInUp"
                     data-wow-delay=".4s">

                    <div class="single-footer-widget-area">

                        <!-- Quick Links -->
                        <div class="single-footer-widget">

                            <div class="widget-head">
                                <h3>Quick Links</h3>
                            </div>

                            <ul class="list-area">

                                <li>
                                    <a href="{{ url('/') }}">
                                        Home
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/about') }}">
                                        About Us
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/doctors') }}">
                                        Our Doctors
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/departments') }}">
                                        Departments
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ url('/contact') }}">
                                        Contact Us
                                    </a>
                                </li>

                            </ul>

                        </div>


                        <!-- Our Services -->
                        <div class="single-footer-widget">

                            <div class="widget-head">
                                <h3>Our Services</h3>
                            </div>

                            <ul class="list-area">

                                <li>
                                    <a href="{{ url('/departments/orthopedic') }}">
                                        Orthopedic
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ url('/departments/ent') }}">
                                        ENT
                                    </a>
                                </li>
                                 <li>
                                    <a href="{{ url('/departments/rheumatology') }}">
                                        RHEUMATOLOGY
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/departments/urology') }}">
                                        UROLOGY
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/departments/onco-surgery') }}">
                                       General Surgery
                                    </a>
                                </li>
                                 <li>
                                    <a href="{{ url('/departments/critical-care') }}">
                                        Critical Care
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/departments/physiotherapy') }}">
                                        Physician
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>


                <!-- Recent Posts -->
                {{-- <div class="col-xxl-3 col-xl-3 colo-lg-4 col-md-6 ps-lg-5 col-sm-6 wow fadeInUp"
                     data-wow-delay=".6s">

                    <div class="single-footer-widget">

                        <div class="widget-head">
                            <h3>Health & Wellness</h3>
                        </div>

                        <ul class="recent-post">

                            <li>

                                <div class="thumb">
                                    <img src="{{ asset('assets/img/home-1/footer/post-1.png') }}"
                                         alt="Healthcare">
                                </div>

                                <div class="content">

                                    <p>Health & Wellness</p>

                                    <h4>
                                        <a href="#">
                                            Understanding the Importance of Regular Health Checkups
                                        </a>
                                    </h4>

                                </div>

                            </li>


                            <li>

                                <div class="thumb">
                                    <img src="{{ asset('assets/img/home-1/footer/post-2.png') }}"
                                         alt="Heart Health">
                                </div>

                                <div class="content">

                                    <p>Patient Care</p>

                                    <h4>
                                        <a href="#">
                                            Simple Steps to Maintain a Healthy Heart
                                        </a>
                                    </h4>

                                </div>

                            </li>


                            <li>

                                <div class="thumb">
                                    <img src="{{ asset('assets/img/home-1/footer/post-3.png') }}"
                                         alt="Healthy Lifestyle">
                                </div>

                                <div class="content">

                                    <p>Healthy Living</p>

                                    <h4>
                                        <a href="#">
                                            Tips for a Healthier and Active Lifestyle
                                        </a>
                                    </h4>

                                </div>

                            </li>

                        </ul>

                    </div>

                </div> --}}


                <!-- Contact Us -->
                <div class="col-xxl-4 col-xl-4 colo-lg-4 col-md-6 ps-xxl-5 wow fadeInUp"
                     data-wow-delay=".8s">

                    <div class="single-footer-widget">

                        <div class="widget-head">
                            <h3>Contact Us</h3>
                        </div>

                        <div class="footer-content">

                            <p class="text-white">
                                Atulya Hospital is dedicated to providing
                                accessible and compassionate healthcare
                                with a focus on patient comfort and well-being.
                            </p>

                            <ul class="footer-contect">

                                <!-- Phone -->
                                <li>

                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>

                                    <div class="content">

                                        <p>
                                            <a href="tel:+919727579000">
                                                +91 97275 79000
                                            </a>
                                        </p>

                                    </div>

                                </li>


                                <!-- Email -->
                                <li>

                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>

                                    <div class="content">

                                        <p>
                                            <a href="mailto:info@atulyahospital.com">
                                                info@atulyahospital.com
                                            </a>
                                        </p>

                                    </div>

                                </li>


                                <!-- Address -->
                                <li>

                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>

                                    <div class="content">

                                        <p>
                                            Atulya Superspeciality Hospital & ICU,
                                            206–214, 2nd Floor, Elite Magnum,
                                            Bhuyangdev Cross Road,
                                            Ahmedabad – 380061, Gujarat
                                        </p>

                                    </div>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>


    <!-- Footer Bottom -->
    <div class="footer-bottom wow fadeInUp">

        <div class="container">

            <div class="footer-bottom-wrapper">

                <p>
                    Copyright © {{ date('Y') }} Atulya Hospital.
                    All Rights Reserved.
                </p>

                <div class="social-icon d-flex align-items-center">

                    <a href="https://www.facebook.com/AtulyaSuperSpecialityHospital/"
                       target="_blank"
                       aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="https://www.youtube.com/@atulyasuperspecialityhospital"
                       target="_blank"
                       aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>

                    <a href="https://maps.app.goo.gl/Q57Xx13m5LiAcwwA6"
                       target="_blank"
                       aria-label="Google Maps">
                        <i class="fas fa-map-marker-alt"></i>
                    </a>

                    <a href="https://www.instagram.com/atulya_superspeciality/"
                       target="_blank"
                       aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>

