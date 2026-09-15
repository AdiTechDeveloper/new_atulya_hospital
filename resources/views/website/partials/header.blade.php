<!-- Preloader Start -->
<!-- <div id="preloader" class="preloader">

    <div class="animation-preloader">

        <div class="spinner">
        </div>


        <div class="txt-loading">

            <span
                data-text-preloader="A"
                class="letters-loading"
            >
                A
            </span>

            <span
                data-text-preloader="T"
                class="letters-loading"
            >
                T
            </span>

            <span
                data-text-preloader="U"
                class="letters-loading"
            >
                U
            </span>

            <span
                data-text-preloader="L"
                class="letters-loading"
            >
                L
            </span>

            <span
                data-text-preloader="Y"
                class="letters-loading"
            >
                Y
            </span>

            <span
                data-text-preloader="A"
                class="letters-loading"
            >
                A
            </span>

        </div>


        <p class="text-center">
            Loading
        </p>

    </div>


    <div class="loader">

        <div class="row">

            <div class="col-3 loader-section section-left">

                <div class="bg"></div>

            </div>


            <div class="col-3 loader-section section-left">

                <div class="bg"></div>

            </div>


            <div class="col-3 loader-section section-right">

                <div class="bg"></div>

            </div>


            <div class="col-3 loader-section section-right">

                <div class="bg"></div>

            </div>

        </div>

    </div>

</div> -->
<!-- Preloader End -->
<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="#">
                            <img src="{{ asset('assets/img/logo/Atulya-logo.png') }}" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <h3 class="offcanvas-title">Hello There!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, </p>
                <div class="mobile-menu fix mt-3"></div>
                <div class="social-icon d-flex align-items-center">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="offcanvas__contact">
                    <h3>Information</h3>
                    <ul class="contact-list">
                        <li>
                            <span>
                                Address:
                            </span>
                            Atulya Superspeciality Hospital & ICU 206–214, 2nd Floor, Elite Magnum, Bhuyangdev Cross Road, Ahmedabad – 380061, Gujarat
                        </li>
                        <li>
                            <span>
                                Call Us:
                            </span>
                            <a href="#">91 97275 79000 </a>
                        </li>
                        <li>
                            <span>
                                Email:
                            </span>
                            <a href="#">
                                helloseoz@gmial.com
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="theme-btn">
                    <i class="far fa-chevron-right"></i>
                    Appointment
                </a>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Header Top Section Start -->
<div class="header-top-section">
    <div class="container">
        <div class="header-top-wrapper">
            <p>
                Atulya Hospital – Quality Healthcare With Compassionate Care
                <a href="{{ url('/contact') }}">Contact Us</a>.
            </p>

            <ul class="top-list">

                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:+919727579000">
                        +91 97275 79000
                    </a>
                </li>

                <li>
                    <i class="far fa-clock"></i>
                    <p>
                        24/7 Emergency Care
                    </p>
                </li>

                <li>
                    <i class="fal fa-map-pin"></i>
                    <p>
                        Ahmedabad, Gujarat
                    </p>
                </li>

            </ul>
        </div>
    </div>
</div>

<!-- Header Section Start -->
<header id="header-sticky" class="header-section header-1">
    <div class="container">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="header-left">
                    <a href="{{ url('/') }}" class="header-logo1">
                        <img width="220px" src="{{ asset('assets/img/logo/Atulya-logo.png') }}" alt="logo-img">
                    </a>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>

    <!-- ABOUT US -->
    <li>
        <a href="{{ url('/about') }}">
            About Us
        </a>
    </li>


    <!-- SERVICES -->
    <li class="has-dropdown">

        <a href="#">
            Services
            <i class="fas fa-chevron-down"></i>
        </a>

        <ul class="submenu">

            <!-- DEPARTMENTS -->
            <li>
                <a href="{{ url('/departments/urology') }}">
                    Departments
                </a>
            </li>

            <!-- OUR DOCTORS -->
            <li>
                <a href="{{ url('/doctors') }}">
                    Our Doctors
                </a>
            </li>

            <!-- FACILITIES -->
            <li>
                <a href="{{ url('/facilities/25-beds-central-oxygen') }}">
                    Facilities
                </a>
            </li>

            <!-- EMERGENCY & ICU -->
            <li>
                <a href="{{ url('/icu') }}">
                    Emergency & ICU
                </a>
            </li>

        </ul>

    </li>


    <!-- GALLERY -->
    <li>
        <a href="{{ url('/gallery') }}">
            Gallery
        </a>
    </li>


    <!-- BLOG -->
    <li>
        <a href="{{ url('/blog') }}">
            Blog
        </a>
    </li>


    <!-- CONTACT -->
    <li>
        <a href="{{ url('/contact') }}">
            Contact Us
        </a>
    </li>

