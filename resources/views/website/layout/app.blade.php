<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.partials.head')
    @include('website.partials.css')

    <title>@yield('title', 'Home') | Atulya Hospital</title>

    @stack('styles')

</head>

<body>

    <!-- Header/Navbar -->
    @include('website.partials.header')
    @if (request()->is('/'))
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="Y" class="letters-loading">
                        Y
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                </div>
                <p class="text-center">Loading</p>
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
        </div>
    @endif
    @yield('content')

    <!-- Footer -->
    @include('website.partials.footer')
    <button id="back-top" class="back-to-top">
        <i class="fas fa-long-arrow-up"></i>
    </button>

    <!-- Javascript -->
    @include('website.partials.js')

    @stack('scripts')

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/919727579000?text=Hello%20Atulya%20Super%20Speciality%20Hospital%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services."
        class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat with us on WhatsApp">

        <i class="fab fa-whatsapp"></i>

    </a>


    <!-- jQuery -->
 <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>  -->

    <!-- Slick JS -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- 
    <script>
        $(document).ready(function() {

            $('.doctor-slider').slick({

                slidesToShow: 4,
                slidesToScroll: 4,

                infinite: true,

                autoplay: true,
                autoplaySpeed: 3000,

                arrows: true,
                dots: true,

                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',

                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]

            });

        });
        $(document).ready(function() {

            // Back To Top Show / Hide
            $(window).on('scroll', function() {

                if ($(this).scrollTop() > 20) {
                    $('#back-top').addClass('show');
                } else {
                    $('#back-top').removeClass('show');
                }

            });

            // Back To Top Click
            $(document).on('click', '#back-top', function(e) {

                e.preventDefault();

                $('html, body').animate({
                    scrollTop: 0
                }, 800);

                return false;
            });

        });


        $(document).on('click', '.sidebar__toggle', function(e) {
            e.preventDefault();

            $('.offcanvas__info').addClass('info-open');
            $('.offcanvas__overlay').addClass('overlay-open');
        });



        $(document).on('click', '.offcanvas__close', function(e) {
            e.preventDefault();

            $('.offcanvas__info').removeClass('info-open');
            $('.offcanvas__overlay').removeClass('overlay-open');
        });


        $(document).on('click', '.offcanvas__overlay', function() {

            $('.offcanvas__info').removeClass('info-open');
            $('.offcanvas__overlay').removeClass('overlay-open');

        });

        (function() {
            var preloader = document.getElementById('preloader');

            function hidePreloader() {
                if (!preloader) return;
                preloader.style.transition = 'opacity 0.5s ease';
                preloader.style.opacity = '0';
                setTimeout(function() {
                    preloader.style.display = 'none';
                }, 500);
            }

            // Normal case: page fully loaded (images, fonts, everything)
            window.addEventListener('load', hidePreloader);

            // Fallback: agar koi resource atak jaye to bhi 3 sec baad hata do
            setTimeout(hidePreloader, 3000);
        })();
    </script> -->
</body>

</html>
