@extends('website.layout.app')

@section('title', 'Videos | Atulya Super Speciality Hospital & ICU | Ahmedabad')

@section('meta_description', 'Watch healthcare awareness videos, medical information and updates from Atulya Super Speciality Hospital & ICU, Ahmedabad.')

@section('content')


<div class="atulya-videos-page">


    {{-- =====================================================
         VIDEOS CONTENT
    ====================================================== --}}

    <section class="atulya-videos-content">

        <div class="atulya-videos-container">


            {{-- =================================================
                 PAGE HEADING
            ================================================== --}}

            <div class="atulya-videos-heading">

                <div class="atulya-videos-kicker">
                    Videos
                </div>

                <h2>
                    Healthcare Information
                    <br>
                    You Can Trust
                </h2>

                <p>
                    Explore informative healthcare videos from
                    {{ setting('hospital_name') }} covering medical
                    awareness, treatments, patient care and useful
                    health information.
                </p>

            </div>


            @if($videos->count())


                {{-- =================================================
                     VIDEO GRID
                ================================================== --}}

                <div
                    class="atulya-video-grid"
                    id="atulyaVideoGrid"
                >

                    @foreach($videos as $video)

                        @php

                            /*
                            |--------------------------------------------------------------------------
                            | YouTube ID
                            |--------------------------------------------------------------------------
                            */

                            $youtubeId = null;

                            if (
                                !empty($video->youtube_url) &&
                                preg_match(
                                    '/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/|youtube\.com\/shorts\/)([^&?\/]+)/',
                                    $video->youtube_url,
                                    $matches
                                )
                            ) {

                                $youtubeId = $matches[1];

                            }


                            /*
                            |--------------------------------------------------------------------------
                            | Thumbnail
                            |--------------------------------------------------------------------------
                            */

                            if ($video->thumbnail) {

                                $thumbnail =
                                    asset(
                                        'storage/' . $video->thumbnail
                                    );

                            } elseif ($youtubeId) {

                                $thumbnail =
                                    'https://img.youtube.com/vi/' .
                                    $youtubeId .
                                    '/hqdefault.jpg';

                            } else {

                                $thumbnail =
                                    asset(
                                        'assets/img/home-1/counter/video-img.png'
                                    );

                            }


                            /*
                            |--------------------------------------------------------------------------
                            | Duration
                            |--------------------------------------------------------------------------
                            */

                            $duration =
                                $video->duration ?? null;

                        @endphp


                        <article class="atulya-video-card">


                            {{-- =================================================
                                 VIDEO THUMBNAIL
                            ================================================== --}}

                            <div class="atulya-video-thumbnail">

                                <img
                                    src="{{ $thumbnail }}"
                                    alt="{{ $video->title }}"
                                    loading="lazy"
                                >


                                <div class="atulya-video-thumbnail-overlay"></div>


                                {{-- PLAY BUTTON --}}

                                <button
                                    type="button"
                                    class="atulya-video-play"
                                    data-video-url="{{ $video->youtube_url }}"
                                    aria-label="Play {{ $video->title }}"
                                >

                                    <i class="fas fa-play"></i>

                                </button>


                                @if($duration)

                                    <span class="atulya-video-duration">
                                        {{ $duration }}
                                    </span>

                                @endif

                            </div>


                            {{-- =================================================
                                 VIDEO CONTENT
                            ================================================== --}}

                            <div class="atulya-video-card-content">


                                <span class="atulya-video-category">
                                    Atulya Hospital
                                </span>


                                <h3>
                                    {{ $video->title }}
                                </h3>


                                <p>

                                    @if($video->description)

                                        {{ \Illuminate\Support\Str::limit(
                                            $video->description,
                                            125
                                        ) }}

                                    @else

                                        Watch informative healthcare
                                        content, medical awareness and
                                        useful health information from
                                        {{ setting('hospital_name') }}.

                                    @endif

                                </p>


                                <button
                                    type="button"
                                    class="atulya-watch-video"
                                    data-video-url="{{ $video->youtube_url }}"
                                >

                                    Watch Video

                                    <i class="fas fa-arrow-right"></i>

                                </button>

                            </div>


                        </article>

                    @endforeach

                </div>



                {{-- =================================================
                     PAGINATION / BOTTOM
                ================================================== --}}

                <div class="atulya-videos-bottom">


                    {{-- VIDEO COUNT --}}

                    <div
                        class="atulya-video-count"
                        id="atulyaVideoCount"
                    >

                        Showing
                        {{ $videos->firstItem() }}
                        -
                        {{ $videos->lastItem() }}
                        of
                        {{ $videos->total() }}
                        videos

                    </div>


                    {{-- PAGINATION --}}

                    @if($videos->hasPages())

                        <div class="atulya-video-pagination">


                            {{-- PREVIOUS --}}

                            @if($videos->onFirstPage())

                                <span
                                    class="atulya-video-page-btn"
                                    style="opacity: .45; cursor: not-allowed;"
                                >

                                    <i class="fas fa-arrow-left"></i>

                                </span>

                            @else

                                <a
                                    href="{{ $videos->previousPageUrl() }}"
                                    class="atulya-video-page-btn"
                                    aria-label="Previous page"
                                >

                                    <i class="fas fa-arrow-left"></i>

                                </a>

                            @endif



                            {{-- PAGE NUMBERS --}}

                            @foreach(
                                $videos->getUrlRange(
                                    1,
                                    $videos->lastPage()
                                )
                                as $page => $url
                            )

                                @if($page == $videos->currentPage())

                                    <span
                                        class="atulya-video-page-btn active"
                                    >
                                        {{ $page }}
                                    </span>

                                @else

                                    <a
                                        href="{{ $url }}"
                                        class="atulya-video-page-btn"
                                    >
                                        {{ $page }}
                                    </a>

                                @endif

                            @endforeach



                            {{-- NEXT --}}

                            @if($videos->hasMorePages())

                                <a
                                    href="{{ $videos->nextPageUrl() }}"
                                    class="atulya-video-page-btn"
                                    aria-label="Next page"
                                >

                                    <i class="fas fa-arrow-right"></i>

                                </a>

                            @else

                                <span
                                    class="atulya-video-page-btn"
                                    style="opacity: .45; cursor: not-allowed;"
                                >

                                    <i class="fas fa-arrow-right"></i>

                                </span>

                            @endif


                        </div>

                    @endif


                </div>


            @else


                {{-- =================================================
                     EMPTY STATE
                ================================================== --}}

                <div class="atulya-video-empty">

                    <i class="fas fa-video"></i>

                    <h3>
                        Videos Coming Soon
                    </h3>

                    <p>
                        We are preparing informative healthcare
                        content for you.
                    </p>

                </div>


            @endif


        </div>

    </section>

