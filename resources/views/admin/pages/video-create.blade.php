@extends('admin.layout.app')

@section('title', 'Add New Video')

@section('content')
<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            {{-- Page Header --}}
            <div class="row">
                <div class="col-12">

                    <div class="d-flex align-items-center justify-content-between mb-4">

                        <div>
                            <h4 class="mb-1">Add New Video</h4>

                            <p class="mb-0 text-secondary">
                                Add a new video to your website.
                            </p>
                        </div>

                        <div>
                            <a href="{{ route('admin.videos.index') }}"
                                class="btn btn-light">

                                <i class="material-icons-outlined align-middle me-1">
                                    arrow_back
                                </i>

                                Back to Videos
                            </a>
                        </div>

                    </div>

                </div>
            </div>


            {{-- Create Video --}}
            <div class="row">

                <div class="col-12">

                    <form action="{{ route('admin.videos.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                        id="videoCreateForm">

                        @csrf


                        {{-- Basic Information --}}
                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Basic Information
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Enter the basic information for this video.
                                    </p>

                                </div>


                                <div class="row g-4">

                                    {{-- Title --}}
                                    <div class="col-12 col-xl-6">

                                        <label
                                            for="videoTitle"
                                            class="form-label">

                                            Video Title
                                            <span class="text-danger">*</span>

                                        </label>

                                        <input
                                            type="text"
                                            name="title"
                                            id="videoTitle"
                                            class="form-control @error('title') is-invalid @enderror"
                                            value="{{ old('title') }}"
                                            placeholder="Enter video title"
                                            autocomplete="off">

                                        <div
                                            id="titleClientError"
                                            class="invalid-feedback">
                                        </div>

                                        @error('title')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                        @enderror

                                    </div>


                                    {{-- Slug --}}
                                    <div class="col-12 col-xl-6">

                                        <label
                                            for="videoSlug"
                                            class="form-label">

                                            Slug

                                        </label>

                                        <input
                                            type="text"
                                            name="slug"
                                            id="videoSlug"
                                            class="form-control @error('slug') is-invalid @enderror"
                                            value="{{ old('slug') }}"
                                            placeholder="video-slug"
                                            autocomplete="off">

                                        @error('slug')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                        @enderror

                                        <div class="form-text">
                                            Automatically generated from the title.
                                        </div>

                                    </div>


                                    {{-- Category --}}
                                    <div class="col-12 col-xl-6">

                                        <label
                                            for="videoCategory"
                                            class="form-label">

                                            Category

                                        </label>

                                        <input
                                            type="text"
                                            name="category"
                                            id="videoCategory"
                                            class="form-control @error('category') is-invalid @enderror"
                                            value="{{ old('category') }}"
                                            placeholder="Health, Awareness, Events...">

                                        @error('category')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                        @enderror

                                    </div>


                                    {{-- Language --}}
                                    <div class="col-12 col-xl-6">

                                        <label
                                            for="videoLanguage"
                                            class="form-label">

                                            Language

                                        </label>

                                        <select
                                            name="language"
                                            id="videoLanguage"
                                            class="form-select @error('language') is-invalid @enderror">

                                            <option value="">
                                                Select Language
                                            </option>

                                            <option
                                                value="Hindi"
                                                {{ old('language') == 'Hindi' ? 'selected' : '' }}>
                                                Hindi
                                            </option>

                                            <option
                                                value="Gujarati"
                                                {{ old('language') == 'Gujarati' ? 'selected' : '' }}>
                                                Gujarati
                                            </option>

                                            <option
                                                value="English"
                                                {{ old('language') == 'English' ? 'selected' : '' }}>
                                                English
                                            </option>

                                        </select>

                                        @error('language')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                        @enderror

                                    </div>


                                    {{-- Description --}}
                                    <div class="col-12">

                                        <label
                                            for="videoDescription"
                                            class="form-label">

                                            Description

                                        </label>

                                        <textarea
                                            name="description"
                                            id="videoDescription"
                                            rows="5"
                                            class="form-control @error('description') is-invalid @enderror"
                                            placeholder="Enter a short description about this video...">{{ old('description') }}</textarea>

                                        @error('description')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                        @enderror

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- Video Information --}}
                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Video Information
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Add the video URL and thumbnail.
                                    </p>

                                </div>


                                <div class="row g-4">


                                    <div class="col-12 col-xl-8">

                                        <label
                                            for="youtubeUrl"
                                            class="form-label">

                                            YouTube Video URL
                                            <span class="text-danger">*</span>

                                        </label>

                                        <input
                                            type="url"
                                            name="youtube_url"
                                            id="youtubeUrl"
                                            class="form-control @error('youtube_url') is-invalid @enderror"
                                            value="{{ old('youtube_url') }}"
                                            placeholder="https://www.youtube.com/watch?v=example">

                                        @error('youtube_url')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                        @enderror

                                        <div
                                            id="youtubeClientError"
                                            class="text-danger small mt-1">
                                        </div>

                                        <div class="form-text">
                                            Paste the complete YouTube video URL.
                                        </div>

                                    </div>


                                    <div class="col-12 col-xl-4">

                                        <label
                                            for="videoDuration"
                                            class="form-label">

                                            Duration

                                        </label>

                                        <input
                                            type="text"
                                            name="duration"
                                            id="videoDuration"
                                            class="form-control @error('duration') is-invalid @enderror"
                                            value="{{ old('duration') }}"
                                            placeholder="e.g. 12:30">

                                        @error('duration')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                        @enderror

                                    </div>


                                    <div class="col-12">

                                        <label
                                            for="videoThumbnail"
                                            class="form-label">

                                            Thumbnail

                                        </label>

                                        <input
                                            type="file"
                                            name="thumbnail"
                                            id="videoThumbnail"
                                            class="form-control @error('thumbnail') is-invalid @enderror"
                                            accept=".jpg,.jpeg,.png,.webp">

                                        @error('thumbnail')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                        @enderror

                                        <div class="form-text">
                                            JPG, JPEG, PNG or WEBP. Maximum 2MB.
                                        </div>


                                        <div
                                            id="thumbnailPreviewBox"
                                            class="mt-3"
                                            style="display:none;">

                                            <div class="border rounded p-3">

                                                <div class="mb-2">
                                                    <strong>
                                                        Thumbnail Preview
                                                    </strong>
                                                </div>

                                                <img
                                                    id="thumbnailPreview"
                                                    src=""
                                                    alt="Thumbnail Preview"
                                                    style="
                                                width:100%;
                                                max-width:500px;
                                                height:280px;
                                                object-fit:cover;
                                                border-radius:8px;
                                                display:block;
                                            ">

                                            </div>

                                        </div>

                                    </div>


                                </div>

                            </div>

                        </div>


                        {{-- Publishing Settings --}}
                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Settings
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Control the visibility and ordering of this video.
                                    </p>

                                </div>


                                <div class="row g-4">


                                    <div class="col-12 col-md-6 col-xl-4">

                                        <div class="form-check form-switch">

                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                name="is_featured"
                                                value="1"
                                                id="isFeatured"
                                                {{ old('is_featured') ? 'checked' : '' }}>

                                            <label
                                                class="form-check-label"
                                                for="isFeatured">

                                                Featured Video

                                            </label>

                                        </div>

                                    </div>


                                    <div class="col-12 col-md-6 col-xl-4">

                                        <div class="form-check form-switch">

                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                name="is_active"
                                                value="1"
                                                id="isActive"
                                                {{ old('is_active', true) ? 'checked' : '' }}>

                                            <label
                                                class="form-check-label"
                                                for="isActive">

                                                Active

                                            </label>

                                        </div>

                                    </div>


                                    <div class="col-12 col-xl-4">

                                        <label
                                            for="sortOrder"
                                            class="form-label">

                                            Sort Order

                                        </label>

                                        <input
                                            type="number"
                                            name="sort_order"
                                            id="sortOrder"
                                            class="form-control @error('sort_order') is-invalid @enderror"
                                            value="{{ old('sort_order', 0) }}"
                                            min="0">

                                        @error('sort_order')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                        @enderror

                                    </div>


                                    <div class="col-12 col-md-6">

                                        <label
                                            for="publishedAt"
                                            class="form-label">

                                            Published At

                                        </label>

                                        <input
                                            type="datetime-local"
                                            name="published_at"
                                            id="publishedAt"
                                            class="form-control @error('published_at') is-invalid @enderror"
                                            value="{{ old('published_at') }}">

                                        @error('published_at')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                        @enderror

                                    </div>


                                </div>

                            </div>

                        </div>


                        {{-- Actions --}}
                        <div class="d-flex justify-content-end gap-2 mb-4">

                            <a
                                href="{{ route('admin.videos.index') }}"
                                class="btn btn-light px-4">

                                Cancel

                            </a>


                            <button
                                type="submit"
                                class="btn btn-primary px-4">

                                <i class="material-icons-outlined align-middle me-1">
                                    save
                                </i>

                                Save Video

                            </button>

                        </div>


                    </form>

                </div>

            </div>

        </div>
    </div>
