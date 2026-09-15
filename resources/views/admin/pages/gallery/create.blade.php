@extends('admin.layout.app')

@section('title', 'Add Gallery Item')

@section('content')


<main class="main-wrapper">
    <div class="main-content">

        <div class="container-fluid my-4">

            {{-- Header --}}
            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>
                    <h2>Add New Gallery Item</h2>

                    <p class="text-muted mb-0">
                        Upload a hospital photo or add a video link under any category.
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

                    <form action="{{ route('admin.gallery.store') }}"
                        method="POST"
                        enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- CATEGORY --}}
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
                                    value="{{ old('category_name') }}"
                                    list="categoryOptions"
                                    placeholder="e.g. Infrastructure, ICU, Operation Theatre"
                                    >

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
                                    Type a new category or pick from existing ones.
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
                                    value="{{ old('title') }}"
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
                                    value="{{ old('sort_order', 0) }}">


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

                                    Upload Image File
                                    <span class="text-danger">*</span>

                                </label>


                                <input type="file"
                                    class="form-control @error('file') is-invalid @enderror"
                                    id="file"
                                    name="file"
                                    accept="image/jpeg,image/png,image/jpg,image/webp">


                                {{-- IMAGE ERROR --}}
                                @error('file')

                                    <div id="fileError"
                                        class="text-danger validation-error">

                                        {{ $message }}

                                    </div>

                                @enderror


                                {{-- FILE NAME --}}
                                <div id="fileName"
                                    class="text-muted mt-2"
                                    style="display:none;">

                                </div>


                                <small class="text-muted d-block mt-1">

                                    Accepted formats:
                                    jpeg, png, jpg, webp
                                    (Max: 5MB)

                                </small>

                            </div>


                            {{-- IMAGE PREVIEW --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label fw-bold">
                                    Image Preview
                                </label>


                                <div id="imagePreviewContainer"
                                    class="border rounded p-2 text-center"
                                    style="display:none;">

                                    <img id="imagePreview"
                                        src=""
                                        alt="Image Preview"
                                        style="
                                            max-width: 100%;
                                            max-height: 250px;
                                            object-fit: contain;
                                            border-radius: 6px;
                                        ">

                                </div>


                                <div id="previewPlaceholder"
                                    class="border rounded p-4 text-center text-muted">

                                    <i class="bi bi-image"
                                        style="font-size:40px;">
                                    </i>

                                    <p class="mb-0 mt-2">
                                        Image preview will appear here
                                    </p>

                                </div>

                            </div>

                        </div>


                        {{-- BUTTONS --}}
                        <div class="mt-4">

                            <button type="submit"
                                class="btn btn-primary px-4">

                                Save Gallery Item

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


{{-- ONLY UI JAVASCRIPT --}}
<script>

    document.addEventListener('DOMContentLoaded', function () {

        /*
        |--------------------------------------------------------------------------
        | Remove validation error while typing
        |--------------------------------------------------------------------------
        */

        document.querySelectorAll(
            'input[type="text"], input[type="number"]'
        ).forEach(function (input) {

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

        });


        /*
        |--------------------------------------------------------------------------
        | IMAGE PREVIEW
        |--------------------------------------------------------------------------
        */

        const fileInput =
            document.getElementById('file');

        const fileName =
            document.getElementById('fileName');

        const imagePreview =
            document.getElementById('imagePreview');

        const imagePreviewContainer =
            document.getElementById('imagePreviewContainer');

        const previewPlaceholder =
            document.getElementById('previewPlaceholder');


        fileInput.addEventListener('change', function () {

            const file = this.files[0];


            if (!file) {

                fileName.style.display = 'none';

                imagePreviewContainer.style.display = 'none';

                previewPlaceholder.style.display = 'block';

                return;

            }


            /*
            | Remove file validation error
            */

            fileInput.classList.remove('is-invalid');

            const fileError =
                document.getElementById('fileError');

            if (fileError) {
                fileError.style.display = 'none';
            }


            /*
            | Show filename
            */

            fileName.innerHTML =
                '<i class="bi bi-file-earmark-image"></i> ' +
                'Selected file: <strong>' +
                file.name +
                '</strong>';

            fileName.style.display = 'block';


            /*
            | Preview
            */

            if (file.type.startsWith('image/')) {

                const reader = new FileReader();

                reader.onload = function (e) {

                    imagePreview.src =
                        e.target.result;

                    imagePreviewContainer.style.display =
                        'block';

                    previewPlaceholder.style.display =
                        'none';

                };

                reader.readAsDataURL(file);

            }

        });

    });

</script>


@endsection
