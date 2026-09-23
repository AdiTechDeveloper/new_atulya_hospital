<!-- =========================================================
     OFFCANVAS / MOBILE MENU
========================================================= -->

<div class="fix-area">

    <div class="offcanvas__info">

        <div class="offcanvas__wrapper">

            <div class="offcanvas__content">

                <!-- TOP -->
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">

                    <div class="offcanvas__logo">
                        <a href="{{ url('/') }}">
                            <img
                                src="{{ asset(setting('logo')) }}"
                                alt="{{ setting('hospital_name') }}"
                            >
                        </a>
                    </div>

                    <div class="offcanvas__close">
                        <button type="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                </div>


                <!-- MOBILE MENU -->
                <div class="mobile-nav-menu">

                    <ul>

                        <!-- ABOUT -->
                        <li>
                            <a href="{{ url('/about') }}">
                                About Us
                            </a>
                        </li>


                        <!-- SERVICES -->
                        <li class="mobile-has-dropdown">

                            <div class="mobile-menu-link">

                                <a href="javascript:void(0);">
                                    Services
                                </a>

                                <button
                                    type="button"
                                    class="mobile-submenu-toggle"
                                    aria-label="Toggle Services"
                                >
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

                </div>


                <!-- SOCIAL -->
                <div class="social-icon d-flex align-items-center">

                    <a
                        href="https://www.facebook.com/AtulyaSuperSpecialityHospital/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Facebook"
                    >
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a
                        href="https://www.youtube.com/@atulyasuperspecialityhospital"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="YouTube"
                    >
                        <i class="fab fa-youtube"></i>
                    </a>

                    <a
                        href="https://maps.app.goo.gl/Q57Xx13m5LiAcwwA6"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Google Maps"
                    >
                        <i class="fas fa-map-marker-alt"></i>
                    </a>

                    <a
                        href="https://www.instagram.com/atulya_superspeciality/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Instagram"
                    >
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>


                <!-- CONTACT INFORMATION -->
                <div class="offcanvas__contact">

                    <h3>Information</h3>

                    <ul class="contact-list">

                        <li>

                            <span>
                                Address:
                            </span>

                            Atulya Super Speciality Hospital & ICU,
                            206–214, 2nd Floor, Elite Magnum,
                            Bhuyangdev Cross Road,
                            Ahmedabad – 380061, Gujarat

                        </li>


                        <li>

                            <span>
                                Call Us:
                            </span>

                            <a href="tel:{{ setting('phone') }}">
                                {{ setting('phone') }}
                            </a>

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


                <!-- APPOINTMENT -->
                <a
                    href="{{ url('/contact') }}"
                    class="theme-btn"
                >
                    <i class="far fa-chevron-right"></i>
                    Appointment
                </a>

            </div>

        </div>

    </div>


    <div class="offcanvas__overlay"></div>

</div>



<!-- =========================================================
     HEADER TOP
========================================================= -->

<div class="header-top-section">

    <div class="container">

        <div class="header-top-wrapper">

            <p>
                {{ setting('hospital_name') }}
                – Quality Healthcare With Compassionate Care

                <a href="{{ url('/contact') }}">
                    Contact Us
                </a>.
            </p>


            <ul class="top-list">

                <!-- PHONE -->
                <li>

                    <i class="fas fa-phone"></i>

                    <a href="tel:{{ setting('phone') }}">
                        {{ setting('phone') }}
                    </a>

                </li>


                <!-- EMERGENCY -->
                <li>

                    <i class="far fa-clock"></i>

                    <p>
                        24/7 Emergency Care
                    </p>

                </li>


                <!-- LOCATION -->
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



<!-- =========================================================
     MAIN HEADER
========================================================= -->

<header
    id="header-sticky"
    class="header-section header-1"
>

    <div class="container">

        <div class="mega-menu-wrapper">

            <div class="header-main">


                <!-- LOGO -->
                <div class="header-left">

                    <a
                        href="{{ url('/') }}"
                        class="header-logo1"
                    >

                        <img
                            width="220"
                            src="{{ asset('assets/img/logo/Atulya-logo.png') }}"
                            alt="{{ setting('hospital_name') }}"
                        >

                    </a>

                </div>



                <!-- RIGHT SIDE -->
                <div class="header-right d-flex justify-content-end align-items-center">


                    <!-- DESKTOP MENU -->
                    <div class="mean__menu-wrapper">

                        <div class="main-menu desktop-menu">

                            <nav>

                                <ul>


                                    <!-- ABOUT -->
                                    <li>

                                        <a href="{{ url('/about') }}">
                                            About Us
                                        </a>

                                    </li>



                                    <!-- SERVICES -->
                                    <li class="has-dropdown">

                                        <a href="javascript:void(0);">

                                            Services

                                            <i class="fas fa-chevron-down"></i>

                                        </a>


                                        <ul class="submenu">

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



                    <!-- EMERGENCY CONTACT -->
                    <div class="header-contact-info">

                        <div class="info-items">

                            <div class="icon">
                                <i class="flaticon-support"></i>
                            </div>

                            <div class="content">

                                <span>
                                    Call Emergency
                                </span>

                                <h6>

                                    <a href="tel:{{ setting('phone') }}">
                                        {{ setting('phone') }}
                                    </a>

                                </h6>

                            </div>

                        </div>


                        <a
                            href="{{ url('/contact') }}"
                            class="theme-btn"
                        >

                            <i class="far fa-chevron-right"></i>

                            Appointment

                        </a>

                    </div>



                    <!-- MOBILE HAMBURGER -->
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



