@extends('website.layout.app')

@section('title', 'Videos | Atulya Super Speciality Hospital & ICU')
@section('meta_description', 'Watch healthcare awareness, medical information and hospital videos from Atulya Super Speciality Hospital & ICU, Ahmedabad.')

@section('content')

@php
    $featuredVideo = $videos->firstWhere('is_featured', true) ?? $videos->first();
    $otherVideos = $featuredVideo
        ? $videos->filter(fn ($video) => $video->id !== $featuredVideo->id)
        : collect();

    function getYoutubeVideoId($url)
    {
        if (!$url) {
            return null;
        }

        $patterns = [
            '/youtube\.com\/watch\?v=([^&]+)/',
            '/youtu\.be\/([^?&]+)/',
            '/youtube\.com\/embed\/([^?&]+)/',
            '/youtube\.com\/shorts\/([^?&]+)/',
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $url, $matches)) {
                return $matches[1];
            }
        }

        return null;
    }
@endphp


{{-- ==========================================================
    PAGE BANNER
========================================================== --}}
<section class="breadcrumb-wrapper fix bg-cover"
    style="background-image: url('{{ asset('assets/img/breadcrumb.jpg') }}');">

    <div class="container">

        <div class="breadcrumb-content">

            <div class="breadcrumb-content-heading">

                <h1 class="wow fadeInUp" data-wow-delay=".2s">
                    Our Videos
                </h1>

                <p class="wow fadeInUp" data-wow-delay=".3s">
                    Discover healthcare insights, medical awareness
                    and updates from Atulya Hospital.
                </p>

            </div>

            <ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".4s">

                <li>
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </li>

                <li>
                    <i class="fas fa-chevron-right"></i>
                </li>

                <li>
                    Videos
                </li>

            </ul>

        </div>

    </div>

</section>


{{-- ==========================================================
    INTRO
========================================================== --}}
<section class="videos-intro-section section-padding pb-0">

    <div class="container">

        <div class="section-title text-center">

            <div class="section-title-content">

                <span class="wow fadeInUp" data-wow-delay=".2s">

                    <img src="{{ asset('assets/img/home-1/section-title/heart.png') }}"
                         alt="Atulya Hospital">

                    WATCH &amp; LEARN

                </span>

                <h2 class="wow fadeInUp" data-wow-delay=".4s">

                    Healthcare Information
                    <br>
                    <span>That Matters</span>

                </h2>

                <p class="wow fadeInUp mt-3" data-wow-delay=".6s">

                    Explore informative videos from our medical team,
                    healthcare awareness content and hospital updates.

                </p>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    FEATURED VIDEO
========================================================== --}}
@if($featuredVideo)

    @php
        $featuredYoutubeId = getYoutubeVideoId($featuredVideo->youtube_url);

        if ($featuredVideo->thumbnail) {
            $featuredThumbnail = asset('storage/' . $featuredVideo->thumbnail);
        } elseif ($featuredYoutubeId) {
            $featuredThumbnail = 'https://img.youtube.com/vi/' . $featuredYoutubeId . '/maxresdefault.jpg';
        } else {
            $featuredThumbnail = asset('assets/img/home-1/counter/video-img.png');
        }
    @endphp


    <section class="featured-video-section section-padding">

        <div class="container">

            <div class="featured-video-box wow fadeInUp"
                 data-wow-delay=".2s">

                {{-- Image --}}
                <div class="featured-video-image">

                    <img src="{{ $featuredThumbnail }}"
                         alt="{{ $featuredVideo->title }}">


                    <div class="featured-video-overlay"></div>


                    {{-- Featured Label --}}
                    <div class="featured-label">

                        <i class="fas fa-star"></i>

                        Featured Video

                    </div>


                    {{-- Play --}}
                    <button type="button"
                            class="main-video-play"
                            data-video-url="{{ $featuredVideo->youtube_url }}">

                        <span>
                            <i class="fas fa-play"></i>
                        </span>

                    </button>


                    @if($featuredVideo->duration)

                        <div class="featured-duration">
                            {{ $featuredVideo->duration }}
                        </div>

                    @endif

                </div>


                {{-- Content --}}
                <div class="featured-video-content">

                    <div class="video-content-meta">

                        @if($featuredVideo->category)

                            <span>
                                <i class="far fa-folder-open"></i>
                                {{ $featuredVideo->category }}
                            </span>

                        @endif

                        @if($featuredVideo->language)

                            <span>
                                <i class="fas fa-globe"></i>
                                {{ $featuredVideo->language }}
                            </span>

                        @endif

                    </div>


                    <h3>
                        {{ $featuredVideo->title }}
                    </h3>


                    @if($featuredVideo->description)

                        <p>
                            {{ $featuredVideo->description }}
                        </p>

                    @endif


                    <button type="button"
                            class="theme-btn video-content-play"
                            data-video-url="{{ $featuredVideo->youtube_url }}">

                        <i class="fas fa-play me-2"></i>

                        Watch Video

                    </button>

                </div>

            </div>

        </div>

    </section>

