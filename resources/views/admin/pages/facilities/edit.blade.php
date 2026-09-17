@extends('admin.layout.app')

@section('title', 'Edit Facility')

@section('content')

<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            {{-- Page Header --}}
            <div class="row">
                <div class="col-12">

                    <div class="d-flex align-items-center justify-content-between mb-4">

                        <div>

                            <h4 class="mb-1">
                                Edit Facility
                            </h4>

                            <p class="mb-0 text-secondary">
                                Update facility information.
                            </p>

                        </div>

                        <div>

                            <a href="{{ route('admin.facilities.index') }}"
                               class="btn btn-light">

                                <i class="material-icons-outlined align-middle me-1">
                                    arrow_back
                                </i>

                                Back to Facilities

                            </a>

                        </div>

                    </div>

                </div>
            </div>


            {{-- Form --}}
            <div class="row">

                <div class="col-12">

                    <form
                        action="{{ route('admin.facilities.update', $facility) }}"
                        method="POST"
                        enctype="multipart/form-data"
                        id="facilityForm"
                    >

                        @csrf

                        @method('PUT')


                        {{-- Basic Information --}}
                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Basic Information
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Update the basic information for this facility.
                                    </p>

                                </div>


                                <div class="row g-4">

                                    {{-- Title --}}
                                    <div class="col-12 col-xl-6">

                                        <label class="form-label">
                                            Facility Title
                                            <span class="text-danger">*</span>
                                        </label>

                                        <input
                                            type="text"
                                            name="title"
                                            id="facilityTitle"
                                            class="form-control @error('title') is-invalid @enderror"
                                            value="{{ old('title', $facility->title) }}"
                                            placeholder="Enter facility title"
                                        >

                                        <div id="titleClientError" class="invalid-feedback"></div>

                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    {{-- Slug --}}
                                    <div class="col-12 col-xl-6">

                                        <label class="form-label">
                                            Slug
                                        </label>

                                        <input
                                            type="text"
                                            name="slug"
                                            id="facilitySlug"
                                            class="form-control @error('slug') is-invalid @enderror"
                                            value="{{ old('slug', $facility->slug) }}"
                                            placeholder="facility-slug"
                                        >

                                        <div class="form-text">
                                            Automatically generated from the title.
                                        </div>

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
                                            placeholder="Enter a short description about this facility..."
                                        >{{ old('short_description', $facility->short_description) }}</textarea>

                                        <div id="shortDescriptionClientError" class="invalid-feedback"></div>

                                        @error('short_description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- Images --}}
                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Facility Images
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Update facility images if required.
                                    </p>

                                </div>


                                <div class="row g-4">

                                    {{-- Main Image --}}
                                    <div class="col-12 col-xl-6">

                                        <label class="form-label">
                                            Main Image
                                        </label>

                                        @if($facility->main_image)

                                            <div class="mb-3">

                                                <img
                                                    id="mainImagePreview"
                                                    src="{{ asset('storage/' . $facility->main_image) }}"
                                                    alt="{{ $facility->title }}"
                                                    class="rounded"
                                                    style="width:200px;height:130px;object-fit:cover;"
                                                >

                                            </div>

                                        @endif

                                        <input
                                            type="file"
                                            name="main_image"
                                            id="mainImage"
                                            class="form-control @error('main_image') is-invalid @enderror"
                                            accept=".jpg,.jpeg,.png,.webp"
                                        >

                                        <div class="form-text">
                                            Leave empty to keep the current image. JPG, JPEG, PNG or WEBP. Maximum 2MB.
                                        </div>

                                        <div id="mainImageClientError" class="invalid-feedback"></div>

                                        @error('main_image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    {{-- Secondary Image --}}
                                    <div class="col-12 col-xl-6">

                                        <label class="form-label">
                                            Secondary Image
                                        </label>

                                        @if($facility->secondary_image)

                                            <div class="mb-3">

                                                <img
                                                    id="secondaryImagePreview"
                                                    src="{{ asset('storage/' . $facility->secondary_image) }}"
                                                    alt="{{ $facility->title }}"
                                                    class="rounded"
                                                    style="width:200px;height:130px;object-fit:cover;"
                                                >

                                            </div>

                                        @endif

                                        <input
                                            type="file"
                                            name="secondary_image"
                                            id="secondaryImage"
                                            class="form-control @error('secondary_image') is-invalid @enderror"
                                            accept=".jpg,.jpeg,.png,.webp"
                                        >

                                        <div class="form-text">
                                            Leave empty to keep the current image. JPG, JPEG, PNG or WEBP. Maximum 2MB.
                                        </div>

                                        <div id="secondaryImageClientError" class="invalid-feedback"></div>

                                        @error('secondary_image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- Main Content --}}
                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Main Content
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Update the main facility content.
                                    </p>

                                </div>


                                <div class="row g-4">

                                    {{-- Section Heading --}}
                                    <div class="col-12">

                                        <label class="form-label">
                                            Section Heading
                                            <span class="text-danger">*</span>
                                        </label>

                                        <input
                                            type="text"
                                            name="section_heading"
                                            id="sectionHeading"
                                            class="form-control @error('section_heading') is-invalid @enderror"
                                            value="{{ old('section_heading', $facility->section_heading) }}"
                                            placeholder="Enter section heading"
                                        >

                                        <div id="sectionHeadingClientError" class="invalid-feedback"></div>

                                        @error('section_heading')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    {{-- Section Description --}}
                                    <div class="col-12">

                                        <label class="form-label">
                                            Section Description
                                            <span class="text-danger">*</span>
                                        </label>

                                        <textarea
                                            name="section_description"
                                            id="sectionDescription"
                                            class="form-control @error('section_description') is-invalid @enderror"
                                            rows="6"
                                            placeholder="Enter section description..."
                                        >{{ old('section_description', $facility->section_description) }}</textarea>

                                        <div id="sectionDescriptionClientError" class="invalid-feedback"></div>

                                        @error('section_description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- Features --}}
                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="d-flex align-items-center justify-content-between mb-4">

                                    <div>

                                        <h5 class="mb-1">
                                            Features
                                        </h5>

                                        <p class="text-secondary mb-0">
                                            Update facility features or highlights.
                                        </p>

                                    </div>

                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                        id="addFeature"
                                    >

                                        <i class="material-icons-outlined align-middle me-1">
                                            add
                                        </i>

                                        Add Feature

                                    </button>

                                </div>


                                <div id="featuresContainer">

                                    @php
                                        $features = old(
                                            'features',
                                            $facility->features ?? []
                                        );
                                    @endphp


                                    @forelse($features as $feature)

                                        <div class="input-group mb-3 feature-row">

                                            <input
                                                type="text"
                                                name="features[]"
                                                class="form-control @error('features.' . $loop->index) is-invalid @enderror"
                                                value="{{ $feature }}"
                                                placeholder="Enter feature"
                                            >

                                            <button
                                                type="button"
                                                class="btn btn-outline-danger removeFeature"
                                            >

                                                <i class="material-icons-outlined">
                                                    delete
                                                </i>

                                            </button>

                                            @error('features.' . $loop->index)
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>

                                    @empty

                                        <div class="input-group mb-3 feature-row">

                                            <input
                                                type="text"
                                                name="features[]"
                                                class="form-control"
                                                placeholder="Enter feature"
                                            >

                                            <button
                                                type="button"
                                                class="btn btn-outline-danger removeFeature"
                                            >

                                                <i class="material-icons-outlined">
                                                    delete
                                                </i>

                                            </button>

                                        </div>

                                    @endforelse

                                </div>

                                @error('features')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                        </div>


                        {{-- Bottom Content --}}
                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Bottom Content
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Update the bottom content of the facility page.
                                    </p>

                                </div>


                                <div class="row g-4">

                                    {{-- Bottom Heading --}}
                                    <div class="col-12">

                                        <label class="form-label">
                                            Bottom Heading
                                            <span class="text-danger">*</span>
                                        </label>

                                        <input
                                            type="text"
                                            name="bottom_heading"
                                            id="bottomHeading"
                                            class="form-control @error('bottom_heading') is-invalid @enderror"
                                            value="{{ old('bottom_heading', $facility->bottom_heading) }}"
                                            placeholder="Enter bottom heading"
                                        >

                                        <div id="bottomHeadingClientError" class="invalid-feedback"></div>

                                        @error('bottom_heading')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    {{-- Bottom Description --}}
                                    <div class="col-12">

                                        <label class="form-label">
                                            Bottom Description
                                            <span class="text-danger">*</span>
                                        </label>

                                        <textarea
                                            name="bottom_description"
                                            id="bottomDescription"
                                            class="form-control @error('bottom_description') is-invalid @enderror"
                                            rows="6"
                                            placeholder="Enter bottom description..."
                                        >{{ old('bottom_description', $facility->bottom_description) }}</textarea>

                                        <div id="bottomDescriptionClientError" class="invalid-feedback"></div>

                                        @error('bottom_description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- Settings --}}
                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Settings
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Control facility visibility and ordering.
                                    </p>

                                </div>


                                <div class="row g-4">

                                    {{-- Sort Order --}}
                                    <div class="col-12 col-md-6">

                                        <label class="form-label">
                                            Sort Order
                                        </label>

                                        <input
                                            type="number"
                                            name="sort_order"
                                            class="form-control @error('sort_order') is-invalid @enderror"
                                            value="{{ old('sort_order', $facility->sort_order) }}"
                                            min="1"
                                            placeholder="Enter sort order"
                                        >

                                        @error('sort_order')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    {{-- Active --}}
                                    <div class="col-12 col-md-6">

                                        <div class="form-check form-switch mt-4">

                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                name="is_active"
                                                value="1"
                                                id="isActive"
                                                {{ old('is_active', $facility->is_active) ? 'checked' : '' }}
                                            >

                                            <label
                                                class="form-check-label"
                                                for="isActive"
                                            >
                                                Active Facility
                                            </label>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- Actions --}}
                        <div class="d-flex justify-content-end gap-2 mb-4">

                            <a
                                href="{{ route('admin.facilities.index') }}"
                                class="btn btn-light px-4"
                            >
                                Cancel
                            </a>

                            <button
                                type="submit"
                                class="btn btn-primary px-4"
                            >

                                <i class="material-icons-outlined align-middle me-1">
                                    save
                                </i>

                                Update Facility

                            </button>

                        </div>


                    </form>

                </div>

            </div>

        </div>
    </div>
</main>


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('facilityForm');

    const titleInput = document.getElementById('facilityTitle');
    const slugInput = document.getElementById('facilitySlug');

    const shortDescription =
        document.getElementById('shortDescription');

    const sectionHeading =
        document.getElementById('sectionHeading');

    const sectionDescription =
        document.getElementById('sectionDescription');

    const bottomHeading =
        document.getElementById('bottomHeading');

    const bottomDescription =
        document.getElementById('bottomDescription');

    const mainImage =
        document.getElementById('mainImage');

    const secondaryImage =
        document.getElementById('secondaryImage');


    /*
    |--------------------------------------------------------------------------
    | Slug Generator
    |--------------------------------------------------------------------------
    */

    if (titleInput && slugInput) {

        titleInput.addEventListener('input', function () {

            slugInput.value = this.value
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');

        });

    }


    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    */

    const container =
        document.getElementById('featuresContainer');

    const addButton =
        document.getElementById('addFeature');


    if (container && addButton) {

        addButton.addEventListener('click', function () {

            const row =
                document.createElement('div');

            row.className =
                'input-group mb-3 feature-row';

            row.innerHTML = `
                <input
                    type="text"
                    name="features[]"
                    class="form-control"
                    placeholder="Enter feature"
                >

                <button
                    type="button"
                    class="btn btn-outline-danger removeFeature"
                >
                    <i class="material-icons-outlined">
                        delete
                    </i>
                </button>
            `;

            container.appendChild(row);

        });


        container.addEventListener('click', function (event) {

            const button =
                event.target.closest('.removeFeature');

            if (!button) {
                return;
            }

            const rows =
                container.querySelectorAll('.feature-row');

            if (rows.length > 1) {

                button.closest('.feature-row').remove();

            } else {

                button.closest('.feature-row')
                    .querySelector('input')
                    .value = '';

            }

        });

    }


    /*
    |--------------------------------------------------------------------------
    | Validation Helpers
    |--------------------------------------------------------------------------
    */

    function showError(input, errorId, message) {

        input.classList.add('is-invalid');

        const error =
            document.getElementById(errorId);

        if (error) {
            error.textContent = message;
        }

    }


    function clearError(input, errorId) {

        input.classList.remove('is-invalid');

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

        titleInput.addEventListener('input', function () {

            clearError(
                titleInput,
                'titleClientError'
            );

        });

    }


    if (shortDescription) {

        shortDescription.addEventListener('input', function () {

            clearError(
                shortDescription,
                'shortDescriptionClientError'
            );

        });

    }


    if (sectionHeading) {

        sectionHeading.addEventListener('input', function () {

            clearError(
                sectionHeading,
                'sectionHeadingClientError'
            );

        });

    }


    if (sectionDescription) {

        sectionDescription.addEventListener('input', function () {

            clearError(
                sectionDescription,
                'sectionDescriptionClientError'
            );

        });

    }


    if (bottomHeading) {

        bottomHeading.addEventListener('input', function () {

            clearError(
                bottomHeading,
                'bottomHeadingClientError'
            );

        });

    }


    if (bottomDescription) {

        bottomDescription.addEventListener('input', function () {

            clearError(
                bottomDescription,
                'bottomDescriptionClientError'
            );

        });

    }


    /*
    |--------------------------------------------------------------------------
    | Main Image Preview
    |--------------------------------------------------------------------------
    */

    if (mainImage) {

        mainImage.addEventListener('change', function () {

            clearError(
                mainImage,
                'mainImageClientError'
            );

            if (!this.files.length) {
                return;
            }

            const file = this.files[0];

            const allowedTypes = [
                'image/jpeg',
                'image/png',
                'image/webp'
            ];

            if (!allowedTypes.includes(file.type)) {

                showError(
                    mainImage,
                    'mainImageClientError',
                    'Please select a JPG, JPEG, PNG or WEBP image.'
                );

                this.value = '';

                return;
            }


            if (file.size > 2 * 1024 * 1024) {

                showError(
                    mainImage,
                    'mainImageClientError',
                    'Image size must not exceed 2MB.'
                );

                this.value = '';

                return;
            }


            let preview =
                document.getElementById('mainImagePreview');


            if (!preview) {

                preview =
                    document.createElement('img');

                preview.id =
                    'mainImagePreview';

                preview.className =
                    'rounded';

                preview.style.width =
                    '200px';

                preview.style.height =
                    '130px';

                preview.style.objectFit =
                    'cover';

                const wrapper =
                    document.createElement('div');

                wrapper.className =
                    'mb-3';

                wrapper.appendChild(preview);

                mainImage.parentNode.insertBefore(
                    wrapper,
                    mainImage
                );

            }


            const reader =
                new FileReader();

            reader.onload =
                function (event) {

                    preview.src =
                        event.target.result;

                };

            reader.readAsDataURL(file);

        });

    }


    /*
    |--------------------------------------------------------------------------
    | Secondary Image Preview
    |--------------------------------------------------------------------------
    */

    if (secondaryImage) {

        secondaryImage.addEventListener('change', function () {

            clearError(
                secondaryImage,
                'secondaryImageClientError'
            );

            if (!this.files.length) {
                return;
            }

            const file =
                this.files[0];

            const allowedTypes = [
                'image/jpeg',
                'image/png',
                'image/webp'
            ];

            if (!allowedTypes.includes(file.type)) {

                showError(
                    secondaryImage,
                    'secondaryImageClientError',
                    'Please select a JPG, JPEG, PNG or WEBP image.'
                );

                this.value = '';

                return;
            }


            if (file.size > 2 * 1024 * 1024) {

                showError(
                    secondaryImage,
                    'secondaryImageClientError',
                    'Image size must not exceed 2MB.'
                );

                this.value = '';

                return;
            }


            let preview =
                document.getElementById(
                    'secondaryImagePreview'
                );


            if (!preview) {

                preview =
                    document.createElement('img');

                preview.id =
                    'secondaryImagePreview';

                preview.className =
                    'rounded';

                preview.style.width =
                    '200px';

                preview.style.height =
                    '130px';

                preview.style.objectFit =
                    'cover';

                const wrapper =
                    document.createElement('div');

                wrapper.className =
                    'mb-3';

                wrapper.appendChild(preview);

                secondaryImage.parentNode.insertBefore(
                    wrapper,
                    secondaryImage
                );

            }


            const reader =
                new FileReader();

            reader.onload =
                function (event) {

                    preview.src =
                        event.target.result;

                };

            reader.readAsDataURL(file);

        });

    }


    /*
    |--------------------------------------------------------------------------
    | Submit Validation
    |--------------------------------------------------------------------------
    */

    if (form) {

        form.addEventListener('submit', function (event) {

            let valid = true;


            if (!validateRequired(
                titleInput,
                'titleClientError',
                'Please enter the facility title.'
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
                sectionHeading,
                'sectionHeadingClientError',
                'Please enter the section heading.'
            )) {

                valid = false;

            }


            if (!validateRequired(
                sectionDescription,
                'sectionDescriptionClientError',
                'Please enter the section description.'
            )) {

                valid = false;

            }


            if (!validateRequired(
                bottomHeading,
                'bottomHeadingClientError',
                'Please enter the bottom heading.'
            )) {

                valid = false;

            }


            if (!validateRequired(
                bottomDescription,
                'bottomDescriptionClientError',
                'Please enter the bottom description.'
            )) {

                valid = false;

            }


            /*
            |--------------------------------------------------------------------------
            | Features
            |--------------------------------------------------------------------------
            */

            const featureInputs =
                container.querySelectorAll(
                    'input[name="features[]"]'
                );


            let hasFeature = false;

            featureInputs.forEach(function (input) {

                if (input.value.trim()) {
                    hasFeature = true;
                }

            });


            if (!hasFeature) {

                featureInputs[0]
                    .classList.add('is-invalid');


                let featureError =
                    document.getElementById(
                        'featureClientError'
                    );


                if (!featureError) {

                    featureError =
                        document.createElement('div');

                    featureError.id =
                        'featureClientError';

                    featureError.className =
                        'text-danger mt-2';

                    container.appendChild(
                        featureError
                    );

                }


                featureError.textContent =
                    'Please add at least one feature.';

                valid = false;

            } else {

                featureInputs.forEach(function (input) {

                    input.classList.remove(
                        'is-invalid'
                    );

                });


                const featureError =
                    document.getElementById(
                        'featureClientError'
                    );


                if (featureError) {
                    featureError.textContent = '';
                }

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

        });

    }

});
</script>

@endpush

@endsection