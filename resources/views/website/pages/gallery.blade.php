@extends('website.layout.app')

@section('title', 'Gallery')

@section('content')

    <section class="service-details-section section-padding pt-80 pb-80">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="row g-4">

                    <!-- LEFT SIDEBAR -->
                    <div class="col-lg-4 order-2 order-xl-1">
                        <div class="service-details-sidebar sticky-style">
                            <!-- Dynamic Gallery Categories -->
                            <div class="sidebar-widget">
                                <ul class="wow fadeInUp" data-wow-delay=".3s">
                                    @forelse($galleries as $categoryName => $items)
                                        @php $slug = Str::slug($categoryName); @endphp
                                        <li>
                                            <a href="#{{ $slug }}">
                                                <span>{{ $categoryName }}</span>
                                                <span class="icon">
                                                    <i class="far fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </li>
                                    @empty
                                        <li><span class="text-muted">No categories available</span></li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT CONTENT -->
                    <div class="col-lg-8 order-1 order-xl-2">
                        <div class="service-details-right-items">

                            <h3>Photo & Video Gallery</h3>
                            <p>Explore our hospital through photos and videos showcasing our infrastructure, facilities,
                                medical activities, events and patient-care environment.</p>

                           
                            @forelse($galleries as $categoryName => $items)
                                @php
                                    $slug = Str::slug($categoryName);
                                @endphp
                                <div id="{{ $slug }}" class="gallery-category mb-5">
                                    <h4>{{ $categoryName }}</h4>
                                    <div class="row g-3">
                                        @foreach ($items as $item)
                                            @php
                                                // Normalize $item to an object to prevent reading properties on booleans/arrays
                                                $mediaType = is_object($item)
                                                    ? $item->media_type
                                                    : $item['media_type'] ?? null;
                                                $filePath = is_object($item)
                                                    ? $item->file_path
                                                    : $item['file_path'] ?? null;
                                                $title = is_object($item) ? $item->title : $item['title'] ?? null;
                                            @endphp

                                            @if ($filePath)
                                                <div class="col-md-6">
                                                    <div class="service-img">
                                                        @if ($mediaType === 'video')
                                                            <div class="ratio ratio-16x9">
                                                                <iframe src="{{ $filePath }}"
                                                                    title="{{ $title ?? $categoryName }}"
                                                                    allowfullscreen></iframe>
                                                            </div>
                                                        @else
                                                            <img src="{{ asset('storage/' . $filePath) }}"
                                                                alt="{{ $title ?? $categoryName }}"
                                                                class="object-fit-cover w-100" style="height: 240px;">
                                                        @endif
                                                    </div>
                                                    @if ($title)
                                                        <p class="small text-muted mt-2 mb-0">{{ $title }}</p>
                                                    @endif
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @empty
                                <p class="text-muted">No gallery items have been uploaded yet.</p>
                            @endforelse

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