@endif


{{-- ==========================================================
    ALL VIDEOS
========================================================== --}}
@if($otherVideos->count())

    <section class="all-videos-section section-padding pt-0">

        <div class="container">

            <div class="videos-heading-row">

                <div>

                    <span class="small-heading">
                        MORE FROM ATULYA
                    </span>

                    <h2>
                        Latest Videos
                    </h2>

                </div>

                <div class="videos-count">

                    <span>
                        {{ $videos->count() }}
                    </span>

                    Videos

                </div>

            </div>


            <div class="row g-4">

                @foreach($otherVideos as $video)

                    @php
                        $youtubeId = getYoutubeVideoId($video->youtube_url);

                        if ($video->thumbnail) {
                            $thumbnail = asset('storage/' . $video->thumbnail);
                        } elseif ($youtubeId) {
                            $thumbnail = 'https://img.youtube.com/vi/' . $youtubeId . '/hqdefault.jpg';
                        } else {
                            $thumbnail = asset('assets/img/home-1/counter/video-img.png');
                        }
                    @endphp


                    <div class="col-xl-4 col-lg-4 col-md-6">

                        <article class="modern-video-card wow fadeInUp"
                                 data-wow-delay=".{{ (($loop->index % 3) + 2) }}s">


                            {{-- Thumbnail --}}
                            <div class="modern-video-thumb">

                                <img src="{{ $thumbnail }}"
                                     alt="{{ $video->title }}">


                                <div class="modern-video-overlay"></div>


                                {{-- Play --}}
                                <button type="button"
                                        class="modern-play-btn"
                                        data-video-url="{{ $video->youtube_url }}"
                                        aria-label="Play video">

                                    <i class="fas fa-play"></i>

                                </button>


                                @if($video->duration)

                                    <span class="modern-duration">
                                        {{ $video->duration }}
                                    </span>

                                @endif

                            </div>


                            {{-- Content --}}
                            <div class="modern-video-content">

                                <div class="modern-video-meta">

                                    @if($video->category)

                                        <span>
                                            {{ $video->category }}
                                        </span>

                                    @endif

                                    @if($video->language)

                                        <span>
                                            {{ $video->language }}
                                        </span>

                                    @endif

                                </div>


                                <h3>
                                    {{ $video->title }}
                                </h3>


                                @if($video->description)

                                    <p>
                                        {{ \Illuminate\Support\Str::limit($video->description, 105) }}
                                    </p>

                                @endif


                                <button type="button"
                                        class="modern-watch-btn"
                                        data-video-url="{{ $video->youtube_url }}">

                                    Watch Now

                                    <i class="fas fa-arrow-right"></i>

                                </button>

                            </div>

                        </article>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

@endif


{{-- ==========================================================
    EMPTY STATE
========================================================== --}}
@if(!$videos->count())

    <section class="section-padding">

        <div class="container">

            <div class="videos-empty">

                <div class="empty-icon">
                    <i class="fas fa-video"></i>
                </div>

                <h3>
                    Videos Coming Soon
                </h3>

                <p>
                    We are preparing informative healthcare videos for you.
                </p>

                <a href="{{ url('/') }}" class="theme-btn">
                    Back To Home
                </a>

            </div>

        </div>

    </section>

@endif