</main>
@if($errors->any())
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">
        <div id="videoValidationToast" class="toast align-items-center border-0 shadow-lg text-bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <strong>Please fix the following errors:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new bootstrap.Toast(document.getElementById('videoValidationToast'), { delay: 5000 }).show();
        });
    </script>
@endif
@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const form =
            document.getElementById('videoCreateForm');

        const titleInput =
            document.getElementById('videoTitle');

        const slugInput =
            document.getElementById('videoSlug');

        const titleClientError =
            document.getElementById('titleClientError');


        function makeSlug(value) {

            return value
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');

        }


        titleInput.addEventListener('input', function() {

            slugInput.value =
                makeSlug(this.value);

            titleInput.classList.remove('is-invalid');

            titleClientError.textContent = '';

        });


        const thumbnailInput =
            document.getElementById('videoThumbnail');

        const previewBox =
            document.getElementById('thumbnailPreviewBox');

        const preview =
            document.getElementById('thumbnailPreview');


        thumbnailInput.addEventListener('change', function() {

            const file = this.files[0];


            if (!file) {

                previewBox.style.display = 'none';
                preview.src = '';

                return;

            }


            const allowedTypes = [
                'image/jpeg',
                'image/png',
                'image/webp'
            ];


            if (!allowedTypes.includes(file.type)) {

                alert(
                    'Please upload a JPG, JPEG, PNG or WEBP image.'
                );

                this.value = '';

                previewBox.style.display = 'none';
                preview.src = '';

                return;

            }


            if (file.size > 2 * 1024 * 1024) {

                alert(
                    'Thumbnail size must not exceed 2MB.'
                );

                this.value = '';

                previewBox.style.display = 'none';
                preview.src = '';

                return;

            }


            const reader =
                new FileReader();


            reader.onload = function(event) {

                preview.src =
                    event.target.result;

                previewBox.style.display =
                    'block';

            };


            reader.readAsDataURL(file);

        });


        const youtubeInput =
            document.getElementById('youtubeUrl');

        const youtubeError =
            document.getElementById('youtubeClientError');


        function validateYoutube() {

            const value =
                youtubeInput.value.trim();


            youtubeError.textContent = '';

            youtubeInput.classList.remove(
                'is-invalid'
            );


            if (!value) {

                youtubeError.textContent =
                    'Please enter the YouTube video URL.';

                youtubeInput.classList.add(
                    'is-invalid'
                );

                return false;

            }


            try {

                const url =
                    new URL(value);


                const validHosts = [
                    'youtube.com',
                    'www.youtube.com',
                    'm.youtube.com',
                    'youtu.be',
                    'www.youtu.be'
                ];


                if (
                    !validHosts.includes(
                        url.hostname.toLowerCase()
                    )
                ) {

                    youtubeError.textContent =
                        'Please enter a valid YouTube video URL.';

                    youtubeInput.classList.add(
                        'is-invalid'
                    );

                    return false;

                }


                return true;

            } catch (error) {

                youtubeError.textContent =
                    'Please enter a valid YouTube video URL.';

                youtubeInput.classList.add(
                    'is-invalid'
                );

                return false;

            }

        }


        youtubeInput.addEventListener(
            'input',
            function() {

                youtubeError.textContent = '';

                youtubeInput.classList.remove(
                    'is-invalid'
                );

            }
        );


        form.addEventListener(
            'submit',
            function(event) {

                let valid = true;


                if (!titleInput.value.trim()) {

                    titleInput.classList.add(
                        'is-invalid'
                    );

                    titleClientError.textContent =
                        'Please enter the video title.';

                    valid = false;

                }


                if (!validateYoutube()) {
                    valid = false;
                }


                if (!valid) {

                    event.preventDefault();

                    if (!titleInput.value.trim()) {
                        titleInput.focus();
                    } else {
                        youtubeInput.focus();
                    }

                }

            }
        );

    });
</script>

@endpush

@endsection