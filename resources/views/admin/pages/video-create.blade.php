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


    {{-- Validation Errors --}}
    @if($errors->any())

        <div class="row">
            <div class="col-12">

                <div class="alert alert-danger alert-dismissible fade show"
                     role="alert">

                    <strong>Please fix the following errors:</strong>

                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Close">
                    </button>

                </div>

            </div>
        </div>

    @endif


    {{-- Create Video --}}
    <div class="row">

        <div class="col-12">

            <form action="{{ route('admin.videos.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

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

                                <label for="videoTitle"
                                       class="form-label">

                                    Video Title
                                    <span class="text-danger">*</span>

                                </label>

                                <input type="text"
                                       name="title"
                                       id="videoTitle"
                                       class="form-control @error('title') is-invalid @enderror"
                                       value="{{ old('title') }}"
                                       placeholder="Enter video title"
                                       required>

                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>


                            {{-- Slug --}}
                            <div class="col-12 col-xl-6">

                                <label for="videoSlug"
                                       class="form-label">

                                    Slug

                                </label>

                                <input type="text"
                                       name="slug"
                                       id="videoSlug"
                                       class="form-control @error('slug') is-invalid @enderror"
                                       value="{{ old('slug') }}"
                                       placeholder="video-slug">

                                @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="form-text">
                                    Leave blank to generate automatically from title.
                                </div>

                            </div>


                            {{-- Category --}}
                            <div class="col-12 col-xl-6">

                                <label for="videoCategory"
                                       class="form-label">

                                    Category

                                </label>

                                <input type="text"
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

                                <label for="videoLanguage"
                                       class="form-label">

                                    Language

                                </label>

                                <select name="language"
                                        id="videoLanguage"
                                        class="form-select @error('language') is-invalid @enderror">

                                    <option value="">
                                        Select Language
                                    </option>

                                    <option value="Hindi"
                                        {{ old('language') == 'Hindi' ? 'selected' : '' }}>
                                        Hindi
                                    </option>

                                    <option value="Gujarati"
                                        {{ old('language') == 'Gujarati' ? 'selected' : '' }}>
                                        Gujarati
                                    </option>

                                    <option value="English"
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

                                <label for="videoDescription"
                                       class="form-label">

                                    Description

                                </label>

                                <textarea name="description"
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
                                Add the YouTube video URL and thumbnail.
                            </p>

                        </div>


                        <div class="row g-4">

                            {{-- YouTube URL --}}
                            <div class="col-12 col-xl-8">

                                <label for="youtubeUrl"
                                       class="form-label">

                                    YouTube Video URL
                                    <span class="text-danger">*</span>

                                </label>

                                <input type="url"
                                       name="youtube_url"
                                       id="youtubeUrl"
                                       class="form-control @error('youtube_url') is-invalid @enderror"
                                       value="{{ old('youtube_url') }}"
                                       placeholder="https://www.youtube.com/watch?v=example"
                                       required>

                                @error('youtube_url')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="form-text">
                                    Paste the complete YouTube video URL.
                                </div>

                            </div>


                            {{-- Duration --}}
                            <div class="col-12 col-xl-4">

                                <label for="videoDuration"
                                       class="form-label">

                                    Duration

                                </label>

                                <input type="text"
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


                            {{-- Thumbnail --}}
                            <div class="col-12">

                                <label for="videoThumbnail"
                                       class="form-label">

                                    Thumbnail

                                </label>

                                <input type="file"
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

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Publishing Settings --}}
                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                Publishing Settings
                            </h5>

                            <p class="text-secondary mb-0">
                                Control the visibility, featured status and ordering of this video.
                            </p>

                        </div>


                        <div class="row g-4">

                            {{-- Featured --}}
                            <div class="col-12 col-md-6 col-xl-4">

                                <div class="form-check form-switch">

                                    <input class="form-check-input"
                                           type="checkbox"
                                           name="is_featured"
                                           value="1"
                                           id="isFeatured"
                                           {{ old('is_featured') ? 'checked' : '' }}>

                                    <label class="form-check-label"
                                           for="isFeatured">

                                        Featured Video

                                    </label>

                                </div>

                            </div>


                            {{-- Active --}}
                            <div class="col-12 col-md-6 col-xl-4">

                                <div class="form-check form-switch">

                                    <input class="form-check-input"
                                           type="checkbox"
                                           name="is_active"
                                           value="1"
                                           id="isActive"
                                           {{ old('is_active', true) ? 'checked' : '' }}>

                                    <label class="form-check-label"
                                           for="isActive">

                                        Active

                                    </label>

                                </div>

                            </div>


                            {{-- Sort Order --}}
                            <div class="col-12 col-xl-4">

                                <label for="sortOrder"
                                       class="form-label">

                                    Sort Order

                                </label>

                                <input type="number"
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


                            {{-- Published At --}}
                            <div class="col-12 col-md-6">

                                <label for="publishedAt"
                                       class="form-label">

                                    Published At

                                </label>

                                <input type="datetime-local"
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

                    <a href="{{ route('admin.videos.index') }}"
                       class="btn btn-light px-4">

                        Cancel

                    </a>

                    <button type="submit"
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

@endsection