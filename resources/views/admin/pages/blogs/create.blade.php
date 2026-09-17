@extends('admin.layout.app')

@section('title', 'Add New Blog')

@section('content')

<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            {{-- Page Header --}}
            <div class="d-flex align-items-center justify-content-between mb-4">

                <div>

                    <h4 class="mb-1">
                        Add New Blog
                    </h4>

                    <p class="mb-0 text-secondary">
                        Create a new blog post for your website.
                    </p>

                </div>

                <a
                    href="{{ route('admin.blogs.index') }}"
                    class="btn btn-light">

                    <span class="material-icons-outlined align-middle me-1">
                        arrow_back
                    </span>

                    Back to Blogs

                </a>

            </div>


            {{-- Form --}}
            <form
                action="{{ route('admin.blogs.store') }}"
                method="POST"
                enctype="multipart/form-data"
                id="blogForm">

                @csrf


                {{-- Basic Information --}}
                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                Basic Information
                            </h5>

                            <p class="text-secondary mb-0">
                                Enter the basic details of your blog.
                            </p>

                        </div>


                        <div class="row g-4">

                            {{-- Title --}}
                            <div class="col-12 col-xl-8">

                                <label class="form-label">
                                    Blog Title
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="title"
                                    id="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') }}"
                                    placeholder="Enter blog title">

                                <div
                                    id="titleClientError"
                                    class="invalid-feedback"></div>

                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            {{-- Category --}}
                            <div class="col-12 col-xl-4">

                                <label class="form-label">
                                    Category
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="category"
                                    id="category"
                                    class="form-control @error('category') is-invalid @enderror"
                                    value="{{ old('category') }}"
                                    placeholder="e.g. Health Tips">

                                <div
                                    id="categoryClientError"
                                    class="invalid-feedback"></div>

                                @error('category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            {{-- Slug --}}
                            <div class="col-12">

                                <label class="form-label">
                                    Slug
                                </label>

                                <input
                                    type="text"
                                    name="slug"
                                    id="slug"
                                    class="form-control @error('slug') is-invalid @enderror"
                                    value="{{ old('slug') }}"
                                    placeholder="blog-url-slug">

                                <small class="text-secondary">
                                    Leave empty to generate automatically from the title.
                                </small>

                                @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            {{-- Short Description --}}
                            <div class="col-12">

                                <label class="form-label">
                                    Short Description
                                    <span class="text-danger">*</span>
                                </label>

                                <textarea
                                    name="short_description"
                                    id="shortDescription"
                                    class="form-control @error('short_description') is-invalid @enderror"
                                    rows="4"
                                    placeholder="Enter a short description for the blog...">{{ old('short_description') }}</textarea>

                                <div
                                    id="shortDescriptionClientError"
                                    class="invalid-feedback"></div>

                                @error('short_description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Blog Content --}}
                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                Blog Content
                            </h5>

                            <p class="text-secondary mb-0">
                                Write the complete content of your blog.
                            </p>

                        </div>


                        <div class="row g-4">

                            <div class="col-12">

                                <label class="form-label">
                                    Content
                                    <span class="text-danger">*</span>
                                </label>

                                <textarea
                                    name="content"
                                    id="blogContent"
                                    class="form-control @error('content') is-invalid @enderror"
                                    rows="15"
                                    placeholder="Write your blog content here...">{{ old('content') }}</textarea>

                                <div
                                    id="contentClientError"
                                    class="invalid-feedback"></div>

                                @error('content')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Featured Image --}}
                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                Featured Image
                            </h5>

                            <p class="text-secondary mb-0">
                                Upload the main image for this blog.
                            </p>

                        </div>


                        <div class="row g-4">

                            {{-- Upload --}}
                            <div class="col-12 col-xl-6">

                                <label class="form-label">
                                    Blog Image
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="file"
                                    name="featured_image"
                                    id="featuredImage"
                                    class="form-control @error('featured_image') is-invalid @enderror"
                                    accept="image/jpeg,image/png,image/webp">

                                <small class="text-secondary">
                                    JPG, JPEG, PNG or WEBP. Maximum size 2MB.
                                </small>

                                <div
                                    id="imageClientError"
                                    class="invalid-feedback"></div>

                                @error('featured_image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            {{-- Preview --}}
                            <div class="col-12 col-xl-6">

                                <label class="form-label">
                                    Image Preview
                                </label>

                                <div
                                    id="imagePreviewBox"
                                    class="border rounded p-2 d-flex align-items-center justify-content-center"
                                    style="
                                        min-height: 220px;
                                        background: #f8f9fa;
                                        overflow: hidden;
                                    ">

                                    <div
                                        id="imagePlaceholder"
                                        class="text-center text-secondary">

                                        <span
                                            class="material-icons-outlined"
                                            style="font-size: 50px;">
                                            image
                                        </span>

                                        <div class="mt-2">
                                            Image preview will appear here
                                        </div>

                                    </div>


                                    <img
                                        id="imagePreview"
                                        src=""
                                        alt="Image Preview"
                                        style="
                                            display: none;
                                            width: 100%;
                                            max-height: 210px;
                                            object-fit: contain;
                                            border-radius: 6px;
                                        ">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Publishing Information --}}
                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                Publishing Information
                            </h5>

                            <p class="text-secondary mb-0">
                                Configure author, publishing date and display order.
                            </p>

                        </div>


                        <div class="row g-4">

                            {{-- Author --}}
                            <div class="col-12 col-xl-4">

                                <label class="form-label">
                                    Author
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="author"
                                    id="author"
                                    class="form-control @error('author') is-invalid @enderror"
                                    value="{{ old('author') }}"
                                    placeholder="Enter author name">

                                <div
                                    id="authorClientError"
                                    class="invalid-feedback"></div>

                                @error('author')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            {{-- Published At --}}
                            <div class="col-12 col-xl-4">

                                <label class="form-label">
                                    Published At
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="datetime-local"
                                    name="published_at"
                                    id="publishedAt"
                                    class="form-control @error('published_at') is-invalid @enderror"
                                    value="{{ old('published_at') }}">

                                <div
                                    id="publishedAtClientError"
                                    class="invalid-feedback"></div>

                                @error('published_at')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            {{-- Sort Order --}}
                            <div class="col-12 col-xl-4">

                                <label class="form-label">
                                    Sort Order
                                </label>

                                <input
                                    type="number"
                                    name="sort_order"
                                    class="form-control @error('sort_order') is-invalid @enderror"
                                    value="{{ old('sort_order') }}"
                                    min="1"
                                    placeholder="Auto">

                                <small class="text-secondary">
                                    Leave empty to add at the end.
                                </small>

                                @error('sort_order')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Blog Settings --}}
                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                Blog Settings
                            </h5>

                            <p class="text-secondary mb-0">
                                Control how this blog appears on the website.
                            </p>

                        </div>


                        <div class="row g-4">

                            {{-- Featured --}}
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
                                    Featured Blog
                                </label>

                            </div>

                            @error('is_featured')
                            <div class="text-danger mt-2">
                                <i class="material-icons-outlined" style="font-size:16px; vertical-align:middle;">
                                    error_outline
                                </i>

                                {{ $message }}
                            </div>
                            @enderror


                            {{-- Active --}}
                            <div class="col-12 col-md-6">

                                <div class="form-check form-switch">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        role="switch"
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

                                <small class="text-secondary">
                                    Active blogs will be visible on the website.
                                </small>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Actions --}}
                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="d-flex align-items-center justify-content-end gap-2">

                            <a
                                href="{{ route('admin.blogs.index') }}"
                                class="btn btn-light">
                                Cancel
                            </a>

                            <button
                                type="submit"
                                class="btn btn-primary">

                                <span class="material-icons-outlined align-middle me-1">
                                    save
                                </span>

                                Save Blog

                            </button>

                        </div>

                    </div>

                </div>


            </form>

        </div>
    </div>
