
document.addEventListener('DOMContentLoaded', function () {

    const track = document.getElementById('doctorSliderTrack');

    const nextButton = document.getElementById('doctorNext');

    const prevButton = document.getElementById('doctorPrev');


    if (!track || !nextButton || !prevButton) {
        return;
    }


    const doctors = track.querySelectorAll('.doctor-slide-item');

    let currentIndex = 0;


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


    function moveSlider() {

        const visibleDoctors = getVisibleDoctors();

        const gap = window.innerWidth <= 767 ? 20 : 24;

        const slideWidth =
            doctors[0].getBoundingClientRect().width;


        /*
         * Last position ke baad
         * directly first doctor par.
         */
        const maxIndex = doctors.length - visibleDoctors;


        if (currentIndex < maxIndex) {

            currentIndex++;

        } else {

            currentIndex = 0;

        }


        const moveAmount =
            currentIndex * (slideWidth + gap);


        track.style.transform =
            'translateX(-' + moveAmount + 'px)';

    }


    function movePrevious() {

        const visibleDoctors = getVisibleDoctors();

        const maxIndex = doctors.length - visibleDoctors;


        if (currentIndex > 0) {

            currentIndex--;

        } else {

            currentIndex = maxIndex;

        }


        const gap = window.innerWidth <= 767 ? 20 : 24;

        const slideWidth =
            doctors[0].getBoundingClientRect().width;


        const moveAmount =
            currentIndex * (slideWidth + gap);


        track.style.transform =
            'translateX(-' + moveAmount + 'px)';

    }


    nextButton.addEventListener('click', function () {

        moveSlider();

    });


    prevButton.addEventListener('click', function () {

        movePrevious();

    });


    window.addEventListener('resize', function () {

        currentIndex = 0;

        track.style.transform = 'translateX(0)';

    });

});





    document.addEventListener('DOMContentLoaded', function() {


        /* =========================================================
           ELEMENTS
        ========================================================= */

        const modal = document.getElementById('videoModal');

        const iframe = document.getElementById('popupVideo');

        const closeBtn = document.getElementById('closeVideo');


        if (!modal || !iframe) {
            return;
        }


        /* =========================================================
           GET YOUTUBE ID
        ========================================================= */

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


            for (const pattern of patterns) {

                const match = url.match(pattern);

                if (match) {

                    return match[1];

                }

            }


            return null;

        }


        /* =========================================================
           OPEN VIDEO
        ========================================================= */

        document
            .querySelectorAll('.atulya-home-video .open-video')
            .forEach(function(button) {


                button.addEventListener('click', function() {


                    const youtubeUrl =
                        this.getAttribute('data-video-url');


                    const videoId =
                        getYoutubeId(youtubeUrl);


                    if (!videoId) {

                        return;

                    }


                    iframe.src =
                        'https://www.youtube.com/embed/' +
                        videoId +
                        '?autoplay=1&rel=0';


                    modal.classList.add('active');


                    document.body.style.overflow = 'hidden';


                });

            });


        /* =========================================================
           CLOSE VIDEO
        ========================================================= */

        function closeVideo() {


            modal.classList.remove('active');


            /*
            |--------------------------------------------------------------------------
            | Remove iframe src so video stops
            |--------------------------------------------------------------------------
            */

            iframe.src = '';


            document.body.style.overflow = '';


        }


        /* =========================================================
           CLOSE BUTTON
        ========================================================= */

        if (closeBtn) {

            closeBtn.addEventListener(
                'click',
                closeVideo
            );

        }


        /* =========================================================
           CLOSE ON BACKGROUND CLICK
        ========================================================= */

        modal.addEventListener(
            'click',
            function(event) {


                if (event.target === modal) {

                    closeVideo();

                }

            }
        );


        /* =========================================================
           CLOSE WITH ESC
        ========================================================= */

        document.addEventListener(
            'keydown',
            function(event) {


                if (event.key === 'Escape') {

                    closeVideo();

                }

            }
        );


    });

// document.addEventListener('DOMContentLoaded', function () {

//     const openButton =
//         document.getElementById('openVideo');

//     const bottomButton =
//         document.getElementById('openVideoBottom');

//     const modal =
//         document.getElementById('videoModal');

//     const iframe =
//         document.getElementById('popupVideo');

//     const closeButton =
//         document.getElementById('closeVideo');


//     if (!modal || !iframe) {
//         return;
//     }


//     function getYoutubeId(url) {

//         if (!url) {
//             return null;
//         }


//         const patterns = [

//             /youtube\.com\/watch\?v=([^&]+)/,

//             /youtu\.be\/([^?&]+)/,

//             /youtube\.com\/embed\/([^?&]+)/,

//             /youtube\.com\/shorts\/([^?&]+)/

//         ];


//         for (const pattern of patterns) {

//             const match =
//                 url.match(pattern);

//             if (match) {
//                 return match[1];
//             }

//         }


//         return null;
//     }


//     function openVideo(videoUrl) {

//         const videoId =
//             getYoutubeId(videoUrl);


//         if (!videoId) {
//             return;
//         }


//         iframe.src =
//             'https://www.youtube.com/embed/' +
//             videoId +
//             '?autoplay=1&rel=0';


//         modal.classList.add('active');

//         document.body.style.overflow = 'hidden';

//     }


//     if (openButton) {

//         openButton.addEventListener(
//             'click',
//             function () {

//                 openVideo(
//                     this.getAttribute('data-video-url')
//                 );

//             }
//         );

//     }


//     if (bottomButton) {

//         bottomButton.addEventListener(
//             'click',
//             function () {

//                 openVideo(
//                     this.getAttribute('data-video-url')
//                 );

//             }
//         );

//     }


//     function closeVideo() {

//         modal.classList.remove('active');

//         iframe.src = '';

//         document.body.style.overflow = '';

//     }


//     if (closeButton) {

//         closeButton.addEventListener(
//             'click',
//             closeVideo
//         );

//     }


//     modal.addEventListener(
//         'click',
//         function (event) {

//             if (event.target === modal) {
//                 closeVideo();
//             }

//         }
//     );


//     document.addEventListener(
//         'keydown',
//         function (event) {

//             if (event.key === 'Escape') {
//                 closeVideo();
//             }

//         }
//     );

// });


// const openVideo = document.getElementById("openVideo");
// const closeVideoButton = document.getElementById("closeVideo");
// const videoModal = document.getElementById("videoModal");
// const popupVideo = document.getElementById("popupVideo");

// // Open popup
// if (openVideo && videoModal && popupVideo) {
//     openVideo.addEventListener("click", function () {
//         videoModal.style.display = "flex";

//         popupVideo.currentTime = 0;

//         const playPromise = popupVideo.play();

//         if (playPromise !== undefined) {
//             playPromise.catch(function (error) {
//                 console.log("Video autoplay prevented:", error);
//             });
//         }
//     });
// }

// // Close popup
// if (closeVideoButton && videoModal && popupVideo) {
//     closeVideoButton.addEventListener("click", function () {
//         videoModal.style.display = "none";

//         popupVideo.pause();
//         popupVideo.currentTime = 0;
//     });
// }

// // Close when clicking outside video
// if (videoModal && popupVideo) {
//     videoModal.addEventListener("click", function (e) {
//         if (e.target === videoModal) {
//             videoModal.style.display = "none";

//             popupVideo.pause();
//             popupVideo.currentTime = 0;
//         }
//     });
// }


