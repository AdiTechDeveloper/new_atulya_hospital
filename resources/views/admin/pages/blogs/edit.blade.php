@extends('admin.layout.app')

@section('title', 'Edit Blog')

@section('content')
<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            {{-- Page Header --}}
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-1">Edit Blog</h4>
                    <p class="mb-0 text-secondary">
                        Update blog information and settings.
                    </p>
                </div>

                <a href="{{ route('admin.blogs.index') }}" class="btn btn-light">
                    <span class="material-icons-outlined align-middle me-1">
                        arrow_back
                    </span>
                    Back to Blogs
                </a>
            </div>

            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- Errors --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form
                action="{{ route('admin.blogs.update', $blog) }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                @method('PUT')

                {{-- Basic Information --}}
                <div class="card mb-4">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="mb-1">Basic Information</h5>
                            <p class="text-secondary mb-0">
                                Update the basic details of your blog.
                            </p>
                        </div>

                        <div class="row g-4">

                            {{-- Title --}}
                            <div class="col-12 col-xl-8">
                                <label class="form-label">
                                    Blog Title <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="title"
                                    id="title"
                                    class="form-control"
                                    value="{{ old('title', $blog->title) }}"
                                    placeholder="Enter blog title"
                                    required
                                >
                            </div>

                            {{-- Category --}}
                            <div class="col-12 col-xl-4">
                                <label class="form-label">
                                    Category
                                </label>

                                <input
                                    type="text"
                                    name="category"
                                    class="form-control"
                                    value="{{ old('category', $blog->category) }}"
                                    placeholder="e.g. Health Tips"
                                >
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
                                    class="form-control"
                                    value="{{ old('slug', $blog->slug) }}"
                                    placeholder="blog-url-slug"
                                >

                                <small class="text-secondary">
                                    Keep the existing slug or enter a new one.
                                </small>
                            </div>

                            {{-- Short Description --}}
                            <div class="col-12">
                                <label class="form-label">
                                    Short Description
                                </label>

                                <textarea
                                    name="short_description"
                                    class="form-control"
                                    rows="4"
                                    placeholder="Enter a short description..."
                                >{{ old('short_description', $blog->short_description) }}</textarea>
                            </div>

                        </div>

                    </div>
                </div>


                {{-- Blog Content --}}
                <div class="card mb-4">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="mb-1">Blog Content</h5>
                            <p class="text-secondary mb-0">
                                Update the complete content of your blog.
                            </p>
                        </div>

                        <div class="row g-4">

                            <div class="col-12">
                                <label class="form-label">
                                    Content
                                </label>

                                <textarea
                                    name="content"
                                    id="blogContent"
                                    class="form-control"
                                    rows="15"
                                    placeholder="Write your blog content here..."
                                >{{ old('content', $blog->content) }}</textarea>
                            </div>

                        </div>

                    </div>
                </div>


                {{-- Featured Image --}}
                <div class="card mb-4">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="mb-1">Featured Image</h5>
                            <p class="text-secondary mb-0">
                                Update the main image for this blog.
                            </p>
                        </div>

                        <div class="row g-4">

                            {{-- Upload --}}
                            <div class="col-12 col-xl-6">

                                <label class="form-label">
                                    Change Blog Image
                                </label>

                                <input
                                    type="file"
                                    name="featured_image"
                                    id="featuredImage"
                                    class="form-control"
                                    accept="image/jpeg,image/png,image/webp"
                                >

                                <small class="text-secondary">
                                    JPG, JPEG, PNG or WEBP. Maximum size 2MB.
                                </small>

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
                                    "
                                >

                                    @if($blog->featured_image)

                                        <img
                                            id="imagePreview"
                                            src="{{ asset('storage/' . $blog->featured_image) }}"
                                            alt="{{ $blog->title }}"
                                            style="
                                                width: 100%;
                                                max-height: 210px;
                                                object-fit: contain;
                                                border-radius: 6px;
                                            "
                                        >

                                        <div
                                            id="imagePlaceholder"
                                            class="text-center text-secondary"
                                            style="display: none;"
                                        >
                                            <span
                                                class="material-icons-outlined"
                                                style="font-size: 50px;"
                                            >
                                                image
                                            </span>

                                            <div class="mt-2">
                                                Image preview will appear here
                                            </div>
                                        </div>

                                    @else

                                        <div
                                            id="imagePlaceholder"
                                            class="text-center text-secondary"
                                        >
                                            <span
                                                class="material-icons-outlined"
                                                style="font-size: 50px;"
                                            >
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
                                            "
                                        >

                                    @endif

                                </div>

                            </div>

                        </div>

                    </div>
                </div>


                {{-- Publishing Information --}}
                <div class="card mb-4">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="mb-1">Publishing Information</h5>
                            <p class="text-secondary mb-0">
                                Manage author, publishing date and display order.
                            </p>
                        </div>

                        <div class="row g-4">

                            {{-- Author --}}
                            <div class="col-12 col-xl-4">
                                <label class="form-label">
                                    Author
                                </label>

                                <input
                                    type="text"
                                    name="author"
                                    class="form-control"
                                    value="{{ old('author', $blog->author) }}"
                                    placeholder="Enter author name"
                                >
                            </div>

                            {{-- Published At --}}
                            <div class="col-12 col-xl-4">
                                <label class="form-label">
                                    Published At
                                </label>

                                <input
                                    type="datetime-local"
                                    name="published_at"
                                    class="form-control"
                                    value="{{ old(
                                        'published_at',
                                        $blog->published_at
                                            ? $blog->published_at->format('Y-m-d\TH:i')
                                            : ''
                                    ) }}"
                                >
                            </div>

                            {{-- Sort Order --}}
                            <div class="col-12 col-xl-4">
                                <label class="form-label">
                                    Sort Order
                                </label>

                                <input
                                    type="number"
                                    name="sort_order"
                                    class="form-control"
                                    value="{{ old('sort_order', $blog->sort_order) }}"
                                    min="1"
                                >

                                <small class="text-secondary">
                                    Changing this will automatically reorder the blogs.
                                </small>
                            </div>

                        </div>

                    </div>
                </div>


                {{-- Blog Settings --}}
                <div class="card mb-4">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="mb-1">Blog Settings</h5>
                            <p class="text-secondary mb-0">
                                Control the visibility and featured status.
                            </p>
                        </div>

                        <div class="row g-4">

                            {{-- Featured --}}
                            <div class="col-12 col-md-6">

                                <div class="form-check form-switch">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        role="switch"
                                        name="is_featured"
                                        value="1"
                                        id="isFeatured"
                                        {{ old('is_featured', $blog->is_featured) ? 'checked' : '' }}
                                    >

                                    <label
                                        class="form-check-label"
                                        for="isFeatured"
                                    >
                                        Featured Blog
                                    </label>

                                </div>

                                <small class="text-secondary">
                                    Only one blog can be featured at a time.
                                </small>

                            </div>


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
                                        {{ old('is_active', $blog->is_active) ? 'checked' : '' }}
                                    >

                                    <label
                                        class="form-check-label"
                                        for="isActive"
                                    >
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
                                class="btn btn-light"
                            >
                                Cancel
                            </a>

                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                <span class="material-icons-outlined align-middle me-1">
                                    save
                                </span>

                                Update Blog
                            </button>

                        </div>

                    </div>
                </div>

            </form>

        </div>
    </div>
</main>
@endsection


@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    const imageInput = document.getElementById('featuredImage');
    const imagePreview = document.getElementById('imagePreview');
    const imagePlaceholder = document.getElementById('imagePlaceholder');

    if (imageInput && imagePreview && imagePlaceholder) {

        imageInput.addEventListener('change', function () {

            const file = this.files[0];

            if (!file) {
                return;
            }

            if (!file.type.startsWith('image/')) {

                this.value = '';

                alert('Please select a valid image file.');

                return;
            }

            const reader = new FileReader();

            reader.onload = function (event) {

                imagePreview.src = event.target.result;

                imagePreview.style.display = 'block';

                imagePlaceholder.style.display = 'none';
            };

            reader.readAsDataURL(file);
        });
    }

});
</script>
@endpush