</main>


@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const form =
            document.getElementById('blogForm');

        const titleInput =
            document.getElementById('title');

        const slugInput =
            document.getElementById('slug');

        const categoryInput =
            document.getElementById('category');

        const shortDescription =
            document.getElementById('shortDescription');

        const contentInput =
            document.getElementById('blogContent');

        const imageInput =
            document.getElementById('featuredImage');

        const authorInput =
            document.getElementById('author');

        const publishedAtInput =
            document.getElementById('publishedAt');


        /*
        |--------------------------------------------------------------------------
        | Slug Generator
        |--------------------------------------------------------------------------
        */

        if (titleInput && slugInput) {

            let slugManuallyChanged =
                slugInput.value.trim() !== '';


            slugInput.addEventListener(
                'input',
                function() {

                    slugManuallyChanged =
                        this.value.trim() !== '';

                }
            );


            titleInput.addEventListener(
                'input',
                function() {

                    if (slugManuallyChanged) {
                        return;
                    }


                    slugInput.value =
                        this.value
                        .toLowerCase()
                        .trim()
                        .replace(
                            /[^a-z0-9\s-]/g,
                            ''
                        )
                        .replace(
                            /\s+/g,
                            '-'
                        )
                        .replace(
                            /-+/g,
                            '-'
                        );

                }
            );

        }


        /*
        |--------------------------------------------------------------------------
        | Validation Helpers
        |--------------------------------------------------------------------------
        */

        function showError(
            input,
            errorId,
            message
        ) {

            input.classList.add(
                'is-invalid'
            );

            const error =
                document.getElementById(errorId);

            if (error) {
                error.textContent =
                    message;
            }

        }


        function clearError(
            input,
            errorId
        ) {

            input.classList.remove(
                'is-invalid'
            );

            const error =
                document.getElementById(errorId);

            if (error) {
                error.textContent = '';
            }

        }


        function validateRequired(
            input,
            errorId,
            message
        ) {

            if (!input.value.trim()) {

                showError(
                    input,
                    errorId,
                    message
                );

                return false;
            }

            clearError(
                input,
                errorId
            );

            return true;
        }


        /*
        |--------------------------------------------------------------------------
        | Clear Errors While Typing
        |--------------------------------------------------------------------------
        */

        if (titleInput) {

            titleInput.addEventListener(
                'input',
                function() {

                    clearError(
                        titleInput,
                        'titleClientError'
                    );

                }
            );

        }


        if (categoryInput) {

            categoryInput.addEventListener(
                'input',
                function() {

                    clearError(
                        categoryInput,
                        'categoryClientError'
                    );

                }
            );

        }


        if (shortDescription) {

            shortDescription.addEventListener(
                'input',
                function() {

                    clearError(
                        shortDescription,
                        'shortDescriptionClientError'
                    );

                }
            );

        }


        if (contentInput) {

            contentInput.addEventListener(
                'input',
                function() {

                    clearError(
                        contentInput,
                        'contentClientError'
                    );

                }
            );

        }


        if (authorInput) {

            authorInput.addEventListener(
                'input',
                function() {

                    clearError(
                        authorInput,
                        'authorClientError'
                    );

                }
            );

        }


        if (publishedAtInput) {

            publishedAtInput.addEventListener(
                'input',
                function() {

                    clearError(
                        publishedAtInput,
                        'publishedAtClientError'
                    );

                }
            );

        }


        /*
        |--------------------------------------------------------------------------
        | Image Preview + Validation
        |--------------------------------------------------------------------------
        */

        const imagePreview =
            document.getElementById(
                'imagePreview'
            );

        const imagePlaceholder =
            document.getElementById(
                'imagePlaceholder'
            );


        if (
            imageInput &&
            imagePreview &&
            imagePlaceholder
        ) {

            imageInput.addEventListener(
                'change',
                function() {

                    clearError(
                        imageInput,
                        'imageClientError'
                    );


                    const file =
                        this.files[0];


                    if (!file) {

                        imagePreview.src = '';

                        imagePreview.style.display =
                            'none';

                        imagePlaceholder.style.display =
                            'block';

                        return;
                    }


                    const allowedTypes = [
                        'image/jpeg',
                        'image/png',
                        'image/webp'
                    ];


                    if (
                        !allowedTypes.includes(
                            file.type
                        )
                    ) {

                        showError(
                            imageInput,
                            'imageClientError',
                            'Please select a JPG, JPEG, PNG or WEBP image.'
                        );

                        this.value = '';

                        imagePreview.src = '';

                        imagePreview.style.display =
                            'none';

                        imagePlaceholder.style.display =
                            'block';

                        return;
                    }


                    if (
                        file.size >
                        2 * 1024 * 1024
                    ) {

                        showError(
                            imageInput,
                            'imageClientError',
                            'Image size must not exceed 2MB.'
                        );

                        this.value = '';

                        imagePreview.src = '';

                        imagePreview.style.display =
                            'none';

                        imagePlaceholder.style.display =
                            'block';

                        return;
                    }


                    const reader =
                        new FileReader();


                    reader.onload =
                        function(event) {

                            imagePreview.src =
                                event.target.result;

                            imagePreview.style.display =
                                'block';

                            imagePlaceholder.style.display =
                                'none';

                        };


                    reader.readAsDataURL(file);

                }
            );

        }


        /*
        |--------------------------------------------------------------------------
        | Submit Validation
        |--------------------------------------------------------------------------
        */

        if (form) {

            form.addEventListener(
                'submit',
                function(event) {

                    let valid = true;


                    if (!validateRequired(
                            titleInput,
                            'titleClientError',
                            'Please enter the blog title.'
                        )) {

                        valid = false;

                    }


                    if (!validateRequired(
                            categoryInput,
                            'categoryClientError',
                            'Please enter the blog category.'
                        )) {

                        valid = false;

                    }


                    if (!validateRequired(
                            shortDescription,
                            'shortDescriptionClientError',
                            'Please enter the short description.'
                        )) {

                        valid = false;

                    }


                    if (!validateRequired(
                            contentInput,
                            'contentClientError',
                            'Please enter the blog content.'
                        )) {

                        valid = false;

                    }


                    if (!imageInput.files.length) {

                        showError(
                            imageInput,
                            'imageClientError',
                            'Please select the featured image.'
                        );

                        valid = false;

                    }


                    if (!validateRequired(
                            authorInput,
                            'authorClientError',
                            'Please enter the author name.'
                        )) {

                        valid = false;

                    }


                    if (!validateRequired(
                            publishedAtInput,
                            'publishedAtClientError',
                            'Please select the published date and time.'
                        )) {

                        valid = false;

                    }


                    /*
                    |--------------------------------------------------------------------------
                    | Stop Submit
                    |--------------------------------------------------------------------------
                    */

                    if (!valid) {

                        event.preventDefault();

                        const firstInvalid =
                            form.querySelector(
                                '.is-invalid'
                            );


                        if (firstInvalid) {

                            firstInvalid.focus();

                            firstInvalid.scrollIntoView({
                                behavior: 'smooth',
                                block: 'center'
                            });

                        }

                    }

                }
            );

        }

    });
</script>

@endpush

@endsection