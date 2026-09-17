<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="#">
                            <img
                                src="{{ asset(setting('logo')) }}"
                                alt="{{ setting('hospital_name') }}"> </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                {{-- <h3 class="offcanvas-title">Hello There!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, </p> --}}
                <div class="mobile-nav-menu mt-3">

                    <ul>

                        {{-- ABOUT --}}
                        <li>
                            <a href="{{ url('/about') }}">
                                About Us
                            </a>
                        </li>


                        {{-- SERVICES --}}
                        <li class="mobile-has-dropdown">

                            <div class="mobile-menu-link">
                                <a href="javascript:void(0);">
                                    Services
                                </a>

                                <button type="button" class="mobile-submenu-toggle">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>

                            <ul class="mobile-submenu">

                                <li>
                                    <a href="{{ url('/departments/urology') }}">
                                        Departments
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/doctors') }}">
                                        Our Doctors
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/facilities/25-beds-central-oxygen') }}">
                                        Facilities
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/icu') }}">
                                        Emergency & ICU
                                    </a>
                                </li>

                            </ul>

                        </li>


                        {{-- GALLERY --}}
                        <li>
                            <a href="{{ url('/gallery') }}">
                                Gallery
                            </a>
                        </li>


                        {{-- BLOG --}}
                        <li>
                            <a href="{{ url('/blog') }}">
                                Blog
                            </a>
                        </li>


                        {{-- CONTACT --}}
                        <li>
                            <a href="{{ url('/contact') }}">
                                Contact Us
                            </a>
                        </li>

                    </ul>

                </div>
                <div class="social-icon d-flex align-items-center">
                    <a href="https://www.facebook.com/AtulyaSuperSpecialityHospital/" target="_blank"
                        aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="https://www.youtube.com/@atulyasuperspecialityhospital" target="_blank"
                        aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://maps.app.goo.gl/Q57Xx13m5LiAcwwA6" target="_blank" aria-label="Google Maps">
                        <i class="fas fa-map-marker-alt"></i>
                    </a>

                    <a href="https://www.instagram.com/atulya_superspeciality/" target="_blank" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="offcanvas__contact">
                    <h3>Information</h3>
                    <ul class="contact-list">
                        <li>
                            <span>
                                Address:
                            </span>
                            Atulya Superspeciality Hospital & ICU 206–214, 2nd Floor, Elite Magnum, Bhuyangdev Cross
                            Road, Ahmedabad – 380061, Gujarat
                        </li>
                        <li>
                            <span>
                                Call Us:
                            </span>
                            <a href="{{ setting('phone') }}">{{ setting('phone') }} </a>
                        </li>
                        <li>
                            <span>
                                Email:
                            </span>
                            <a href="mailto:info@atulyahospital.com">
                                info@atulyahospital.com
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
               {{ setting('hospital_name') }} – Quality Healthcare With Compassionate Care
                <a href="{{ url('/contact') }}">Contact Us</a>.
            </p>

            <ul class="top-list">

                <li>
                    <i class="fas fa-phone"></i>
                    <a href="{{ setting('phone') }}">
                        {{ setting('phone') }}
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
                        <div class="main-menu desktop-menu">
                            <nav>
                                <ul>

                                    {{-- ABOUT US --}}
                                    <li>
                                        <a href="{{ url('/about') }}">
                                            About Us
                                        </a>
                                    </li>


                                    {{-- SERVICES --}}
                                    <li class="mobile-has-dropdown">

                                        <div class="mobile-menu-link">
                                            <a href="javascript:void(0);">
                                                Services
                                            </a>

                                            <button type="button" class="mobile-submenu-toggle">
                                                <i class="fas fa-chevron-down"></i>
                                            </button>
                                        </div>

                                        <ul class="mobile-submenu">

                                            <li>
                                                <a href="{{ url('/departments') }}">
                                                    Departments
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/doctors') }}">
                                                    Our Doctors
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/facilities') }}">
                                                    Facilities
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/icu') }}">
                                                    Emergency & ICU
                                                </a>
                                            </li>

                                        </ul>

                                    </li>


                                    {{-- GALLERY --}}
                                    <li>
                                        <a href="{{ url('/gallery') }}">
                                            Gallery
                                        </a>
                                    </li>


                                    {{-- BLOG --}}
                                    <li>
                                        <a href="{{ url('/blog') }}">
                                            Blog
                                        </a>
                                    </li>


                                    {{-- CONTACT --}}
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
                                <h6><a href="{{ setting('phone') }}">{{ setting('phone') }}</a></h6>
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

