<!--<< All JS Plugins >>-->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<!--<< Bootstrap Js >>-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!--<< Nice Select Js >>-->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<!--<< Odometer Js >>-->
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<!--<< Appear Js >>-->
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<!--<< Swiper Slider Js >>-->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<!--<< MeanMenu Js >>-->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<!--<< Magnific Popup Js >>-->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!--<< Wow Animation Js >>-->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!--<< Gsap Animation Js >>-->
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<!--<< ScrollTrigger Js >>-->
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<!--<< SplitText Js >>-->
<script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
<!--<< splitType Js >>-->
<script src="{{ asset('assets/js/splitType.js') }}"></script>

<script src="{{ asset('assets/js/external.js') }}"></script>
<script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
<script src="{{ asset('assets/js/script-gsap.js') }}"></script>
<script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/external.js') }}"></script>

<script src="{{ asset('assets/js/circle-progress.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/js/ajax-mail.js') }}"></script>



<!--<< Main.js >>-->
<script src="{{ asset('assets/js/main.js') }}"></script>
{{-- <script>
document.addEventListener('DOMContentLoaded', function () {

    if (typeof WOW !== 'undefined') {
        const wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 100,
            mobile: true,
            live: true
        });

        wow.init();
    }

    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // 2. Target your image containers or wrappers
        gsap.utils.toArray('.your-image-class').forEach((element) => {
            gsap.from(element, {
                scrollTrigger: {
                    trigger: element,
                    start: "top 85%", // Starts when top of image hits 85% of viewport
                    toggleActions: "play none none reverse",
                    markers: false     // Set to true if you want to debug start/end lines
                },
                y: 50,          // Distance to slide up from
                opacity: 0,     // Fade in from opacity 0
                duration: 1,    // Animation speed
                ease: "power2.out"
            });
        });
    }

});
</script> --}}