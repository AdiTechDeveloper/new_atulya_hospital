
@extends('admin.layout.app')

@section('title', 'Edit Gallery Item')

@section('content')

<main class="main-wrapper">
    <div class="main-content">

        <div class="container-fluid my-4">

            {{-- Header --}}
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2>Edit Gallery Item</h2>
                    <p class="text-muted mb-0">
                        Modify category, image, or description details.
                    </p>
                </div>

                <a href="{{ route('admin.gallery.index') }}"
                    class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i>
                    Back to List
                </a>
            </div>


            {{-- Form Card --}}
            <div class="card shadow-sm border-0">
                <div class="card-body">

                    <form action="{{ route('admin.gallery.update', $gallery->id) }}"
                        method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="row">

                            {{-- CATEGORY NAME --}}
                            <div class="col-md-6 mb-3">

                                <label for="category_name"
                                    class="form-label fw-bold">
                                    Category Name
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text"
                                    class="form-control @error('category_name') is-invalid @enderror"
                                    id="category_name"
                                    name="category_name"
                                    value="{{ old('category_name', $gallery->category_name) }}"
                                    list="categoryOptions"
                                    required>

                                <datalist id="categoryOptions">
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat }}">
                                    @endforeach
                                </datalist>

                                @error('category_name')
                                    <div class="text-danger validation-error">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <small class="text-muted">
                                    Type a new category or select an existing one.
                                </small>

                            </div>


                            {{-- TITLE --}}
                            <div class="col-md-6 mb-3">

                                <label for="title"
                                    class="form-label fw-bold">
                                    Title / Caption
                                </label>

                                <input type="text"
                                    class="form-control @error('title') is-invalid @enderror"
                                    id="title"
                                    name="title"
                                    value="{{ old('title', $gallery->title) }}"
                                    placeholder="Optional description">

                                @error('title')
                                    <div class="text-danger validation-error">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>


                            {{-- SORT ORDER --}}
                            <div class="col-md-6 mb-3">

                                <label for="sort_order"
                                    class="form-label fw-bold">
                                    Sort Order
                                </label>

                                <input type="number"
                                    class="form-control @error('sort_order') is-invalid @enderror"
                                    id="sort_order"
                                    name="sort_order"
                                    value="{{ old('sort_order', $gallery->sort_order) }}">

                                @error('sort_order')
                                    <div class="text-danger validation-error">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>


                            {{-- IMAGE --}}
                            <div class="col-md-6 mb-3">

                                <label for="file"
                                    class="form-label fw-bold">
                                    Replace Image File
                                </label>


                                {{-- CURRENT IMAGE --}}
                                @if ($gallery->file_path)

                                    <div class="mb-3">

                                        <div class="fw-bold mb-2">
                                            Current Image:
                                        </div>

                                        <div>
                                            <img src="{{ asset('storage/' . $gallery->file_path) }}"
                                                alt="{{ $gallery->title ?? 'Gallery Image' }}"
                                                class="rounded border"
                                                style="
                                                    width: 250px;
                                                    height: 160px;
                                                    object-fit: cover;
                                                ">
                                        </div>

                                        <div class="small text-muted mt-1">
                                            Existing stored image
                                        </div>

                                    </div>

                                @endif


                                {{-- FILE INPUT --}}
                                <input type="file"
                                    class="form-control @error('file') is-invalid @enderror"
                                    id="file"
                                    name="file"
                                    accept="image/jpeg,image/png,image/jpg,image/webp">


                                {{-- FILE ERROR --}}
                                @error('file')
                                    <div id="fileError"
                                        class="text-danger validation-error">
                                        {{ $message }}
                                    </div>
                                @else
                                    <div id="fileError"
                                        class="text-danger validation-error"
                                        style="display:none;">
                                    </div>
                                @enderror


                                {{-- SELECTED FILE NAME --}}
                                <div id="fileName"
                                    class="mt-2"
                                    style="display:none;">

                                    <i class="bi bi-file-earmark-image"></i>
                                    Selected file:
                                    <strong id="selectedFileName"></strong>

                                </div>


                                <small class="text-muted d-block mt-1">
                                    Leave blank to keep the existing image.
                                    Accepted: jpeg, png, jpg, webp.
                                    Max: 5MB.
                                </small>


                                {{-- NEW IMAGE PREVIEW --}}
                                <div id="newImagePreviewWrapper"
                                    class="mt-3"
                                    style="display:none;">

                                    <div class="fw-bold mb-2">
                                        New Image Preview:
                                    </div>

                                    <div>
                                        <img id="newImagePreview"
                                            src=""
                                            alt="New Image Preview"
                                            class="rounded border"
                                            style="
                                                width: 250px;
                                                height: 160px;
                                                object-fit: cover;
                                            ">
                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- BUTTONS --}}
                        <div class="mt-4">

                            <button type="submit"
                                class="btn btn-primary px-4">

                                <i class="bi bi-check-circle"></i>
                                Update Gallery Item

                            </button>

                            <a href="{{ route('admin.gallery.index') }}"
                                class="btn btn-outline-secondary">

                                Cancel

                            </a>

                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>