{{-- ==========================================================
    VIDEO MODAL
========================================================== --}}
<div id="videoModal"
     class="atulya-video-modal">

    <div class="atulya-video-modal-box">

        <button type="button"
                id="closeVideo"
                class="atulya-video-close">

            <i class="fas fa-times"></i>

        </button>


        <div class="atulya-video-wrapper">

            <iframe id="popupVideo"
                    src=""
                    title="Atulya Hospital Video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
            </iframe>

        </div>

    </div>

</div>


{{-- ==========================================================
    STYLES
========================================================== --}}
@push('styles')

<style>

/* ==========================================================
   INTRO
========================================================== */

.videos-intro-section {
    padding-bottom: 55px;
}

.videos-intro-section .section-title-content > p {
    max-width: 650px;
    margin-left: auto;
    margin-right: auto;
}

.videos-intro-section h2 span {
    color: #172965;
}


/* ==========================================================
   FEATURED VIDEO
========================================================== */

.featured-video-section {
    padding-top: 25px;
}

.featured-video-box {
    position: relative;
    display: grid;
    grid-template-columns: 1.35fr .65fr;
    min-height: 460px;
    overflow: hidden;
    border-radius: 20px;
    background: #f5f8fc;
    box-shadow: 0 25px 65px rgba(23, 41, 101, .10);
}

.featured-video-image {
    position: relative;
    min-height: 460px;
    overflow: hidden;
    background: #111;
}

.featured-video-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .6s ease;
}

.featured-video-box:hover .featured-video-image img {
    transform: scale(1.04);
}

.featured-video-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        90deg,
        rgba(0, 0, 0, .05),
        rgba(0, 0, 0, .45)
    );
}

.featured-label {
    position: absolute;
    top: 25px;
    left: 25px;
    z-index: 3;

    display: inline-flex;
    align-items: center;
    gap: 8px;

    padding: 9px 15px;

    border-radius: 30px;

    background: rgba(255,255,255,.95);
    color: #172965;

    font-size: 13px;
    font-weight: 600;
}

.featured-label i {
    font-size: 12px;
}

.main-video-play {
    position: absolute;
    left: 50%;
    top: 50%;

    transform: translate(-50%, -50%);

    width: 88px;
    height: 88px;

    padding: 0;

    border: 0;
    border-radius: 50%;

    background: #fff;

    display: flex;
    align-items: center;
    justify-content: center;

    cursor: pointer;

    box-shadow: 0 15px 45px rgba(0,0,0,.25);

    z-index: 4;

    transition: all .35s ease;
}

.main-video-play span {
    width: 62px;
    height: 62px;

    border-radius: 50%;

    background: #172965;
    color: #fff;

    display: flex;
    align-items: center;
    justify-content: center;
}

.main-video-play i {
    margin-left: 3px;
    font-size: 19px;
}

.main-video-play:hover {
    transform: translate(-50%, -50%) scale(1.08);
}

.featured-duration {
    position: absolute;
    right: 20px;
    bottom: 20px;

    z-index: 3;

    padding: 7px 11px;

    border-radius: 5px;

    background: rgba(0,0,0,.75);
    color: #fff;

    font-size: 13px;
}

.featured-video-content {
    display: flex;
    flex-direction: column;
    justify-content: center;

    padding: 55px 45px;
}

.video-content-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 18px;

    margin-bottom: 18px;
}

.video-content-meta span {
    color: #69758a;
    font-size: 13px;
}

.video-content-meta i {
    margin-right: 6px;
    color: #172965;
}

.featured-video-content h3 {
    margin-bottom: 18px;

    font-size: 31px;
    line-height: 1.25;
}

.featured-video-content p {
    color: #69758a;
    line-height: 1.8;

    margin-bottom: 28px;
}

.video-content-play {
    align-self: flex-start;
}


/* ==========================================================
   VIDEO HEADING
========================================================== */

.all-videos-section {
    padding-top: 25px;
}

.videos-heading-row {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;

    margin-bottom: 35px;
}

.small-heading {
    display: block;

    margin-bottom: 8px;

    color: #172965;

    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1.5px;
}

