@extends('website.layout.app')

@section('title', 'Blog')

@section('content')


<!-- =========================
        PAGE HEADER
    ========================== -->

<section class="breadcrumb-section fix">
    <div class="container">
        <div class="breadcrumb-wrapper">

            <div class="breadcrumb-content text-center">

                <span
                    class="wow fadeInUp"
                    data-wow-delay=".2s"
                    style="
                        display: inline-block;
                        padding: 5px;
                        background: #e4f8f7;
                        color: #00b8b0;
                        font-size: 16px;
                        font-weight: 500;
                        letter-spacing: 6px;
                        text-transform: uppercase;
                        border-radius: 2px;
                    "
                >
                    Our Blog
                </span>

            </div>

        </div>
    </div>
</section>



<!-- =========================
        BLOG SECTION
    ========================== -->

<section class="blog-wrapper section-padding  ">

    <div class="container ">

        <div class="news-area">

            <div class="row justify-content-center">

                <div class="col-12 col-xl-10">

                    <div class="blog-posts">


                        @if($blogs->count())


                        @foreach($blogs as $blog)


                        <!-- =========================
                                        BLOG ITEM
                                    ========================== -->

                        <div
                            class="single-blog-post d-flex flex-column flex-md-row overflow-hidden mb-4 wow fadeInUp"
                            data-wow-delay=".2s"
                            style="
                                        border: 1px solid #e8e8e8;
                                        border-radius: 10px;
                                        background: #fff;
                                    ">


                            <!-- =========================
                                            BLOG IMAGE
                                        ========================== -->

                            <div
                                class="post-featured-thumb bg-cover flex-shrink-0"
                                style="
                                            width: 35%;
                                            min-height: 260px;
                                            background-image: url('{{ $blog->featured_image
                                                ? asset('storage/' . $blog->featured_image)
                                                : asset('assets/img/inner/news/post-01.jpg') }}');
                                        ">
                            </div>



                            <!-- =========================
                                            BLOG CONTENT
                                        ========================== -->

                            <div
                                class="post-content d-flex flex-column justify-content-center"
                                style="width: 65%; padding: 35px 40px;">


                                <!-- Meta -->

                                <div
                                    class="post-meta mb-2"
                                    style="gap: 18px;">

                                    @if($blog->category)

                                    <span>

                                        <i class="fal fa-folder"></i>

                                        {{ $blog->category }}

                                    </span>

                                    @endif


                                    <span>

                                        <i class="fal fa-calendar-alt"></i>

                                        {{ $blog->published_at
                                                    ? $blog->published_at->format('d M Y')
                                                    : $blog->created_at->format('d M Y') }}

                                    </span>


                                    <span>

                                        <i class="far fa-user"></i>

                                        {{ $blog->author ?? 'Atulya Hospital' }}

                                    </span>

                                </div>



                                <!-- Title -->

                                <h3
                                    class="mb-3"
                                    style="line-height: 1.3;">

                                    <a
                                        href="{{ route('blog.show', $blog->slug) }}">

                                        {{ $blog->title }}

                                    </a>

                                </h3>



                                <!-- Description -->

                                @if($blog->short_description)

                                <p
                                    class="mb-0"
                                    style="
                                                    display: -webkit-box;
                                                    -webkit-line-clamp: 3;
                                                    -webkit-box-orient: vertical;
                                                    overflow: hidden;
                                                ">

                                    {{ $blog->short_description }}

                                </p>

                                @endif



                                <!-- Read More -->

                                <div class="mt-4">

                                    <a
                                        href="{{ route('blog.show', $blog->slug) }}"
                                        class="theme-btn">

                                        <i class="far fa-chevron-right"></i>

                                        Read More

                                    </a>

                                </div>


                            </div>

                        </div>


                        @endforeach


                        @else


                        <!-- =========================
                                    NO BLOGS
                                ========================== -->

                        <div
                            class="single-blog-post text-center"
                            style="
                                    border: 1px solid #e8e8e8;
                                    border-radius: 10px;
                                    padding: 60px 30px;
                                ">

                            <div class="post-content">

                                <h3>
                                    No Blogs Available
                                </h3>

                                <p>
                                    Blog posts will appear here once they are published.
                                </p>

                            </div>

                        </div>


                        @endif


                    </div>



                    <!-- =========================
                            PAGINATION
                        ========================== -->

                    @if($blogs->hasPages())

                    <div class="page-nav-wrap text-center mt-5">

                        <ul>


                            <!-- Previous -->

                            @if($blogs->onFirstPage())

                            <li>

                                <span
                                    class="page-numbers disabled">

                                    <i class="far fa-long-arrow-left"></i>

                                </span>

                            </li>

                            @else

                            <li>

                                <a
                                    class="page-numbers"
                                    href="{{ $blogs->previousPageUrl() }}">

                                    <i class="far fa-long-arrow-left"></i>

                                </a>

                            </li>

                            @endif



                            <!-- Page Numbers -->

                            @foreach(
                            $blogs->getUrlRange(
                            1,
                            $blogs->lastPage()
                            )
                            as $page => $url
                            )

                            @if($page == $blogs->currentPage())

                            <li class="active">

                                <span class="page-numbers">

                                    {{ sprintf('%02d', $page) }}

                                </span>

                            </li>

                            @else

                            <li>

                                <a
                                    class="page-numbers"
                                    href="{{ $url }}">

                                    {{ sprintf('%02d', $page) }}

                                </a>

                            </li>

                            @endif

                            @endforeach



                            <!-- Next -->

                            @if($blogs->hasMorePages())

                            <li>

                                <a
                                    class="page-numbers"
                                    href="{{ $blogs->nextPageUrl() }}">

                                    <i class="far fa-long-arrow-right"></i>

                                </a>

                            </li>

                            @else

                            <li>

                                <span
                                    class="page-numbers disabled">

                                    <i class="far fa-long-arrow-right"></i>

                                </span>

                            </li>

                            @endif


                        </ul>

                    </div>

                    @endif


                </div>

            </div>

        </div>

    </div>

</section>



@endsection