<!-- =========================================================
     HEADER CSS
========================================================= -->

<style>

/* =========================================================
   MAIN HEADER
========================================================= */

.header-main {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 0;
}

.header-left {
    max-width: 60%;
}

.header-left img {
    max-width: 220px;
    height: auto;
}

.header-right {
    display: flex;
    align-items: center;
    gap: 15px;
}



/* =========================================================
   DESKTOP SERVICES DROPDOWN
========================================================= */

.desktop-menu > nav > ul {
    display: flex;
    align-items: center;
}

.desktop-menu > nav > ul > li {
    position: relative;
}

.desktop-menu > nav > ul > li.has-dropdown > a {
    display: flex;
    align-items: center;
    gap: 7px;
}

.desktop-menu > nav > ul > li.has-dropdown > a i {
    font-size: 11px;
    transition: transform 0.3s ease;
}


/* Dropdown */

.desktop-menu .submenu {
    position: absolute;
    top: calc(100% + 10px);
    left: 0;

    min-width: 220px;

    padding: 8px 0;
    margin: 0;

    background: #ffffff;

    list-style: none;

    opacity: 0;
    visibility: hidden;

    transform: translateY(10px);

    transition:
        opacity 0.25s ease,
        visibility 0.25s ease,
        transform 0.25s ease;

    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);

    z-index: 99999;
}


/* Show dropdown */

.desktop-menu .has-dropdown:hover > .submenu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}


/* Dropdown items */

.desktop-menu .submenu li {
    display: block;
    width: 100%;
    margin: 0;
    padding: 0;
}

.desktop-menu .submenu li a {
    display: block;
    width: 100%;

    padding: 11px 18px;

    color: #222;
    font-size: 14px;
    font-weight: 500;

    text-decoration: none;

    transition:
        background 0.25s ease,
        color 0.25s ease;
}

.desktop-menu .submenu li a:hover {
    background: #f5f5f5;
    color: #00aaa8;
}



/* =========================================================
   MOBILE HEADER
========================================================= */

@media (max-width: 1199px) {

    .desktop-menu {
        display: none !important;
    }

    .header-contact-info {
        display: none !important;
    }

    .header__hamburger {
        display: flex;
        align-items: center;
        justify-content: center;

        cursor: pointer;

        font-size: 24px;
    }

}



/* =========================================================
   OFFCANVAS
========================================================= */

.offcanvas__info {

    position: fixed;

    top: 0;
    right: -400px;

    width: 400px;
    max-width: 90%;

    height: 100vh;

    background: #ffffff;

    z-index: 99999;

    overflow-y: auto;

    transition: right 0.4s ease;

    padding: 20px;

}

.offcanvas__info.info-open {
    right: 0;
}



/* Overlay */

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

    transition:
        opacity 0.3s ease,
        visibility 0.3s ease;

}

.offcanvas__overlay.overlay-open {

    opacity: 1;
    visibility: visible;

}



/* =========================================================
   MOBILE NAV
========================================================= */

.mobile-nav-menu {
    width: 100%;
}

.mobile-nav-menu > ul {

    list-style: none;

    padding: 0;
    margin: 0;

}

.mobile-nav-menu > ul > li {

    border-bottom: 1px solid #eeeeee;

}

.mobile-nav-menu li a {

    display: block;

    padding: 15px 5px;

    color: #111111;

    font-size: 16px;

    font-weight: 500;

    text-decoration: none;

}

.mobile-nav-menu li a:hover {
    color: #00aaa8;
}



/* =========================================================
   MOBILE SERVICES ROW
========================================================= */

.mobile-menu-link {

    display: flex;

    align-items: center;

    justify-content: space-between;

}

.mobile-menu-link > a {
    flex: 1;
}



/* Dropdown button */

.mobile-submenu-toggle {

    width: 45px;
    height: 45px;

    border: 0;

    background: transparent;

    display: flex;

    align-items: center;

    justify-content: center;

    cursor: pointer;

    color: #111111;

}

.mobile-submenu-toggle i {

    font-size: 13px;

    transition: transform 0.3s ease;

}



/* =========================================================
   MOBILE SUBMENU
========================================================= */

.mobile-has-dropdown {
    position: relative;
}

