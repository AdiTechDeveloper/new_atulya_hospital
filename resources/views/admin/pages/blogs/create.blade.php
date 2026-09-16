@extends('admin.layout.app')

@section('title', 'Add New Blog')

@section('content')
<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            {{-- Page Header --}}
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-1">Add New Blog</h4>
                    <p class="mb-0 text-secondary">
                        Create a new blog post for your website.
                    </p>
                </div>

                <a href="{{ route('admin.blogs.index') }}" class="btn btn-light">
                    <span class="material-icons-outlined align-middle me-1">
                        arrow_back
                    </span>
                    Back to Blogs
                </a>
            </div>

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
                action="{{ route('admin.blogs.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf

                {{-- Basic Information --}}
                <div class="card mb-4">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="mb-1">Basic Information</h5>
                            <p class="text-secondary mb-0">
                                Enter the basic details of your blog.
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
                                    value="{{ old('title') }}"
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
                                    value="{{ old('category') }}"
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
                                    value="{{ old('slug') }}"
                                    placeholder="blog-url-slug"
                                >

                                <small class="text-secondary">
                                    Leave empty to generate automatically from the title.
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
                                    placeholder="Enter a short description for the blog..."
                                >{{ old('short_description') }}</textarea>
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
                                Write the complete content of your blog.
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
                                >{{ old('content') }}</textarea>
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
                                Upload the main image for this blog.
                            </p>
                        </div>

                        <div class="row g-4">

                            <div class="col-12 col-xl-6">

                                <label class="form-label">
                                    Blog Image
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
                                Configure author, publishing date and display order.
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
                                    value="{{ old('author') }}"
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
                                    value="{{ old('published_at') }}"
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
                                    value="{{ old('sort_order') }}"
                                    min="1"
                                    placeholder="Auto"
                                >

                                <small class="text-secondary">
                                    Leave empty to add at the end.
                                </small>
                            </div>

                        </div>

                    </div>
                </div>

                {{-- Settings --}}
                <div class="card mb-4">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="mb-1">Blog Settings</h5>
                            <p class="text-secondary mb-0">
                                Control how this blog appears on the website.
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
                                        {{ old('is_featured') ? 'checked' : '' }}
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
                                        {{ old('is_active', true) ? 'checked' : '' }}
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

                                Save Blog
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

    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');

    if (titleInput && slugInput) {

        let slugManuallyChanged = false;

        slugInput.addEventListener('input', function () {
            slugManuallyChanged = this.value.trim() !== '';
        });

        titleInput.addEventListener('input', function () {

            if (slugManuallyChanged) {
                return;
            }

            let slug = this.value
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');

            slugInput.value = slug;
        });
    }


    const imageInput = document.getElementById('featuredImage');
    const imagePreview = document.getElementById('imagePreview');
    const imagePlaceholder = document.getElementById('imagePlaceholder');

    if (imageInput && imagePreview && imagePlaceholder) {

        imageInput.addEventListener('change', function () {

            const file = this.files[0];

            if (!file) {
                imagePreview.src = '';
                imagePreview.style.display = 'none';
                imagePlaceholder.style.display = 'block';
                return;
            }

            if (!file.type.startsWith('image/')) {
                this.value = '';
                imagePreview.src = '';
                imagePreview.style.display = 'none';
                imagePlaceholder.style.display = 'block';

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