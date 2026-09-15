 @extends('website.layout.app')
@section('title', 'Home')
@section('content')


<!-- Error Section Start -->
        <section class="error-section section-padding fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="error-items">
                            <div class="error-image wow fadeInUp" data-wow-delay=".3s">
                                <img src="{{ asset('assets/img/inner/404-img.png') }}" alt="img">
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay=".5s">
                               OPPS! This Page is Not Found
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".3s">
                               Find strength in numbers. Making progress as an athlete requires accurate data and insights. The Workout app provides metrics and views that give you all the information you need to be and beat your best.
                            </p>
                            <a href="index.html" class="theme-btn">
                                <i class="far fa-chevron-right"></i>
                              Got To Homepage
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cta Newsletter Section Start -->
        <section class="cta-newsletter-section section-bg-2 fix">
            <div class="container">
                <div class="cta-newsletter-wrapper style-2 text-center">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-xl-10">
                            <div class="section-title  mb-0">
                                <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">OUR NEWSLETTER</span>
                                <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                    Join Our Newsletter to Never Miss Information
                                </h2>
                            </div>
                            <div class="form-content">
                            <form action="#">
                                <input type="text" placeholder="Enter your e-mail">
                                <button class="arrow-icon" type="submit">
                                    <i class="far fa-arrow-right"></i>
                                </button>
                            </form>
                            <p>By subscribing, you’re accept <a href="contact.html">Privacy Policy</a></p>
                        </div>
                    </div>
                    </div>
                    <div class="cta-img">
                        <img src="{{ asset('assets/img/home-2/cta-img.png') }}" alt="img">
                    </div>
                    <div class="left-shape">
                        <img src="{{ asset('assets/img/home-2/left-shape.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </section>
        @endsection