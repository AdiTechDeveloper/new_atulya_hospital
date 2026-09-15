@extends('website.layout.app')

@section('title', 'Videos | Atulya Super Speciality Hospital & ICU | Ahmedabad')

@section('meta_description', 'Watch healthcare awareness videos, medical information and updates from Atulya Super Speciality Hospital & ICU, Ahmedabad.')

@section('content')



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

                <button type="button" class="atulya-video-filter active" data-filter="all">
                    All Videos
                </button>

                <button type="button" class="atulya-video-filter" data-filter="awareness">
                    Awareness
                </button>

                <button type="button" class="atulya-video-filter" data-filter="patient">
                    Patient Care
                </button>

                <button type="button" class="atulya-video-filter" data-filter="treatment">
                    Treatments
                </button>

                <button type="button" class="atulya-video-filter" data-filter="hospital">
                    Hospital Updates
                </button>

            </div>


            @if($videos->count())

            @php
            $videoCollection = $videos->values();
            @endphp

            <div class="atulya-video-grid" id="atulyaVideoGrid">

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


                <article class="atulya-video-card" data-category="{{ $filterCategory }}">

                    {{-- THUMBNAIL --}}

                    <div class="atulya-video-thumbnail">

                        <img src="{{ $thumbnail }}" alt="{{ $video->title }}" loading="lazy">

                        <div class="atulya-video-thumbnail-overlay"></div>


                        <button type="button" class="atulya-video-play" data-video-url="{{ $video->youtube_url }}" aria-label="Play {{ $video->title }}">

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


                        <button type="button" class="atulya-watch-video" data-video-url="{{ $video->youtube_url }}">

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

                <div class="atulya-video-count" id="atulyaVideoCount">

                    Showing {{ $videoCollection->count() }}
                    of {{ $videoCollection->count() }} videos

                </div>


                <div class="atulya-video-pagination">

                    <button type="button" class="atulya-video-page-btn" id="atulyaVideoPrev" disabled>

                        <i class="fas fa-arrow-left"></i>

                    </button>


                    <button type="button" class="atulya-video-page-btn active">

                        1

                    </button>


                    <button type="button" class="atulya-video-page-btn" id="atulyaVideoNext" disabled>

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

<div id="atulyaVideoModal" class="atulya-video-modal">

    <div class="atulya-video-modal-box">

        <button type="button" id="atulyaVideoClose" class="atulya-video-close" aria-label="Close video">

            <i class="fas fa-times"></i>

        </button>


        <div class="atulya-video-frame">

            <iframe id="atulyaVideoIframe" src="" title="Atulya Hospital Video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
            </iframe>

        </div>

    </div>

</div>


@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function() {

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
                .forEach(function(button) {

                    button.addEventListener(
                        'click'
                        , function() {

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
                    'click'
                    , closeVideo
                );

            }


            modal.addEventListener(
                'click'
                , function(event) {

                    if (event.target === modal) {
                        closeVideo();
                    }

                }
            );


            document.addEventListener(
                'keydown'
                , function(event) {

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


        filterButtons.forEach(function(button) {

            button.addEventListener(
                'click'
                , function() {

                    filterButtons.forEach(
                        function(item) {
                            item.classList.remove('active');
                        }
                    );

                    this.classList.add('active');


                    const filter =
                        this.dataset.filter;

                    let visibleCount = 0;


                    videoCards.forEach(
                        function(card) {

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

        })
    });

</script>

@endpush

@endsection
