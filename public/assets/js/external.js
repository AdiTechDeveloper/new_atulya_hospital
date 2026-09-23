/* =========================================================
   ATULYA HOSPITAL - EXTERNAL JS
========================================================= */


/* =========================================================
   DOCTOR SLIDER
========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const track = document.getElementById('doctorSliderTrack');
    const nextButton = document.getElementById('doctorNext');
    const prevButton = document.getElementById('doctorPrev');


    /*
     * Doctor slider page par nahi hai
     * to kuch nahi karna.
     */
    if (!track) {
        return;
    }


    const doctors =
        track.querySelectorAll('.doctor-slide-item');


    if (!doctors.length) {
        return;
    }


    let currentIndex = 0;


    /* -----------------------------------------
       Visible Doctors
    ----------------------------------------- */

    function getVisibleDoctors() {

        if (window.innerWidth <= 575) {
            return 1;
        }

        if (window.innerWidth <= 767) {
            return 2;
        }

        if (window.innerWidth <= 1199) {
            return 3;
        }

        return 4;
    }


    /* -----------------------------------------
       Move Next
    ----------------------------------------- */

    function moveSlider() {

        const visibleDoctors =
            getVisibleDoctors();

        const gap =
            window.innerWidth <= 767
                ? 20
                : 24;


        const slideWidth =
            doctors[0].getBoundingClientRect().width;


        const maxIndex =
            Math.max(
                0,
                doctors.length - visibleDoctors
            );


        /*
         * Last position ke baad
         * directly first doctor par.
         */

        if (currentIndex < maxIndex) {

            currentIndex++;

        } else {

            currentIndex = 0;

        }


        const moveAmount =
            currentIndex *
            (slideWidth + gap);


        track.style.transform =
            'translateX(-' +
            moveAmount +
            'px)';
    }


    /* -----------------------------------------
       Move Previous
    ----------------------------------------- */

    function movePrevious() {

        const visibleDoctors =
            getVisibleDoctors();

        const gap =
            window.innerWidth <= 767
                ? 20
                : 24;


        const slideWidth =
            doctors[0].getBoundingClientRect().width;


        const maxIndex =
            Math.max(
                0,
                doctors.length - visibleDoctors
            );


        if (currentIndex > 0) {

            currentIndex--;

        } else {

            currentIndex = maxIndex;

        }


        const moveAmount =
            currentIndex *
            (slideWidth + gap);


        track.style.transform =
            'translateX(-' +
            moveAmount +
            'px)';
    }


    /* -----------------------------------------
       Next Button
    ----------------------------------------- */

    if (nextButton) {

        nextButton.addEventListener(
            'click',
            function (event) {

                event.preventDefault();

                moveSlider();

            }
        );
    }


    /* -----------------------------------------
       Previous Button
    ----------------------------------------- */

    if (prevButton) {

        prevButton.addEventListener(
            'click',
            function (event) {

                event.preventDefault();

                movePrevious();

            }
        );
    }


    /* -----------------------------------------
       Resize
    ----------------------------------------- */

    let resizeTimer;


    window.addEventListener(
        'resize',
        function () {

            clearTimeout(resizeTimer);


            resizeTimer = setTimeout(
                function () {

                    currentIndex = 0;

                    track.style.transform =
                        'translateX(0)';

                },
                150
            );

        }
    );

});