</div>



{{-- =========================================================
     VIDEO MODAL
========================================================= --}}

<div
    id="atulyaVideoModal"
    class="atulya-video-modal"
>

    <div class="atulya-video-modal-box">


        {{-- CLOSE BUTTON --}}

        <button
            type="button"
            id="atulyaVideoClose"
            class="atulya-video-close"
            aria-label="Close video"
        >

            <i class="fas fa-times"></i>

        </button>


        {{-- VIDEO FRAME --}}

        <div class="atulya-video-frame">

            <iframe
                id="atulyaVideoIframe"
                src=""
                title="{{ setting('hospital_name') }} Video"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
            >
            </iframe>

        </div>


    </div>

</div>



@push('scripts')

<script>

document.addEventListener('DOMContentLoaded', function () {


    /*
    |--------------------------------------------------------------------------
    | VIDEO MODAL
    |--------------------------------------------------------------------------
    */

    const modal =
        document.getElementById('atulyaVideoModal');

    const iframe =
        document.getElementById('atulyaVideoIframe');

    const closeButton =
        document.getElementById('atulyaVideoClose');


    if (!modal || !iframe) {
        return;
    }


    /*
    |--------------------------------------------------------------------------
    | GET YOUTUBE ID
    |--------------------------------------------------------------------------
    */

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

            const match =
                url.match(pattern);

            if (match) {

                return match[1];

            }

        }


        return null;

    }


    /*
    |--------------------------------------------------------------------------
    | OPEN VIDEO
    |--------------------------------------------------------------------------
    */

    function openVideo(url) {

        const videoId =
            getYoutubeId(url);


        if (!videoId) {
            return;
        }


        iframe.src =
            'https://www.youtube.com/embed/' +
            videoId +
            '?autoplay=1&rel=0';


        modal.classList.add('active');

        document.body.style.overflow =
            'hidden';

    }


    /*
    |--------------------------------------------------------------------------
    | CLOSE VIDEO
    |--------------------------------------------------------------------------
    */

    function closeVideo() {

        modal.classList.remove('active');

        iframe.src = '';

        document.body.style.overflow = '';

    }


    /*
    |--------------------------------------------------------------------------
    | WATCH BUTTONS
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('[data-video-url]')
        .forEach(function (button) {

            button.addEventListener(
                'click',
                function () {

                    const videoUrl =
                        this.getAttribute(
                            'data-video-url'
                        );

                    openVideo(videoUrl);

                }
            );

        });


    /*
    |--------------------------------------------------------------------------
    | CLOSE BUTTON
    |--------------------------------------------------------------------------
    */

    if (closeButton) {

        closeButton.addEventListener(
            'click',
            closeVideo
        );

    }


    /*
    |--------------------------------------------------------------------------
    | OUTSIDE CLICK
    |--------------------------------------------------------------------------
    */

    modal.addEventListener(
        'click',
        function (event) {

            if (event.target === modal) {

                closeVideo();

            }

        }
    );


    /*
    |--------------------------------------------------------------------------
    | ESCAPE KEY
    |--------------------------------------------------------------------------
    */

    document.addEventListener(
        'keydown',
        function (event) {

            if (event.key === 'Escape') {

                closeVideo();

            }

        }
    );


});

</script>

@endpush

@endsection