.videos-heading-row h2 {
    margin: 0;

    font-size: 34px;
    line-height: 1.2;
}

.videos-count {
    color: #69758a;
    font-size: 14px;
}

.videos-count span {
    color: #172965;
    font-size: 22px;
    font-weight: 700;
}


/* ==========================================================
   MODERN VIDEO CARD
========================================================== */

.modern-video-card {
    height: 100%;
    overflow: hidden;

    background: #fff;

    border: 1px solid #edf0f5;
    border-radius: 15px;

    box-shadow: 0 12px 35px rgba(23,41,101,.06);

    transition: all .35s ease;
}

.modern-video-card:hover {
    transform: translateY(-8px);

    box-shadow: 0 20px 45px rgba(23,41,101,.12);
}

.modern-video-thumb {
    position: relative;

    height: 245px;

    overflow: hidden;

    background: #111;
}

.modern-video-thumb img {
    width: 100%;
    height: 100%;

    object-fit: cover;

    display: block;

    transition: transform .55s ease;
}

.modern-video-card:hover .modern-video-thumb img {
    transform: scale(1.06);
}

.modern-video-overlay {
    position: absolute;
    inset: 0;

    background: linear-gradient(
        to bottom,
        rgba(0,0,0,.03),
        rgba(0,0,0,.48)
    );
}

.modern-play-btn {
    position: absolute;

    left: 50%;
    top: 50%;

    transform: translate(-50%, -50%);

    width: 64px;
    height: 64px;

    padding: 0;

    border: 0;
    border-radius: 50%;

    background: #fff;
    color: #172965;

    display: flex;
    align-items: center;
    justify-content: center;

    cursor: pointer;

    z-index: 3;

    box-shadow: 0 10px 30px rgba(0,0,0,.2);

    transition: all .3s ease;
}

.modern-play-btn i {
    margin-left: 3px;
}

.modern-play-btn:hover {
    transform: translate(-50%, -50%) scale(1.1);

    background: #172965;
    color: #fff;
}

.modern-duration {
    position: absolute;

    right: 14px;
    bottom: 14px;

    padding: 6px 9px;

    background: rgba(0,0,0,.75);
    color: #fff;

    border-radius: 4px;

    font-size: 12px;

    z-index: 3;
}

.modern-video-content {
    padding: 24px;
}

.modern-video-meta {
    display: flex;
    gap: 9px;
    flex-wrap: wrap;

    margin-bottom: 11px;
}

.modern-video-meta span {
    padding: 5px 10px;

    border-radius: 20px;

    background: #f1f4f9;
    color: #172965;

    font-size: 11px;
    font-weight: 600;
}

.modern-video-content h3 {
    margin-bottom: 10px;

    font-size: 20px;
    line-height: 1.4;
}

.modern-video-content p {
    min-height: 48px;

    margin-bottom: 17px;

    color: #69758a;

    font-size: 14px;
    line-height: 1.7;
}

.modern-watch-btn {
    padding: 0;

    border: 0;
    background: transparent;

    color: #172965;

    font-size: 14px;
    font-weight: 700;

    cursor: pointer;
}

.modern-watch-btn i {
    margin-left: 7px;

    transition: transform .3s ease;
}

.modern-watch-btn:hover i {
    transform: translateX(5px);
}


/* ==========================================================
   EMPTY
========================================================== */

.videos-empty {
    max-width: 600px;

    margin: 0 auto;

    padding: 70px 25px;

    text-align: center;

    background: #f6f8fb;

    border-radius: 15px;
}

.empty-icon {
    width: 75px;
    height: 75px;

    margin: 0 auto 20px;

    border-radius: 50%;

    background: #e9edf5;
    color: #172965;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 28px;
}

.videos-empty h3 {
    margin-bottom: 10px;
}

.videos-empty p {
    color: #69758a;

    margin-bottom: 25px;
}


/* ==========================================================
   MODAL
========================================================== */

.atulya-video-modal {
    position: fixed;

    inset: 0;

    z-index: 999999;

    display: none;

    align-items: center;
    justify-content: center;

    padding: 25px;

    background: rgba(4, 9, 20, .92);
}

.atulya-video-modal.active {
    display: flex;
}