/* =========================================================
   HOME PAGE VIDEO POPUP
========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const modal =
        document.getElementById('videoModal');

    const iframe =
        document.getElementById('popupVideo');

    const closeBtn =
        document.getElementById('closeVideo');


    /*
     * Video popup current page par nahi hai
     * to kuch nahi karna.
     */

    if (!modal || !iframe) {
        return;
    }


    /* -----------------------------------------
       Get YouTube ID
    ----------------------------------------- */

    function getYoutubeId(url) {

        if (!url) {
            return null;
        }


        const patterns = [

            /youtube\.com\/watch\?v=([^&]+)/,

            /youtu\.be\/([^?&]+)/,

            /youtube\.com\/embed\/([^?&]+)/,

            /youtube\.com\/shorts\/([^?&]+)/

        ];


        for (
            let i = 0;
            i < patterns.length;
            i++
        ) {

            const match =
                url.match(patterns[i]);


            if (match) {

                return match[1];

            }

        }


        return null;
    }


    /* -----------------------------------------
       Open Video
    ----------------------------------------- */

    const videoButtons =
        document.querySelectorAll(
            '.atulya-home-video .open-video'
        );


    videoButtons.forEach(
        function (button) {

            button.addEventListener(
                'click',
                function (event) {

                    event.preventDefault();


                    const youtubeUrl =
                        this.getAttribute(
                            'data-video-url'
                        );


                    const videoId =
                        getYoutubeId(
                            youtubeUrl
                        );


                    if (!videoId) {
                        return;
                    }


                    iframe.src =
                        'https://www.youtube.com/embed/' +
                        videoId +
                        '?autoplay=1&rel=0';


                    modal.classList.add(
                        'active'
                    );


                    document.body.style.overflow =
                        'hidden';

                }
            );

        }
    );


    /* -----------------------------------------
       Close Video
    ----------------------------------------- */

    function closeVideo() {

        modal.classList.remove(
            'active'
        );


        /*
         * iframe source remove karne se
         * video stop ho jayega.
         */

        iframe.src = '';


        document.body.style.overflow =
            '';
    }


    /* -----------------------------------------
       Close Button
    ----------------------------------------- */

    if (closeBtn) {

        closeBtn.addEventListener(
            'click',
            function (event) {

                event.preventDefault();

                closeVideo();

            }
        );

    }


    /* -----------------------------------------
       Close Background Click
    ----------------------------------------- */

    modal.addEventListener(
        'click',
        function (event) {

            if (event.target === modal) {

                closeVideo();

            }

        }
    );


    /* -----------------------------------------
       ESC Key
    ----------------------------------------- */

    document.addEventListener(
        'keydown',
        function (event) {

            if (event.key === 'Escape') {

                closeVideo();

            }

        }
    );

});



/* =========================================================
   APPOINTMENT DEPARTMENT → DOCTOR FILTER
========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const department =
        document.getElementById(
            'appointmentDepartment'
        );

    const doctor =
        document.getElementById(
            'appointmentDoctor'
        );


    /*
     * Appointment form current page par nahi hai
     * to kuch nahi karna.
     */

    if (!department || !doctor) {
        return;
    }


    const doctorOptions =
        Array.from(
            doctor.querySelectorAll(
                'option[data-department]'
            )
        );


    /* -----------------------------------------
       Update Doctors
    ----------------------------------------- */

    function updateDoctors(
        selectedDepartment
    ) {

        selectedDepartment =
            selectedDepartment
                .trim()
                .toLowerCase();


        doctor.value = '';


        let hasDoctors = false;


        doctorOptions.forEach(
            function (option) {

                const departmentValue =
                    option.getAttribute(
                        'data-department'
                    );


                const doctorDepartment =
                    departmentValue
                        ? departmentValue
                            .trim()
                            .toLowerCase()
                        : '';


                if (
                    selectedDepartment &&
                    doctorDepartment ===
                        selectedDepartment
                ) {

                    option.style.display =
                        '';

                    hasDoctors = true;

                } else {

                    option.style.display =
                        'none';

                }

            }
        );


        /* -----------------------------------------
           No Department Selected
        ----------------------------------------- */

        if (!selectedDepartment) {

            doctor.disabled = true;


            if (doctor.options[0]) {

                doctor.options[0]
                    .textContent =
                    'Select Department First';

            }


            return;
        }


        /* -----------------------------------------
           Doctors Found / Not Found
        ----------------------------------------- */

        doctor.disabled =
            !hasDoctors;


        if (doctor.options[0]) {

            doctor.options[0]
                .textContent =
                hasDoctors
                    ? 'Select Doctor'
                    : 'No Doctor Available';

        }

    }


    /* -----------------------------------------
       Department Change
    ----------------------------------------- */

    department.addEventListener(
        'change',
        function () {

            updateDoctors(
                this.value
            );

        }
    );


    /* -----------------------------------------
       Initial State
    ----------------------------------------- */

    if (!department.value) {

        doctor.disabled = true;


        if (doctor.options[0]) {

            doctor.options[0]
                .textContent =
                'Select Department First';

        }

    } else {

        /*
         * Existing selected department
         * ko load karte waqt apply karo.
         */

        updateDoctors(
            department.value
        );

    }

});


document.addEventListener('DOMContentLoaded', function () {

    const backTop = document.getElementById('back-top');

    if (!backTop) return;

    const scrollThreshold = 300;

    function toggleBackTop() {
        if (window.scrollY > scrollThreshold) {
            backTop.classList.add('show');
        } else {
            backTop.classList.remove('show');
        }
    }

    // Scroll detection
    window.addEventListener('scroll', toggleBackTop, {
        passive: true
    });

    // Back to top
    backTop.addEventListener('click', function (e) {

        e.preventDefault();

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    });

    // Initial state
    toggleBackTop();

});
