@extends('website.layout.app')

@section('title', $blog->title)

@section('content')

<section class="blog-details-wrapper section-padding">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9">


                <!-- Blog Image -->

                @if($blog->featured_image)

                    <div class="blog-details-image mb-4">

                        <img
                            src="{{ asset('storage/' . $blog->featured_image) }}"
                            alt="{{ $blog->title }}"
                            class="w-100">

                    </div>

                @endif


                <!-- Blog Meta -->

                <div class="post-meta mb-3">

                    <span>

                        <i class="far fa-user"></i>

                        {{ $blog->author ?? 'Atulya Hospital' }}

                    </span>


                    @if($blog->published_at)

                        <span>

                            <i class="fal fa-calendar-alt"></i>

                            {{ $blog->published_at->format('d M Y') }}

                        </span>

                    @else

                        <span>

                            <i class="fal fa-calendar-alt"></i>

                            {{ $blog->created_at->format('d M Y') }}

                        </span>

                    @endif


                    @if($blog->category)

                        <span>

                            <i class="fal fa-folder"></i>

                            {{ $blog->category }}

                        </span>

                    @endif

                </div>


                <!-- Blog Title -->

                <h1 class="mb-4">

                    {{ $blog->title }}

                </h1>


                <!-- Short Description -->

                @if($blog->short_description)

                    <p class="mb-4">

                        {{ $blog->short_description }}

                    </p>

                @endif


                <!-- Blog Content -->

                @if($blog->content)

                    <div class="blog-content">

                        {!! nl2br(e($blog->content)) !!}

                    </div>

                @endif


                <!-- Back Button -->

                <div class="mt-5">

                    <a
                        href="{{ route('blog') }}"
                        class="theme-btn">

                        <i class="far fa-chevron-left"></i>

                        Back To Blog

                    </a>

                </div>


            </div>

        </div>

    </div>

</section>

@endsection