</main>


{{-- ================= JAVASCRIPT ================= --}}
<script>
document.addEventListener('DOMContentLoaded', function () {

    const fileInput = document.getElementById('file');
    const fileName = document.getElementById('fileName');
    const selectedFileName = document.getElementById('selectedFileName');

    const fileError = document.getElementById('fileError');

    const newImagePreviewWrapper =
        document.getElementById('newImagePreviewWrapper');

    const newImagePreview =
        document.getElementById('newImagePreview');


    /*
    |--------------------------------------------------------------------------
    | Remove Laravel Validation Error While Typing
    |--------------------------------------------------------------------------
    */

    const inputs = document.querySelectorAll(
        'input:not([type="file"]), textarea, select'
    );

    inputs.forEach(function (input) {

        input.addEventListener('input', function () {

            input.classList.remove('is-invalid');

            const parent = input.closest('.mb-3');

            if (parent) {

                const error =
                    parent.querySelector('.validation-error');

                if (error) {
                    error.style.display = 'none';
                }

            }

        });


        input.addEventListener('change', function () {

            input.classList.remove('is-invalid');

            const parent = input.closest('.mb-3');

            if (parent) {

                const error =
                    parent.querySelector('.validation-error');

                if (error) {
                    error.style.display = 'none';
                }

            }

        });

    });


    /*
    |--------------------------------------------------------------------------
    | File Selection
    |--------------------------------------------------------------------------
    */

    fileInput.addEventListener('change', function () {

        const file = this.files[0];


        /*
        |--------------------------------------------------------------------------
        | No File Selected
        |--------------------------------------------------------------------------
        */

        if (!file) {

            fileName.style.display = 'none';

            selectedFileName.textContent = '';

            newImagePreviewWrapper.style.display = 'none';

            newImagePreview.src = '';

            return;
        }


        /*
        |--------------------------------------------------------------------------
        | Remove Previous Error
        |--------------------------------------------------------------------------
        */

        fileInput.classList.remove('is-invalid');

        if (fileError) {
            fileError.style.display = 'none';
        }


        /*
        |--------------------------------------------------------------------------
        | Show File Name
        |--------------------------------------------------------------------------
        */

        selectedFileName.textContent = file.name;

        fileName.style.display = 'block';


        /*
        |--------------------------------------------------------------------------
        | Check Image
        |--------------------------------------------------------------------------
        */

        if (!file.type.startsWith('image/')) {

            newImagePreviewWrapper.style.display = 'none';

            newImagePreview.src = '';

            return;
        }


        /*
        |--------------------------------------------------------------------------
        | Show Image Preview
        |--------------------------------------------------------------------------
        */

        const reader = new FileReader();

        reader.onload = function (event) {

            newImagePreview.src = event.target.result;

            newImagePreviewWrapper.style.display = 'block';

        };

        reader.readAsDataURL(file);

    });

});
</script>

@endsection