.mobile-submenu {

    display: none;

    width: 100%;

    padding: 0 !important;
    margin: 0;

    background: #f8f8f8;

    list-style: none;

}

.mobile-submenu li {

    display: block !important;

    width: 100%;

    border-bottom: 1px solid #eeeeee;

}

.mobile-submenu li a {

    display: block !important;

    width: 100%;

    padding: 12px 20px !important;

    color: #333333;

    font-size: 14px;

}

.mobile-submenu li a:hover {
    color: #00aaa8;
}



/* Active submenu */

.mobile-has-dropdown.active .mobile-submenu {
    display: block;
}

.mobile-has-dropdown.active
.mobile-submenu-toggle i {

    transform: rotate(180deg);

}



/* =========================================================
   MOBILE WIDTH
========================================================= */

@media (max-width: 575px) {

    .offcanvas__info {

        width: 100%;
        max-width: 100%;

        right: -100%;

    }

    .offcanvas__info.info-open {
        right: 0;
    }

    .header-left img {
        max-width: 180px;
    }

}



/* =========================================================
   MOBILE SOCIAL
========================================================= */

.social-icon {

    gap: 12px;

    margin-top: 25px;

    margin-bottom: 25px;

}

.social-icon a {

    display: flex;

    align-items: center;

    justify-content: center;

    width: 38px;
    height: 38px;

    border-radius: 50%;

    text-decoration: none;

}



/* =========================================================
   OFFCANVAS CONTACT
========================================================= */

.offcanvas__contact {
    margin-top: 20px;
}

.offcanvas__contact h3 {
    margin-bottom: 15px;
}

.offcanvas__contact .contact-list {

    list-style: none;

    padding: 0;
    margin: 0;

}

.offcanvas__contact .contact-list li {

    margin-bottom: 15px;

    line-height: 1.6;

}

.offcanvas__contact .contact-list li span {

    display: block;

    font-weight: 600;

    margin-bottom: 3px;

}

.offcanvas__contact .contact-list li a {

    color: inherit;

    text-decoration: none;

}

</style>



<!-- =========================================================
     HEADER JAVASCRIPT
========================================================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {


    /* =====================================================
       OPEN MOBILE OFFCANVAS
    ===================================================== */

    const menuButtons =
        document.querySelectorAll('.sidebar__toggle');

    const offcanvas =
        document.querySelector('.offcanvas__info');

    const overlay =
        document.querySelector('.offcanvas__overlay');


    menuButtons.forEach(function (button) {

        button.addEventListener('click', function (e) {

            e.preventDefault();

            if (offcanvas) {
                offcanvas.classList.add('info-open');
            }

            if (overlay) {
                overlay.classList.add('overlay-open');
            }

        });

    });



    /* =====================================================
       CLOSE MOBILE OFFCANVAS
    ===================================================== */

    const closeButton =
        document.querySelector('.offcanvas__close button');


    function closeOffcanvas(e) {

        if (e) {
            e.preventDefault();
        }

        if (offcanvas) {
            offcanvas.classList.remove('info-open');
        }

        if (overlay) {
            overlay.classList.remove('overlay-open');
        }

    }


    if (closeButton) {

        closeButton.addEventListener(
            'click',
            closeOffcanvas
        );

    }


    if (overlay) {

        overlay.addEventListener(
            'click',
            closeOffcanvas
        );

    }



    /* =====================================================
       MOBILE SERVICES DROPDOWN
    ===================================================== */

    const dropdowns =
        document.querySelectorAll('.mobile-has-dropdown');


    dropdowns.forEach(function (parentLi) {

        const link =
            parentLi.querySelector(
                ':scope > .mobile-menu-link > a'
            );

        const toggle =
            parentLi.querySelector(
                ':scope > .mobile-menu-link > .mobile-submenu-toggle'
            );

        const submenu =
            parentLi.querySelector(
                ':scope > .mobile-submenu'
            );


        if (!submenu) {
            return;
        }


        function toggleSubmenu(e) {

            e.preventDefault();
            e.stopPropagation();

            const isOpen =
                parentLi.classList.contains('active');


            if (isOpen) {

                submenu.style.display = 'none';

                parentLi.classList.remove('active');

            } else {

                submenu.style.display = 'block';

                parentLi.classList.add('active');

            }

        }


        if (link) {

            link.addEventListener(
                'click',
                toggleSubmenu
            );

        }


        if (toggle) {

            toggle.addEventListener(
                'click',
                toggleSubmenu
            );

        }

    });



    /* =====================================================
       CLOSE MOBILE MENU WHEN SUBMENU LINK CLICKED
    ===================================================== */

    document
        .querySelectorAll('.mobile-submenu a')
        .forEach(function (link) {

            link.addEventListener('click', function () {

                if (offcanvas) {
                    offcanvas.classList.remove('info-open');
                }

                if (overlay) {
                    overlay.classList.remove('overlay-open');
                }

            });

        });


});

</script>