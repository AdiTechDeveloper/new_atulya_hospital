@extends('website.layout.app')

@section('title', 'Videos | Atulya Super Speciality Hospital & ICU | Ahmedabad')

@section('meta_description', 'Watch healthcare awareness videos, medical information and updates from Atulya Super Speciality Hospital & ICU, Ahmedabad.')

@section('content')

<style>
    /* =========================================================
       ATULYA VIDEOS PAGE
    ========================================================= */

    .atulya-videos-page {
        background: #fff;
        color: #172965;
    }

    .atulya-videos-container {
        width: min(1180px, calc(100% - 30px));
        margin: 0 auto;
    }

    /* =========================================================
       HERO
    ========================================================= */

    .atulya-videos-hero {
        position: relative;
        overflow: hidden;
        padding: 65px 0 60px;
        background:
            linear-gradient(
                90deg,
                rgba(238, 246, 253, .98) 0%,
                rgba(238, 246, 253, .90) 55%,
                rgba(238, 246, 253, .60) 100%
            ),
            url("{{ asset('assets/img/inner/breadcrumb/breadcrumb.jpg') }}")
            center center / cover no-repeat;
    }

    .atulya-videos-hero::after {
        content: "";
        position: absolute;
        right: -120px;
        top: -170px;
        width: 400px;
        height: 400px;
        border: 70px solid rgba(28, 111, 209, .05);
        border-radius: 50%;
    }

    .atulya-videos-hero-content {
        position: relative;
        z-index: 2;
    }

    .atulya-videos-hero h1 {
        margin: 0 0 8px;
        color: #172965;
        font-size: clamp(38px, 5vw, 52px);
        line-height: 1.1;
        font-weight: 700;
    }

    .atulya-videos-hero p {
        max-width: 650px;
        margin: 0 0 10px;
        color: #53627d;
        font-size: 15px;
        line-height: 1.7;
    }

    .atulya-videos-breadcrumb {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 7px;
        font-size: 14px;
    }

    .atulya-videos-breadcrumb a {
        color: #172965;
        font-weight: 600;
    }

    .atulya-videos-breadcrumb span {
        color: #1c6fd1;
        font-weight: 600;
    }

    .atulya-videos-breadcrumb i {
        color: #78859b;
        font-size: 11px;
    }

    /* =========================================================
       MAIN SECTION
    ========================================================= */

    .atulya-videos-content {
        padding: 70px 0 80px;
    }

    .atulya-videos-heading {
        max-width: 800px;
        margin: 0 auto 35px;
        text-align: center;
    }

    .atulya-videos-kicker {
        display: inline-flex;
        align-items: center;
        gap: 13px;
        margin-bottom: 13px;
        color: #1c6fd1;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
    }

    .atulya-videos-kicker::before {
        content: "";
        width: 25px;
        height: 2px;
        background: #1c6fd1;
    }

    .atulya-videos-heading h2 {
        margin: 0 0 10px;
        color: #172965;
        font-size: clamp(32px, 4vw, 42px);
        line-height: 1.15;
        font-weight: 700;
    }

    .atulya-videos-heading p {
        max-width: 650px;
        margin: 0 auto;
        color: #68738a;
        font-size: 15px;
        line-height: 1.75;
    }

    /* =========================================================
       FILTERS
    ========================================================= */

    .atulya-video-filters {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 13px;
        margin-bottom: 34px;
    }

    .atulya-video-filter {
        padding: 10px 23px;
        border: 0;
        border-radius: 30px;
        background: #f0f3f7;
        color: #172965;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: .25s ease;
    }

    .atulya-video-filter:hover,
    .atulya-video-filter.active {
        background: #1c6fd1;
        color: #fff;
        box-shadow: 0 7px 18px rgba(28, 111, 209, .20);
    }

    /* =========================================================
       VIDEO GRID
    ========================================================= */

    .atulya-video-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .atulya-video-card {
        overflow: hidden;
        border-radius: 8px;
        background: #fff;
        box-shadow: 0 5px 22px rgba(23, 41, 101, .08);
        border: 1px solid #eef1f5;
        transition: .3s ease;
    }

    .atulya-video-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(23, 41, 101, .13);
    }

    /* =========================================================
       THUMBNAIL
    ========================================================= */

    .atulya-video-thumbnail {
        position: relative;
        height: 210px;
        overflow: hidden;
        background: #edf3f8;
    }

    .atulya-video-thumbnail img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        transition: transform .45s ease;
    }

    .atulya-video-card:hover .atulya-video-thumbnail img {
        transform: scale(1.05);
    }

    .atulya-video-thumbnail-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to bottom,
            rgba(0, 0, 0, .02),
            rgba(0, 0, 0, .28)
        );
        pointer-events: none;
    }

    /* =========================================================
       PLAY BUTTON
    ========================================================= */

    .atulya-video-play {
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: 5;
        width: 55px;
        height: 55px;
        padding: 0;
        border: 0;
        border-radius: 50%;
        background: #fff;
        color: #172965;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: translate(-50%, -50%);
        cursor: pointer;
        box-shadow: 0 8px 20px rgba(0, 0, 0, .18);
        transition: .3s ease;
    }

    .atulya-video-play i {
        margin-left: 3px;
        font-size: 18px;
    }

    .atulya-video-play:hover {
        background: #172965;
        color: #fff;
        transform: translate(-50%, -50%) scale(1.08);
    }

    /* =========================================================
       DURATION
    ========================================================= */

    .atulya-video-duration {
        position: absolute;
        right: 11px;
        bottom: 11px;
        z-index: 5;
        padding: 5px 8px;
        border-radius: 5px;
        background: rgba(0, 0, 0, .78);
        color: #fff;
        font-size: 11px;
        font-weight: 600;
    }

    /* =========================================================
       CARD CONTENT
    ========================================================= */

    .atulya-video-card-content {
        padding: 17px 17px 19px;
    }

    .atulya-video-category {
        display: inline-block;
        margin-bottom: 10px;
        padding: 4px 9px;
        border-radius: 5px;
        background: #eaf4ff;
        color: #1c6fd1;
        font-size: 10px;
        font-weight: 700;
    }

    .atulya-video-card-content h3 {
        min-height: 27px;
        margin: 0 0 8px;
        color: #17233f;
        font-size: 17px;
        line-height: 1.4;
        font-weight: 700;
    }

    .atulya-video-card-content p {
        min-height: 47px;
        margin: 0 0 13px;
        color: #68738a;
        font-size: 13px;
        line-height: 1.65;
    }

    .atulya-watch-video {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 0;
        border: 0;
        background: transparent;
        color: #1475cf;
        font-size: 13px;
        font-weight: 700;
        cursor: pointer;
        transition: .25s ease;
    }

    .atulya-watch-video i {
        transition: transform .25s ease;
    }

    .atulya-watch-video:hover {
        color: #172965;
    }

    .atulya-watch-video:hover i {
        transform: translateX(4px);
    }

    /* =========================================================
       BOTTOM INFO / PAGINATION
    ========================================================= */

    .atulya-videos-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        margin-top: 28px;
    }

    .atulya-video-count {
        color: #65728a;
        font-size: 14px;
    }

    .atulya-video-pagination {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .atulya-video-page-btn {
        width: 40px;
        height: 40px;
        padding: 0;
        border: 1px solid #e1e6ed;
        border-radius: 5px;
        background: #fff;
        color: #172965;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: .25s ease;
    }

    .atulya-video-page-btn:hover,
    .atulya-video-page-btn.active {
        border-color: #1c6fd1;
        background: #1c6fd1;
        color: #fff;
    }

    .atulya-video-page-btn:disabled {
        opacity: .5;
        cursor: not-allowed;
    }

    /* =========================================================
       VIDEO MODAL
    ========================================================= */

    .atulya-video-modal {
        position: fixed;
        inset: 0;
        z-index: 999999;
        display: none;
        align-items: flex-end;
        justify-content: center;
        padding: 0 20px 18px;
        background: rgba(0, 0, 0, .18);
        pointer-events: none;
    }

    .atulya-video-modal.active {
        display: flex;
        pointer-events: auto;
    }

    .atulya-video-modal-box {
        position: relative;
        width: min(475px, 100%);
        padding: 9px;
        border-radius: 8px;
        background: #071323;
        box-shadow: 0 18px 50px rgba(0, 0, 0, .35);
        animation: atulyaVideoPopup .3s ease;
    }

    @keyframes atulyaVideoPopup {
        from {
            opacity: 0;
            transform: translateY(35px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .atulya-video-frame {
        position: relative;
        width: 100%;
        padding-top: 56.25%;
        overflow: hidden;
        border-radius: 5px;
        background: #000;
    }

    .atulya-video-frame iframe {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .atulya-video-close {
        position: absolute;
        right: -2px;
        top: -42px;
        width: 32px;
        height: 32px;
        padding: 0;
        border: 0;
        border-radius: 50%;
        background: #172965;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .2);
        transition: .25s ease;
    }

    .atulya-video-close:hover {
        background: #1c6fd1;
        transform: scale(1.08);
    }

    /* =========================================================
       EMPTY
    ========================================================= */

    .atulya-video-empty {
        padding: 70px 20px;
        text-align: center;
        border: 1px solid #edf0f4;
        border-radius: 10px;
        background: #fff;
    }

    .atulya-video-empty i {
        margin-bottom: 15px;
        color: #1c6fd1;
        font-size: 42px;
    }

    .atulya-video-empty h3 {
        margin-bottom: 8px;
        color: #172965;
    }

    .atulya-video-empty p {
        margin: 0;
        color: #68738a;
    }

    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 991px) {

        .atulya-video-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .atulya-videos-content {
            padding: 60px 0 70px;
        }

    }

    @media (max-width: 767px) {

        .atulya-videos-hero {
            padding: 50px 0;
        }

        .atulya-videos-hero h1 {
            font-size: 38px;
        }

        .atulya-video-grid {
            grid-template-columns: 1fr;
            gap: 18px;
        }

        .atulya-video-thumbnail {
            height: 230px;
        }

        .atulya-videos-bottom {
            flex-direction: column;
            align-items: flex-start;
        }

        .atulya-video-pagination {
            align-self: flex-end;
        }

    }

    @media (max-width: 575px) {

        .atulya-videos-container {
            width: calc(100% - 24px);
        }

        .atulya-videos-content {
            padding: 45px 0 55px;
        }

        .atulya-videos-heading {
            margin-bottom: 28px;
        }

        .atulya-video-filters {
            justify-content: flex-start;
            overflow-x: auto;
            flex-wrap: nowrap;
            padding-bottom: 5px;
        }

        .atulya-video-filter {
            flex: 0 0 auto;
        }

        .atulya-video-thumbnail {
            height: 215px;
        }

        .atulya-video-modal {
            padding: 0 10px 12px;
        }

    }
</style>


<div class="atulya-videos-page">

    {{-- =====================================================
         HERO
    ====================================================== --}}

    <section class="atulya-videos-hero">

        <div class="atulya-videos-container">

            <div class="atulya-videos-hero-content">

                <h1>Our Videos</h1>

                <p>
                    Discover healthcare insights, medical awareness
                    and updates from Atulya Hospital.
                </p>

                <div class="atulya-videos-breadcrumb">

                    <a href="{{ url('/') }}">
                        Home
                    </a>

                    <i class="fas fa-chevron-right"></i>

                    <span>
                        Videos
                    </span>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         VIDEOS
    ====================================================== --}}

    <section class="atulya-videos-content">

        <div class="atulya-videos-container">

            <div class="atulya-videos-heading">

                <div class="atulya-videos-kicker">
                    Watch & Learn
                </div>

                <h2>
                    Healthcare Information
                </h2>

                <p>
                    Explore informative videos from our medical team,
                    healthcare awareness content and hospital updates.
                </p>

            </div>


            {{-- =================================================
                 FILTER BUTTONS
            ================================================== --}}

            <div class="atulya-video-filters">

                <button
                    type="button"
                    class="atulya-video-filter active"
                    data-filter="all">
                    All Videos
                </button>

                <button
                    type="button"
                    class="atulya-video-filter"
                    data-filter="awareness">
                    Awareness
                </button>

                <button
                    type="button"
                    class="atulya-video-filter"
                    data-filter="patient">
                    Patient Care
                </button>

                <button
                    type="button"
                    class="atulya-video-filter"
                    data-filter="treatment">
                    Treatments
                </button>

                <button
                    type="button"
                    class="atulya-video-filter"
                    data-filter="hospital">
                    Hospital Updates
                </button>

            </div>


            @if($videos->count())

                @php
                    $videoCollection = $videos->values();
                @endphp

                <div
                    class="atulya-video-grid"
                    id="atulyaVideoGrid">

                    @foreach($videoCollection as $video)

                        @php

                            /*
                            |--------------------------------------------------------------------------
                            | YouTube ID
                            |--------------------------------------------------------------------------
                            */

                            $youtubeId = null;

                            if (
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

                            if ($youtubeId) {

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
                            | Optional category
                            |--------------------------------------------------------------------------
                            */

                            $category = $video->category ?? 'Hospital Updates';

                            $categoryClass = strtolower($category);

                            if (str_contains($categoryClass, 'patient')) {
                                $filterCategory = 'patient';
                            } elseif (str_contains($categoryClass, 'treatment')) {
                                $filterCategory = 'treatment';
                            } elseif (str_contains($categoryClass, 'awareness')) {
                                $filterCategory = 'awareness';
                            } else {
                                $filterCategory = 'hospital';
                            }


                            /*
                            |--------------------------------------------------------------------------
                            | Optional duration
                            |--------------------------------------------------------------------------
                            */

                            $duration = $video->duration ?? null;

                        @endphp


                        <article
                            class="atulya-video-card"
                            data-category="{{ $filterCategory }}">

                            {{-- THUMBNAIL --}}

                            <div class="atulya-video-thumbnail">

                                <img
                                    src="{{ $thumbnail }}"
                                    alt="{{ $video->title }}"
                                    loading="lazy">

                                <div class="atulya-video-thumbnail-overlay"></div>


                                <button
                                    type="button"
                                    class="atulya-video-play"
                                    data-video-url="{{ $video->youtube_url }}"
                                    aria-label="Play {{ $video->title }}">

                                    <i class="fas fa-play"></i>

                                </button>


                                @if($duration)

                                    <span class="atulya-video-duration">
                                        {{ $duration }}
                                    </span>

                                @endif

                            </div>


                            {{-- CONTENT --}}

                            <div class="atulya-video-card-content">

                                <span class="atulya-video-category">
                                    {{ $category }}
                                </span>

                                <h3>
                                    {{ $video->title }}
                                </h3>

                                <p>

                                    @if($video->description)

                                        {{ \Illuminate\Support\Str::limit($video->description, 100) }}

                                    @else

                                        Learn more through informative healthcare
                                        content from Atulya Hospital.

                                    @endif

                                </p>


                                <button
                                    type="button"
                                    class="atulya-watch-video"
                                    data-video-url="{{ $video->youtube_url }}">

                                    Watch Video

                                    <i class="fas fa-arrow-right"></i>

                                </button>

                            </div>

                        </article>

                    @endforeach

                </div>


                {{-- =================================================
                     BOTTOM
                ================================================== --}}

                <div class="atulya-videos-bottom">

                    <div
                        class="atulya-video-count"
                        id="atulyaVideoCount">

                        Showing {{ $videoCollection->count() }}
                        of {{ $videoCollection->count() }} videos

                    </div>


                    <div class="atulya-video-pagination">

                        <button
                            type="button"
                            class="atulya-video-page-btn"
                            id="atulyaVideoPrev"
                            disabled>

                            <i class="fas fa-arrow-left"></i>

                        </button>


                        <button
                            type="button"
                            class="atulya-video-page-btn active">

                            1

                        </button>


                        <button
                            type="button"
                            class="atulya-video-page-btn"
                            id="atulyaVideoNext"
                            disabled>

                            <i class="fas fa-arrow-right"></i>

                        </button>

                    </div>

                </div>


            @else

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
    class="atulya-video-modal">

    <div class="atulya-video-modal-box">

        <button
            type="button"
            id="atulyaVideoClose"
            class="atulya-video-close"
            aria-label="Close video">

            <i class="fas fa-times"></i>

        </button>


        <div class="atulya-video-frame">

            <iframe
                id="atulyaVideoIframe"
                src=""
                title="Atulya Hospital Video"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
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


    if (modal && iframe) {

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

            document.body.style.overflow = 'hidden';
        }


        function closeVideo() {

            modal.classList.remove('active');

            iframe.src = '';

            document.body.style.overflow = '';
        }


        document
            .querySelectorAll('[data-video-url]')
            .forEach(function (button) {

                button.addEventListener(
                    'click',
                    function () {

                        openVideo(
                            this.getAttribute(
                                'data-video-url'
                            )
                        );

                    }
                );

            });


        if (closeButton) {

            closeButton.addEventListener(
                'click',
                closeVideo
            );

        }


        modal.addEventListener(
            'click',
            function (event) {

                if (event.target === modal) {
                    closeVideo();
                }

            }
        );


        document.addEventListener(
            'keydown',
            function (event) {

                if (event.key === 'Escape') {
                    closeVideo();
                }

            }
        );

    }


    /*
    |--------------------------------------------------------------------------
    | CATEGORY FILTER
    |--------------------------------------------------------------------------
    */

    const filterButtons =
        document.querySelectorAll(
            '.atulya-video-filter'
        );

    const videoCards =
        document.querySelectorAll(
            '.atulya-video-card'
        );

    const videoCount =
        document.getElementById(
            'atulyaVideoCount'
        );


    filterButtons.forEach(function (button) {

        button.addEventListener(
            'click',
            function () {

                filterButtons.forEach(
                    function (item) {
                        item.classList.remove('active');
                    }
                );

                this.classList.add('active');


                const filter =
                    this.dataset.filter;

                let visibleCount = 0;


                videoCards.forEach(
                    function (card) {

                        const category =
                            card.dataset.category;


                        if (
                            filter === 'all' ||
                            category === filter
                        ) {

                            card.style.display =
                                '';

                            visibleCount++;

                        } else {

                            card.style.display =
                                'none';

                        }

                    }
                );


                if (videoCount) {

                    videoCount.textContent =
                        'Showing ' +
                        visibleCount +
                        ' of ' +
                        videoCards.length +
                        ' videos';

                }

            }
        );

    }

});

</script>

@endpush

@endsection