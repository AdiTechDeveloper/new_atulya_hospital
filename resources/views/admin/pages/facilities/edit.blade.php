@extends('admin.layout.app')

@section('title', 'Edit Facility')

@section('content')

<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

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


            @if($errors->any())

                <div class="row">
                    <div class="col-12">

                        <div class="alert alert-danger alert-dismissible fade show">

                            <strong>Please fix the following errors:</strong>

                            <ul class="mb-0 mt-2">

                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach

                            </ul>

                            <button type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert">
                            </button>

                        </div>

                    </div>
                </div>

            @endif


            <div class="row">

                <div class="col-12">

                    <form
                        action="{{ route('admin.facilities.update', $facility) }}"
                        method="POST"
                        enctype="multipart/form-data"
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
                                            required
                                        >

                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


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
                                        >

                                        @error('slug')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    <div class="col-12">

                                        <label class="form-label">
                                            Short Description
                                        </label>

                                        <textarea
                                            name="short_description"
                                            class="form-control"
                                            rows="4"
                                        >{{ old('short_description', $facility->short_description) }}</textarea>

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

                                    <div class="col-12 col-xl-6">

                                        <label class="form-label">
                                            Main Image
                                        </label>

                                        @if($facility->main_image)

                                            <div class="mb-3">

                                                <img
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
                                            class="form-control @error('main_image') is-invalid @enderror"
                                            accept=".jpg,.jpeg,.png,.webp"
                                        >

                                        <div class="form-text">
                                            Leave empty to keep the current image.
                                        </div>

                                        @error('main_image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    <div class="col-12 col-xl-6">

                                        <label class="form-label">
                                            Secondary Image
                                        </label>

                                        @if($facility->secondary_image)

                                            <div class="mb-3">

                                                <img
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
                                            class="form-control @error('secondary_image') is-invalid @enderror"
                                            accept=".jpg,.jpeg,.png,.webp"
                                        >

                                        <div class="form-text">
                                            Leave empty to keep the current image.
                                        </div>

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

                                    <div class="col-12">

                                        <label class="form-label">
                                            Section Heading
                                        </label>

                                        <input
                                            type="text"
                                            name="section_heading"
                                            class="form-control"
                                            value="{{ old('section_heading', $facility->section_heading) }}"
                                        >

                                    </div>


                                    <div class="col-12">

                                        <label class="form-label">
                                            Section Description
                                        </label>

                                        <textarea
                                            name="section_description"
                                            class="form-control"
                                            rows="6"
                                        >{{ old('section_description', $facility->section_description) }}</textarea>

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
                                        $features = old('features', $facility->features ?? []);
                                    @endphp


                                    @forelse($features as $feature)

                                        <div class="input-group mb-3 feature-row">

                                            <input
                                                type="text"
                                                name="features[]"
                                                class="form-control"
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

                                    <div class="col-12">

                                        <label class="form-label">
                                            Bottom Heading
                                        </label>

                                        <input
                                            type="text"
                                            name="bottom_heading"
                                            class="form-control"
                                            value="{{ old('bottom_heading', $facility->bottom_heading) }}"
                                        >

                                    </div>


                                    <div class="col-12">

                                        <label class="form-label">
                                            Bottom Description
                                        </label>

                                        <textarea
                                            name="bottom_description"
                                            class="form-control"
                                            rows="6"
                                        >{{ old('bottom_description', $facility->bottom_description) }}</textarea>

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

                                    <div class="col-12 col-md-6">

                                        <label class="form-label">
                                            Sort Order
                                        </label>

                                        <input
                                            type="number"
                                            name="sort_order"
                                            class="form-control"
                                            value="{{ old('sort_order', $facility->sort_order) }}"
                                            min="1"
                                        >

                                    </div>


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

    const titleInput = document.getElementById('facilityTitle');
    const slugInput = document.getElementById('facilitySlug');

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


    const container = document.getElementById('featuresContainer');
    const addButton = document.getElementById('addFeature');

    if (container && addButton) {

        addButton.addEventListener('click', function () {

            const row = document.createElement('div');

            row.className = 'input-group mb-3 feature-row';

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

            const button = event.target.closest('.removeFeature');

            if (!button) {
                return;
            }

            const rows = container.querySelectorAll('.feature-row');

            if (rows.length > 1) {

                button.closest('.feature-row').remove();

            } else {

                button.closest('.feature-row')
                    .querySelector('input')
                    .value = '';

            }

        });

    }

});
</script>

@endpush

@endsection