.atulya-video-modal-box {
    position: relative;

    width: 100%;
    max-width: 1100px;

    background: #000;

    border-radius: 12px;
}

.atulya-video-wrapper {
    position: relative;

    width: 100%;

    padding-top: 56.25%;

    overflow: hidden;

    border-radius: 12px;
}

.atulya-video-wrapper iframe {
    position: absolute;

    inset: 0;

    width: 100%;
    height: 100%;

    border: 0;
}

.atulya-video-close {
    position: absolute;

    right: 0;
    top: -52px;

    width: 42px;
    height: 42px;

    padding: 0;

    border: 0;
    border-radius: 50%;

    background: #fff;
    color: #172965;

    display: flex;
    align-items: center;
    justify-content: center;

    cursor: pointer;

    z-index: 5;

    transition: all .3s ease;
}

.atulya-video-close:hover {
    background: #172965;
    color: #fff;
}


/* ==========================================================
   RESPONSIVE
========================================================== */

@media (max-width: 991px) {

    .featured-video-box {
        grid-template-columns: 1fr;
    }

    .featured-video-image {
        min-height: 420px;
    }

    .featured-video-content {
        padding: 35px;
    }

    .featured-video-content h3 {
        font-size: 27px;
    }

}


@media (max-width: 767px) {

    .videos-intro-section {
        padding-bottom: 35px;
    }

    .featured-video-image {
        min-height: 320px;
    }

    .featured-video-content {
        padding: 28px 22px;
    }

    .featured-video-content h3 {
        font-size: 24px;
    }

    .videos-heading-row {
        align-items: flex-start;
        gap: 15px;
        flex-direction: column;
    }

    .videos-heading-row h2 {
        font-size: 29px;
    }

    .modern-video-thumb {
        height: 225px;
    }

    .atulya-video-modal {
        padding: 15px;
    }

}


@media (max-width: 480px) {

    .featured-video-image {
        min-height: 250px;
    }

    .main-video-play {
        width: 72px;
        height: 72px;
    }

    .main-video-play span {
        width: 52px;
        height: 52px;
    }

    .featured-label {
        top: 15px;
        left: 15px;
    }

    .modern-video-thumb {
        height: 210px;
    }

}

</style>

@endpush


{{-- ==========================================================
   JAVASCRIPT
========================================================== --}}
@push('scripts')

<script>

document.addEventListener('DOMContentLoaded', function () {

    const modal = document.getElementById('videoModal');
    const iframe = document.getElementById('popupVideo');
    const closeButton = document.getElementById('closeVideo');

    if (!modal || !iframe) {
        return;
    }


    /*
    |--------------------------------------------------------------------------
    | Extract YouTube ID
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

            const match = url.match(pattern);

            if (match) {
                return match[1];
            }

        }

        return null;
    }


    /*
    |--------------------------------------------------------------------------
    | Open Video
    |--------------------------------------------------------------------------
    */

    function openVideo(url) {

        const videoId = getYoutubeId(url);

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


    /*
    |--------------------------------------------------------------------------
    | Close Video
    |--------------------------------------------------------------------------
    */

    function closeVideo() {

        modal.classList.remove('active');

        iframe.src = '';

        document.body.style.overflow = '';
    }


    /*
    |--------------------------------------------------------------------------
    | All Play Buttons
    |--------------------------------------------------------------------------
    */

    document.querySelectorAll('[data-video-url]')
        .forEach(function (button) {

            button.addEventListener('click', function () {

                openVideo(
                    this.getAttribute('data-video-url')
                );

            });

        });


    /*
    |--------------------------------------------------------------------------
    | Close
    |--------------------------------------------------------------------------
    */

    closeButton.addEventListener('click', closeVideo);


    /*
    |--------------------------------------------------------------------------
    | Outside Click
    |--------------------------------------------------------------------------
    */

    modal.addEventListener('click', function (event) {

        if (event.target === modal) {
            closeVideo();
        }

    });


    /*
    |--------------------------------------------------------------------------
    | ESC
    |--------------------------------------------------------------------------
    */

    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape') {
            closeVideo();
        }

    });

});

</script>

@endpush

@endsection