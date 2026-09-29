@extends('website.layout.app')

@section('title', 'Gallery')

@section('page-banner')

    @include('website.partials.page-banner', [
        'title' => 'Gallery'
    ])

@endsection

@section('content')

<section class="service-details-section section-padding pt-80 pb-80">

    <div class="container">

        <div class="service-details-wrapper">

            <div class="row g-4">

                <!-- LEFT SIDEBAR -->
                <div class="col-lg-4 order-2 order-xl-1">

                    <div class="service-details-sidebar sticky-style">

                        <div class="sidebar-widget">

                            <ul class="gallery-sidebar wow fadeInUp"
                                data-wow-delay=".3s">

                                @forelse($galleries as $categoryName => $items)

                                    @php
                                        $slug = Str::slug($categoryName);
                                    @endphp

                                    <li>

                                        <a href="#{{ $slug }}"
                                           class="gallery-sidebar-link {{ $loop->first ? 'active' : '' }}">

                                            <span>
                                                {{ $categoryName }}
                                            </span>

                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>

                                        </a>

                                    </li>

                                @empty

                                    <li>
                                        <span class="text-muted">
                                            No categories available
                                        </span>
                                    </li>

                                @endforelse

                            </ul>

                        </div>

                    </div>

                </div>


                <!-- RIGHT CONTENT -->
                <div class="col-lg-8 order-1 order-xl-2">

                    <div class="service-details-right-items">

                        <div class="gallery-intro mb-5">

                            <h3>
                                Photo & Video Gallery
                            </h3>

                            <p>
                                Explore our hospital through photos and videos
                                showcasing our infrastructure, facilities,
                                medical activities, events and patient-care
                                environment.
                            </p>

                        </div>


                        @forelse($galleries as $categoryName => $items)

                            @php
                                $slug = Str::slug($categoryName);
                            @endphp

                            <div id="{{ $slug }}"
                                 class="gallery-category">

                                <h4>
                                    {{ $categoryName }}
                                </h4>


                                <div class="row g-4">

                                    @foreach($items as $item)

                                        @php

                                            $mediaType = is_object($item)
                                                ? $item->media_type
                                                : ($item['media_type'] ?? null);

                                            $filePath = is_object($item)
                                                ? $item->file_path
                                                : ($item['file_path'] ?? null);

                                            $title = is_object($item)
                                                ? $item->title
                                                : ($item['title'] ?? null);

                                        @endphp


                                        @if($filePath)

                                            <div class="col-md-6">

                                                <div class="gallery-card">

                                                    @if($mediaType === 'video')

                                                        <div class="gallery-video">

                                                            <iframe
                                                                src="{{ $filePath }}"
                                                                title="{{ $title ?? $categoryName }}"
                                                                allowfullscreen>
                                                            </iframe>

                                                        </div>

                                                    @else

                                                        <div class="gallery-image">

                                                            <img
                                                                src="{{ asset('storage/' . $filePath) }}"
                                                                alt="{{ $title ?? $categoryName }}">

                                                        </div>

                                                    @endif

                                                </div>

                                            </div>

                                        @endif

                                    @endforeach

                                </div>

                            </div>

                        @empty

                            <div class="text-center py-5">

                                <p class="text-muted mb-0">
                                    No gallery items have been uploaded yet.
                                </p>

                            </div>

                        @endforelse

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<style>

    .gallery-sidebar-link {
        transition: all 0.3s ease;
    }

    .service-details-sidebar .sidebar-widget ul li a.active {
    background-color: #02c9b8;
    color: var(--white);
}

.service-details-sidebar .sidebar-widget ul li a.active .icon {
    color: black;
}

    .gallery-category {
        scroll-margin-top: 100px;
        margin-bottom: 55px;
    }

    .gallery-category h4 {
        margin-bottom: 20px;
    }

    .gallery-card {
        width: 100%;
        overflow: hidden;
        border-radius: 8px;
    }

    .gallery-image {
        width: 100%;
        height: 240px;
        overflow: hidden;
        border-radius: 8px;
    }

    .gallery-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }

    .gallery-image:hover img {
        transform: scale(1.05);
    }

    .gallery-video {
        width: 100%;
        height: 240px;
        overflow: hidden;
        border-radius: 8px;
    }

    .gallery-video iframe {
        width: 100%;
        height: 100%;
        border: 0;
        display: block;
    }

    @media (max-width: 767px) {

        .gallery-category {
            margin-bottom: 40px;
        }

        .gallery-image,
        .gallery-video {
            height: 220px;
        }

    }

</style>


<script>
    document.addEventListener('DOMContentLoaded', function () {

        const sections = document.querySelectorAll('.gallery-category');
        const links = document.querySelectorAll('.gallery-sidebar-link');

        const observer = new IntersectionObserver((entries) => {

            entries.forEach((entry) => {

                if (entry.isIntersecting) {

                    const id = entry.target.getAttribute('id');

                    links.forEach((link) => {
                        link.classList.remove('active');
                    });

                    const activeLink = document.querySelector(
                        '.gallery-sidebar-link[href="#' + id + '"]'
                    );

                    if (activeLink) {
                        activeLink.classList.add('active');
                    }
                }

            });

        }, {
            root: null,
            rootMargin: '-120px 0px -50% 0px',
            threshold: 0
        });

        sections.forEach((section) => {
            observer.observe(section);
        });

    });
</script>

@endsection