<style>
    /* =========================================
       MOBILE & RESPONSIVE HEADER FIXES
    ========================================= */

    /* Ensure the main header container behaves like a flex row */
    .header-main {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px 0;
    }

    .header-left {
        max-width: 60%;
    }


    .header-right {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    /* Hide desktop menu items and emergency contact info on mobile devices */
    @media (max-width: 1199px) {
        .desktop-menu {
            display: none !important;
        }

        .header-contact-info {
            display: none !important;
        }
    }

    /* Hamburger Toggle Styling */
    .header__hamburger {
        cursor: pointer;
        font-size: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* =========================================
       MOBILE OFFCANVAS MENU STYLING
    ========================================= */

    .mobile-nav-menu {
        width: 100%;
    }

    .mobile-nav-menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mobile-nav-menu>ul>li {
        border-bottom: 1px solid #eeeeee;
    }

    .mobile-nav-menu li a {
        display: block;
        padding: 15px 5px;
        color: #111;
        font-size: 16px;
        font-weight: 500;
        text-decoration: none;
    }

    .mobile-nav-menu li a:hover {
        color: #00aaa8;
    }

    /* Services Dropdown row */
    .mobile-menu-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .mobile-menu-link>a {
        flex: 1;
    }

    /* Dropdown button */
    .mobile-submenu-toggle {
        width: 28px;
        height: 45px;
        border: 0;
        background: transparent;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .mobile-submenu-toggle i {
        font-size: 13px;
        transition: transform 0.3s ease;
    }

    .mobile-has-dropdown {
        position: relative;
    }

    /* Mobile submenu */
    .mobile-submenu {
        display: none;
        position: absolute;
        top: 100%;
        /* parent li ke turant neeche */
        left: 0;
        width: 100%;
        z-index: 999999;
        /* offcanvas (99999) se bhi upar */
        padding-left: 15px !important;
        background: #f8f8f8;
        list-style: none;
        margin: 0;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        /* max-height: 250px;      bahut lambi list ho to scroll aa jaye */
        overflow-y: auto;
    }

    .mobile-submenu li {
        display: block !important;
        width: 100%;
        float: none !important;
        border-bottom: 1px solid #eeeeee;
    }

    .mobile-submenu li a {
        display: block !important;
        width: 100%;
        padding: 12px 10px;
        font-size: 14px;
        color: #333;
    }

    /* Active submenu */
    .mobile-has-dropdown.active .mobile-submenu {
        display: flex;
        flex-direction: column;
    }

    .mobile-has-dropdown.active .mobile-submenu-toggle i {
        transform: rotate(180deg);
    }

    /* =========================================
       OFFCANVAS DRAWER & OVERLAY
    ========================================= */

    .offcanvas__info {
        position: fixed;
        top: 0;
        right: -400px;
        width: 400px;
        max-width: 90%;
        height: 100vh;
        background: #fff;
        z-index: 99999;
        overflow-y: auto;
        transition: right 0.4s ease;
        padding: 20px;
    }

    .offcanvas__info.info-open {
        right: 0;
    }

    .offcanvas__overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 99998;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .offcanvas__overlay.overlay-open {
        opacity: 1;
        visibility: visible;
    }

    @media (max-width: 575px) {
        .offcanvas__info {
            width: 100%;
            max-width: 100%;
            right: -100%;
        }

        .offcanvas__info.info-open {
            right: 0;
        }
    }

    /* Mobile submenu initial state */
    .mobile-submenu {
        display: none;
        /* jQuery will override this to block/inline when toggled */
        padding-left: 15px !important;
        background: #f8f8f8;
        list-style: none;
        margin: 0;
        width: 140px;
    }

    .mobile-submenu li {
        border-bottom: 1px solid #eeeeee;
    }

    .mobile-submenu li a {
        padding: 12px 10px;
        font-size: 14px;
        color: #333;
    }

    /* Arrow rotation when active */
    .mobile-has-dropdown.active>.mobile-menu-link .mobile-submenu-toggle i {
        transform: rotate(180deg);
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        /* ---------------------------------------------------------
           Open Mobile Offcanvas
        --------------------------------------------------------- */
        document.querySelectorAll('.sidebar__toggle').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('.offcanvas__info').classList.add('info-open');
                document.querySelector('.offcanvas__overlay').classList.add('overlay-open');
            });
        });

        /* ---------------------------------------------------------
           Close Mobile Offcanvas
        --------------------------------------------------------- */
        var closeBtn = document.querySelector('.offcanvas__close button');
        var overlay = document.querySelector('.offcanvas__overlay');

        function closeOffcanvas(e) {
            e.preventDefault();
            document.querySelector('.offcanvas__info').classList.remove('info-open');
            document.querySelector('.offcanvas__overlay').classList.remove('overlay-open');
        }

        if (closeBtn) closeBtn.addEventListener('click', closeOffcanvas);
        if (overlay) overlay.addEventListener('click', closeOffcanvas);

        /* ---------------------------------------------------------
           Mobile Services Dropdown Toggle
        --------------------------------------------------------- */
        document.querySelectorAll('.mobile-has-dropdown').forEach(function(parentLi) {

            var link = parentLi.querySelector(':scope > .mobile-menu-link > a');
            var toggle = parentLi.querySelector(':scope > .mobile-menu-link > .mobile-submenu-toggle');
            var submenu = parentLi.querySelector(':scope > .mobile-submenu');

            if (!submenu) {
                console.warn('[dropdown] .mobile-submenu not found inside', parentLi);
                return;
            }

            function toggleSubmenu(e) {
                e.preventDefault();
                e.stopPropagation();

                var isOpen = parentLi.classList.contains('active');

                if (isOpen) {
                    submenu.style.display = 'none';
                    parentLi.classList.remove('active');
                } else {
                    submenu.style.display = 'block';
                    parentLi.classList.add('active');
                }
            }

            if (link) link.addEventListener('click', toggleSubmenu);
            if (toggle) toggle.addEventListener('click', toggleSubmenu);
        });

    });
</script>