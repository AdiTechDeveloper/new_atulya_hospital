<section class="atulya-page-banner">

    <img
        src="{{ asset('assets/img/home-1/counter/video-img.png') }}"
        alt="{{ $title }}"
        class="atulya-page-banner-image"
    >

    <div class="atulya-page-banner-shade"></div>

    <div class="atulya-page-banner-content">

        <div class="container">

            <div class="atulya-banner-box">

                <div class="atulya-banner-line"></div>

                <h1>
                    {{ $title }}
                </h1>

                <div class="atulya-breadcrumb">

                    <a href="{{ url('/') }}">
                        HOME
                    </a>

                    <span>/</span>

                    <span>
                        {{ strtoupper($title) }}
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>