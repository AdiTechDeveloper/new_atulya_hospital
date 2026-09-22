@extends('website.layout.app')

@section('title', 'Apply for ' . $job->title . ' | Atulya Super Speciality Hospital')

@section('meta_description', 'Apply for the ' . $job->title . ' position at Atulya Super Speciality Hospital & ICU.')

@section('content')

<section class=" fix">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-9">

                <div class="section-title text-center mb-5">
                    <h2>Apply for {{ $job->title }}</h2>

                    <p>
                        @if($job->department)
                            {{ $job->department }}
                        @endif

                        @if($job->location)
                            @if($job->department)
                                |
                            @endif
                            {{ $job->location }}
                        @endif
                    </p>
                </div>

                @if(session('success'))
                    <div class="alert alert-success mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">

                        <form
                            action="{{ route('careers.application.store', $job->slug) }}"
                            method="POST"
                            enctype="multipart/form-data"
                            id="careerApplicationForm"
                            novalidate
                        >

                            @csrf

                            <div class="row">

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">
                                        Full Name <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        name="name"
                                        id="appName"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}"
                                        maxlength="100"
                                        placeholder="Enter your full name"
                                    >

                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <div class="invalid-feedback" id="nameClientError"></div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">
                                        Email Address <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="email"
                                        name="email"
                                        id="appEmail"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}"
                                        maxlength="150"
                                        placeholder="Enter your email"
                                    >

                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <div class="invalid-feedback" id="emailClientError"></div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">
                                        Phone Number <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        name="phone"
                                        id="appPhone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}"
                                        maxlength="15"
                                        placeholder="Enter your phone number"
                                    >

                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <div class="invalid-feedback" id="phoneClientError"></div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label">
                                        Resume <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="file"
                                        name="resume"
                                        id="appResume"
                                        class="form-control @error('resume') is-invalid @enderror"
                                        accept=".pdf,.doc,.docx"
                                    >

                                    @error('resume')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <div class="invalid-feedback" id="resumeClientError"></div>

                                    <small class="text-muted">
                                        PDF, DOC or DOCX. Maximum 5 MB.
                                    </small>
                                </div>

                                <div class="col-12 mb-4">
                                    <label class="form-label">
                                        Message
                                    </label>

                                    <textarea
                                        name="message"
                                        id="appMessage"
                                        rows="6"
                                        maxlength="2000"
                                        class="form-control @error('message') is-invalid @enderror"
                                        placeholder="Write a message..."
                                    >{{ old('message') }}</textarea>

                                    @error('message')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button
                                        type="submit"
                                        class="theme-btn"
                                        id="applicationSubmitBtn"
                                    >
                                        <i class="far fa-chevron-right"></i>
                                        Submit Application
                                    </button>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('careerApplicationForm');

    if (!form) {
        return;
    }

    const nameInput = document.getElementById('appName');
    const emailInput = document.getElementById('appEmail');
    const phoneInput = document.getElementById('appPhone');
    const resumeInput = document.getElementById('appResume');

    const nameError = document.getElementById('nameClientError');
    const emailError = document.getElementById('emailClientError');
    const phoneError = document.getElementById('phoneClientError');
    const resumeError = document.getElementById('resumeClientError');

    form.addEventListener('submit', function (event) {

        let valid = true;

        if (!nameInput.value.trim()) {
            nameInput.classList.add('is-invalid');
            nameError.textContent = 'Please enter your full name.';
            valid = false;
        } else {
            nameInput.classList.remove('is-invalid');
            nameError.textContent = '';
        }

        const emailValue = emailInput.value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailValue) {
            emailInput.classList.add('is-invalid');
            emailError.textContent = 'Please enter your email address.';
            valid = false;
        } else if (!emailPattern.test(emailValue)) {
            emailInput.classList.add('is-invalid');
            emailError.textContent = 'Please enter a valid email address.';
            valid = false;
        } else {
            emailInput.classList.remove('is-invalid');
            emailError.textContent = '';
        }

        const phoneValue = phoneInput.value.trim();

        if (!phoneValue) {
            phoneInput.classList.add('is-invalid');
            phoneError.textContent = 'Please enter your phone number.';
            valid = false;
        } else if (!/^[0-9+\-\s]{10,15}$/.test(phoneValue)) {
            phoneInput.classList.add('is-invalid');
            phoneError.textContent = 'Please enter a valid phone number.';
            valid = false;
        } else {
            phoneInput.classList.remove('is-invalid');
            phoneError.textContent = '';
        }

        if (!resumeInput.files.length) {
            resumeInput.classList.add('is-invalid');
            resumeError.textContent = 'Please upload your resume.';
            valid = false;
        } else {

            const file = resumeInput.files[0];
            const fileName = file.name.toLowerCase();
            const allowedExtensions = ['.pdf', '.doc', '.docx'];
            const validExtension = allowedExtensions.some(function (extension) {
                return fileName.endsWith(extension);
            });

            if (!validExtension) {
                resumeInput.classList.add('is-invalid');
                resumeError.textContent = 'Resume must be PDF, DOC or DOCX.';
                valid = false;
            } else if (file.size > 5 * 1024 * 1024) {
                resumeInput.classList.add('is-invalid');
                resumeError.textContent = 'Resume must not exceed 5 MB.';
                valid = false;
            } else {
                resumeInput.classList.remove('is-invalid');
                resumeError.textContent = '';
            }
        }

        if (!valid) {
            event.preventDefault();

            const firstInvalid = form.querySelector('.is-invalid');

            if (firstInvalid) {
                firstInvalid.focus();
            }
        }
    });

});
</script>

@endpush

@endsection