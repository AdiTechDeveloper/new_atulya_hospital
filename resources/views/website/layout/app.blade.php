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

                <p class="text-center">
                    <span>
                          SUPER SPECIALITY HOSPITAL & ICU
                    </span>
                  
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

        </div>

    @endif


    {{-- Page Banner --}}
    @yield('page-banner')


    {{-- Page Content --}}
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
        class="whatsapp-float"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Chat with us on WhatsApp">

        <i class="fab fa-whatsapp"></i>

    </a>


    <!-- jQuery -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> -->


    <!-- Slick JS -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


   

</body>

</html>