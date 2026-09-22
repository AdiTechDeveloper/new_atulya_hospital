@extends('website.layout.app')

@section('title', 'Careers | Atulya Super Speciality Hospital & ICU | Ahmedabad')

@section('meta_description', 'Explore career opportunities at Atulya Super Speciality Hospital & ICU in Ahmedabad and apply for available positions.')

@section('content')

<section class="hiring-section section-padding fix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">

                <div class="faq-hire-items">
                    <div class="faq-accordion">

                        <div class="accordion" id="accordion">

                            @if($jobs->count())

                                @foreach($jobs as $job)

                                    <div class="accordion-item mb-3 wow fadeInUp"
                                        data-wow-delay="{{ $loop->first ? '.4s' : '.6s' }}">

                                        <h5 class="accordion-header">
                                            <button
                                                class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#job{{ $job->id }}"
                                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                                aria-controls="job{{ $job->id }}"
                                            >
                                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}. {{ $job->title }}
                                            </button>
                                        </h5>

                                        <div
                                            id="job{{ $job->id }}"
                                            class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                            data-bs-parent="#accordion"
                                        >
                                            <div class="accordion-body">

                                                <div class="content">
                                                    <span>Job description:</span>
                                                    <p>
                                                        {{ $job->description }}
                                                    </p>
                                                </div>

                                                @if($job->requirements)
                                                    <div class="content">
                                                        <span>Requirements:</span>
                                                        <p>
                                                            {!! nl2br(e($job->requirements)) !!}
                                                        </p>
                                                    </div>
                                                @endif

                                                @if($job->department)
                                                    <div class="content">
                                                        <span>Department:</span>
                                                        <p>
                                                            {{ $job->department }}
                                                        </p>
                                                    </div>
                                                @endif

                                                @if($job->experience)
                                                    <div class="content">
                                                        <span>Experience:</span>
                                                        <p>
                                                            {{ $job->experience }}
                                                        </p>
                                                    </div>
                                                @endif

                                                @if($job->employment_type)
                                                    <div class="content">
                                                        <span>Employment Type:</span>
                                                        <p>
                                                            {{ $job->employment_type }}
                                                        </p>
                                                    </div>
                                                @endif

                                                @if($job->location)
                                                    <div class="content">
                                                        <span>Location:</span>
                                                        <p>
                                                            {{ $job->location }}
                                                        </p>
                                                    </div>
                                                @endif

                                                <div class="content style-2">

                                                    @if($job->salary)
                                                        <span>Salary:</span>
                                                        <p>
                                                            {{ $job->salary }}
                                                        </p>
                                                    @endif

                                                    <a
                                                        href="{{ route('careers.apply', $job->slug) }}"
                                                        class="theme-btn"
                                                    >
                                                        <i class="far fa-chevron-right"></i>
                                                        Apply Job
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                            @else

                                <div class="text-center py-4">
                                    <h4>No Current Openings</h4>
                                    <p>Please check back later for new opportunities.</p>
                                </div>

                            @endif

                        </div>

                    </div>

                    <p class="text-center">
                        We are always on the lookout for talented folk to join our team.
                        <span>Follow us on LinkedIn!</span>
                    </p>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection