@extends('admin.layout.app')
@section('title', 'Home')
@section('content')

<body>

    <!-- Add Video Section Start -->

    <div class="container-fluid my-5">

        <div class="row">

            <div class="col-12 col-md-10 col-lg-8 col-xl-7 mx-auto">

                <div class="card rounded-4">

                    <div class="card-body p-5">

                        <!-- Heading -->

                        <div class="mb-4">

                            <h4 class="fw-bold mb-1">
                                Add New Video
                            </h4>

                            <p class="mb-0 text-secondary">
                                Embed YouTube promotional or tutorial videos.
                            </p>

                        </div>


                        <!-- Form -->

                        <div class="form-body">

                            <form
                                class="row g-4"
                                action="{{ url('/admin/videos') }}"
                                method="POST"
                            >

                                @csrf


                                <!-- Video Title -->

                                <div class="col-12">

                                    <label
                                        for="videoTitle"
                                        class="form-label"
                                    >
                                        Video Title <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        name="title"
                                        class="form-control"
                                        id="videoTitle"
                                        value="{{ old('title') }}"
                                        placeholder="e.g. VitaVox Wellness Club Overview"
                                        required
                                    >

                                    @error('title')
                                        <div class="text-danger small mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>


                                <!-- YouTube URL -->

                                <div class="col-12">

                                    <label
                                        for="youtubeUrl"
                                        class="form-label"
                                    >
                                        YouTube Video URL
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="url"
                                        name="youtube_url"
                                        class="form-control"
                                        id="youtubeUrl"
                                        value="{{ old('youtube_url') }}"
                                        placeholder="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
                                        required
                                    >

                                    @error('youtube_url')
                                        <div class="text-danger small mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <div class="form-text">
                                        Paste the normal YouTube video URL here.
                                    </div>

                                </div>


                                <!-- Description -->

                                <div class="col-12">

                                    <label
                                        for="description"
                                        class="form-label"
                                    >
                                        Description
                                        <span class="text-secondary">
                                            (Optional)
                                        </span>
                                    </label>

                                    <textarea
                                        name="description"
                                        class="form-control"
                                        id="description"
                                        rows="5"
                                        placeholder="Briefly describe what this video is about..."
                                    >{{ old('description') }}</textarea>

                                    @error('description')
                                        <div class="text-danger small mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>


                                <!-- Active Status -->

                                <div class="col-12">

                                    <div class="form-check">

                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="is_active"
                                            value="1"
                                            id="isActive"
                                            checked
                                        >

                                        <label
                                            class="form-check-label"
                                            for="isActive"
                                        >
                                            Publish as Active Immediately
                                        </label>

                                    </div>

                                </div>


                                <!-- Buttons -->

                                <div class="col-12">

                                    <div class="d-flex gap-2">

                                        <button
                                            type="submit"
                                            class="btn btn-primary px-4"
                                        >
                                            <i class="bi bi-check-lg me-1"></i>
                                            Save Video
                                        </button>


                                        <a
                                            href="{{ url('/admin/videos') }}"
                                            class="btn btn-light px-4"
                                        >
                                            Cancel
                                        </a>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Add Video Section End -->

</body>

@endsection