</ul>
                            </nav>
                        </div>
                    </div>

                    <div class="header-contact-info">
                        <div class="info-items">
                            <div class="icon">
                                <i class="flaticon-support"></i>
                            </div>
                            <div class="content">
                                <span>Call Emergency</span>
                                <h6><a href="tel:+919727579000">91 97275 79000 </a></h6>
                            </div>
                        </div>
                        <a href="{{ url('/contact') }}" class="theme-btn">
                            <i class="far fa-chevron-right"></i>
                            Appointment
                        </a>
                    </div>
                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle">
                            <i class="fal fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Sidebar Area Here -->
<div id="targetElement" class="side_bar slideInRight side_bar_hidden">
    <div class="side_bar_overlay"></div>
    <div class="cart-title mb-50">
        <h4>Shopping cart</h4>
    </div>
    <div class="cartmini__widget">
        <div class="cartmini__widget-item">
            <div class="cartmini__thumb">
                <a href="#">
                    <img src="{{ asset('assets/img/inner/shop/01.png') }}" alt="img">
                </a>
            </div>
            <div class="cartmini__content">
                <h5><a href="#">Tooth Sensitivity Kit</a></h5>
                <div class="cartmini__price-wrapper">
                    <span class="cartmini__price">$46.00</span>
                    <span class="cartmini__quantity">x2</span>
                </div>
            </div>
            <button class="cartmini__del"><i class="fal fa-times"></i></button>
        </div>
        <div class="cartmini__widget-item">
            <div class="cartmini__thumb">
                <a href="#">
                    <img src="{{ asset('assets/img/inner/shop/02.png') }}" alt="img">
                </a>
            </div>
            <div class="cartmini__content">
                <h5><a href="#">Dental Care Travel Kit</a></h5>
                <div class="cartmini__price-wrapper">
                    <span class="cartmini__price">$78.00</span>
                    <span class="cartmini__quantity">x1</span>
                </div>
            </div>
            <button class="cartmini__del"><i class="fal fa-times"></i></button>
        </div>
        <div class="cartmini__widget-item">
            <div class="cartmini__thumb">
                <a href="#">
                    <img src="{{ asset('assets/img/inner/shop/03.png') }}" alt="img">
                </a>
            </div>
            <div class="cartmini__content">
                <h5><a href="#">Nighttime Oral Guard</a></h5>
                <div class="cartmini__price-wrapper">
                    <span class="cartmini__price">$98.00</span>
                    <span class="cartmini__quantity">x3</span>
                </div>
            </div>
            <button class="cartmini__del"><i class="fal fa-times"></i></button>
        </div>
        <div class="cartmini__checkout">
            <div class="cartmini__checkout-title mb-4">
                <h4>Subtotal:</h4>
                <span>$113.00</span>
            </div>
            <div class="cartmini__checkout-btn">
                <a href="#" class="theme-btn mb-2 w-100"> view cart</a>
                <a href="#" class="theme-btn w-100 style-2"> checkout</a>
            </div>
        </div>
    </div>
    <button id="closeButton" class="x-mark-icon"><i class="fas fa-times"></i></button>
</div>

<!-- header Search Section Start -->
<div class="header-search-bar d-flex align-items-center">
    <button class="search-close">×</button>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="search-bar">
                    <div class="contact-form-box contact-search-form-box">
                        <form action="#">
                            <input type="email" placeholder="Search here...">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                        <p>Type above and press Enter to search. Press Close to cancel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>