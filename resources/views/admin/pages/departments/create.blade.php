@extends('admin.layout.app')

@section('title', 'Add New Department')

@section('content')

<main class="main-wrapper">

    <div class="main-content">

        <div class="container-fluid">


            {{-- =========================================================
                PAGE HEADER
            ========================================================== --}}

            <div class="d-flex align-items-center justify-content-between mb-4">

                <div>

                    <h4 class="mb-1">
                        Add New Department
                    </h4>

                    <p class="mb-0 text-secondary">
                        Create and manage hospital department information.
                    </p>

                </div>


                <a
                    href="{{ route('admin.departments.index') }}"
                    class="btn btn-outline-secondary d-flex align-items-center gap-2"
                >

                    <span class="material-icons-outlined fs-5">
                        arrow_back
                    </span>

                    Back

                </a>

            </div>



            {{-- =========================================================
                VALIDATION SUMMARY
            ========================================================== --}}

            @if ($errors->any())

                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">

                    <div class="d-flex align-items-start gap-2">

                        <span class="material-icons-outlined">
                            error_outline
                        </span>

                        <div>

                            <strong>
                                Please fix the following errors:
                            </strong>

                            <ul class="mb-0 mt-2 ps-3">

                                @foreach ($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    </div>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>

                </div>

            @endif



            {{-- =========================================================
                CREATE FORM
            ========================================================== --}}

            <form
                action="{{ route('admin.departments.store') }}"
                method="POST"
                enctype="multipart/form-data"
                id="departmentForm"
                novalidate
            >

                @csrf



                {{-- =====================================================
                    BASIC INFORMATION
                ====================================================== --}}

                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                Basic Information
                            </h5>

                            <p class="text-secondary mb-0">
                                Add the basic details of the department.
                            </p>

                        </div>


                        <div class="row g-4">


                            {{-- Department Name --}}

                            <div class="col-12 col-xl-6">

                                <label class="form-label">
                                    Department Name
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}"
                                    placeholder="e.g. Urology"
                                    required
                                >

                                @error('name')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                                <div
                                    class="invalid-feedback"
                                    id="nameClientError"
                                ></div>

                            </div>



                            {{-- Short Description --}}

                            <div class="col-12">

                                <label class="form-label">
                                    Short Description
                                </label>

                                <textarea
                                    name="short_description"
                                    rows="4"
                                    class="form-control @error('short_description') is-invalid @enderror"
                                    placeholder="Enter a short description about the department..."
                                >{{ old('short_description') }}</textarea>

                                @error('short_description')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>



                            {{-- Department Image --}}

                            <div class="col-12 col-xl-6">

                                <label class="form-label">
                                    Department Image
                                </label>

                                <input
                                    type="file"
                                    name="image"
                                    id="departmentImage"
                                    class="form-control @error('image') is-invalid @enderror"
                                    accept=".jpg,.jpeg,.png,.webp"
                                >

                                @error('image')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                                <div class="form-text">
                                    JPG, JPEG, PNG or WEBP. Maximum 2MB.
                                </div>

                                <div
                                    id="imagePreview"
                                    class="mt-3"
                                ></div>

                            </div>



                            {{-- Sort Order --}}

                            <div class="col-12 col-xl-6">

                                <label class="form-label">
                                    Sort Order
                                </label>

                                <input
                                    type="number"
                                    name="sort_order"
                                    class="form-control @error('sort_order') is-invalid @enderror"
                                    value="{{ old('sort_order') }}"
                                    min="1"
                                    placeholder="Leave empty for automatic order"
                                >

                                @error('sort_order')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =====================================================
                    ABOUT DEPARTMENT
                ====================================================== --}}

                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                About Department
                            </h5>

                            <p class="text-secondary mb-0">
                                Add the main introduction and description.
                            </p>

                        </div>


                        <div class="row g-4">


                            <div class="col-12">

                                <label class="form-label">
                                    About Heading
                                </label>

                                <input
                                    type="text"
                                    name="about_heading"
                                    class="form-control @error('about_heading') is-invalid @enderror"
                                    value="{{ old('about_heading') }}"
                                    placeholder="e.g. Comprehensive Urology Care"
                                >

                                @error('about_heading')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            <div class="col-12">

                                <label class="form-label">
                                    About Description
                                </label>

                                <textarea
                                    name="about_description"
                                    rows="6"
                                    class="form-control @error('about_description') is-invalid @enderror"
                                    placeholder="Write the department description..."
                                >{{ old('about_description') }}</textarea>

                                @error('about_description')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =====================================================
                    SERVICES
                ====================================================== --}}

                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="d-flex align-items-center justify-content-between mb-4">

                            <div>

                                <h5 class="mb-1">
                                    Our Services
                                </h5>

                                <p class="text-secondary mb-0">
                                    Add services provided by this department.
                                </p>

                            </div>

                            <button
                                type="button"
                                class="btn btn-primary d-flex align-items-center gap-2"
                                id="addService"
                            >

                                <span class="material-icons-outlined fs-5">
                                    add
                                </span>

                                Add Service

                            </button>

                        </div>


                        <div id="servicesWrapper">

                            @php
                                $oldServices = old('services', ['']);
                            @endphp

                            @foreach($oldServices as $service)

                                <div class="row g-2 mb-3 service-row">

                                    <div class="col">

                                        <input
                                            type="text"
                                            name="services[]"
                                            class="form-control @error('services.*') is-invalid @enderror"
                                            value="{{ $service }}"
                                            placeholder="Enter service"
                                        >

                                    </div>

                                    <div class="col-auto">

                                        <button
                                            type="button"
                                            class="btn btn-outline-danger remove-service"
                                        >

                                            <span class="material-icons-outlined">
                                                delete
                                            </span>

                                        </button>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                        @error('services.*')

                            <div class="text-danger small mt-2">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>

                </div>



                {{-- =====================================================
                    SPECIALITIES
                ====================================================== --}}

                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="d-flex align-items-center justify-content-between mb-4">

                            <div>

                                <h5 class="mb-1">
                                    Our Specialities
                                </h5>

                                <p class="text-secondary mb-0">
                                    Add specialities handled by the department.
                                </p>

                            </div>

                            <button
                                type="button"
                                class="btn btn-primary d-flex align-items-center gap-2"
                                id="addSpeciality"
                            >

                                <span class="material-icons-outlined fs-5">
                                    add
                                </span>

                                Add Speciality

                            </button>

                        </div>


                        <div id="specialitiesWrapper">

                            @php
                                $oldSpecialities = old('specialities', ['']);
                            @endphp

                            @foreach($oldSpecialities as $speciality)

                                <div class="row g-2 mb-3 speciality-row">

                                    <div class="col">

                                        <input
                                            type="text"
                                            name="specialities[]"
                                            class="form-control"
                                            value="{{ $speciality }}"
                                            placeholder="Enter speciality"
                                        >

                                    </div>

                                    <div class="col-auto">

                                        <button
                                            type="button"
                                            class="btn btn-outline-danger remove-speciality"
                                        >

                                            <span class="material-icons-outlined">
                                                delete
                                            </span>

                                        </button>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>



                {{-- =====================================================
                    CONDITIONS
                ====================================================== --}}

                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="d-flex align-items-center justify-content-between mb-4">

                            <div>

                                <h5 class="mb-1">
                                    Conditions & Care Areas
                                </h5>

                                <p class="text-secondary mb-0">
                                    Add conditions and care areas managed by the department.
                                </p>

                            </div>

                            <button
                                type="button"
                                class="btn btn-primary d-flex align-items-center gap-2"
                                id="addCondition"
                            >

                                <span class="material-icons-outlined fs-5">
                                    add
                                </span>

                                Add Condition

                            </button>

                        </div>


                        <div id="conditionsWrapper">

                            @php
                                $oldConditions = old('conditions', ['']);
                            @endphp

                            @foreach($oldConditions as $condition)

                                <div class="row g-2 mb-3 condition-row">

                                    <div class="col">

                                        <input
                                            type="text"
                                            name="conditions[]"
                                            class="form-control"
                                            value="{{ $condition }}"
                                            placeholder="Enter condition or care area"
                                        >

                                    </div>

                                    <div class="col-auto">

                                        <button
                                            type="button"
                                            class="btn btn-outline-danger remove-condition"
                                        >

                                            <span class="material-icons-outlined">
                                                delete
                                            </span>

                                        </button>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>



                {{-- =====================================================
                    PATIENT CARE
                ====================================================== --}}

                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                Patient Care
                            </h5>

                            <p class="text-secondary mb-0">
                                Add patient-care information for this department.
                            </p>

                        </div>


                        <div class="row g-4">

                            <div class="col-12">

                                <label class="form-label">
                                    Patient Care Heading
                                </label>

                                <input
                                    type="text"
                                    name="patient_care_heading"
                                    class="form-control @error('patient_care_heading') is-invalid @enderror"
                                    value="{{ old('patient_care_heading') }}"
                                    placeholder="Enter patient care heading"
                                >

                                @error('patient_care_heading')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            <div class="col-12">

                                <label class="form-label">
                                    Patient Care Description
                                </label>

                                <textarea
                                    name="patient_care_description"
                                    rows="5"
                                    class="form-control @error('patient_care_description') is-invalid @enderror"
                                    placeholder="Write patient care information..."
                                >{{ old('patient_care_description') }}</textarea>

                                @error('patient_care_description')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =====================================================
                    WHY CHOOSE
                ====================================================== --}}

                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="d-flex align-items-center justify-content-between mb-4">

                            <div>

                                <h5 class="mb-1">
                                    Why Choose Our Department
                                </h5>

                                <p class="text-secondary mb-0">
                                    Add the key reasons patients can choose this department.
                                </p>

                            </div>

                            <button
                                type="button"
                                class="btn btn-primary d-flex align-items-center gap-2"
                                id="addWhyChoose"
                            >

                                <span class="material-icons-outlined fs-5">
                                    add
                                </span>

                                Add Point

                            </button>

                        </div>


                        <div id="whyChooseWrapper">

                            @php
                                $oldWhyChoose = old('why_choose', ['']);
                            @endphp

                            @foreach($oldWhyChoose as $point)

                                <div class="row g-2 mb-3 why-choose-row">

                                    <div class="col">

                                        <input
                                            type="text"
                                            name="why_choose[]"
                                            class="form-control"
                                            value="{{ $point }}"
                                            placeholder="Enter reason"
                                        >

                                    </div>

                                    <div class="col-auto">

                                        <button
                                            type="button"
                                            class="btn btn-outline-danger remove-why-choose"
                                        >

                                            <span class="material-icons-outlined">
                                                delete
                                            </span>

                                        </button>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>



                {{-- =====================================================
                    RELATED DOCTORS
                ====================================================== --}}

                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                Related Doctors
                            </h5>

                            <p class="text-secondary mb-0">
                                Select doctors who belong to this department.
                            </p>

                        </div>


                        <div class="row g-4">

                            <div class="col-12">

                                <label class="form-label">
                                    Select Doctors
                                </label>


                                {{-- Doctor Search --}}

                                <div class="position-relative mb-3">

                                    <span
                                        class="material-icons-outlined position-absolute"
                                        style="
                                            left: 14px;
                                            top: 50%;
                                            transform: translateY(-50%);
                                            color: #6c757d;
                                            font-size: 20px;
                                            pointer-events: none;
                                        "
                                    >
                                        search
                                    </span>

                                    <input
                                        type="text"
                                        id="doctorSearch"
                                        class="form-control"
                                        placeholder="Search doctor by name or department..."
                                        style="padding-left: 45px;"
                                        autocomplete="off"
                                    >

                                </div>


                                {{-- Doctors List --}}

                                <div
                                    id="doctorList"
                                    class="border rounded-3 p-2"
                                    style="
                                        max-height: 350px;
                                        overflow-y: auto;
                                    "
                                >

                                    @forelse($doctors as $doctor)

                                        <div
                                            class="doctor-item border rounded-3 p-3 mb-2"
                                            data-name="{{ strtolower($doctor->name) }}"
                                            data-department="{{ strtolower($doctor->department) }}"
                                        >

                                            <div class="form-check d-flex align-items-start mb-0">

                                                <input
                                                    class="form-check-input doctor-checkbox me-3 mt-1 @error('doctor_ids') is-invalid @enderror"
                                                    type="checkbox"
                                                    name="doctor_ids[]"
                                                    value="{{ $doctor->id }}"
                                                    id="doctor_{{ $doctor->id }}"
                                                    {{ in_array(
                                                        $doctor->id,
                                                        old('doctor_ids', [])
                                                    ) ? 'checked' : '' }}
                                                >

                                                <label
                                                    class="form-check-label w-100"
                                                    for="doctor_{{ $doctor->id }}"
                                                    style="cursor: pointer;"
                                                >

                                                    <strong class="d-block">
                                                        {{ $doctor->name }}
                                                    </strong>

                                                    <small class="text-secondary">
                                                        {{ $doctor->department }}
                                                    </small>

                                                </label>

                                            </div>

                                        </div>

                                    @empty

                                        <div class="text-center py-4 text-secondary">
                                            No active doctors available.
                                        </div>

                                    @endforelse


                                    {{-- No Search Result --}}

                                    <div
                                        id="noDoctorFound"
                                        class="text-center py-4 text-secondary"
                                        style="display: none;"
                                    >
                                        No doctor found.
                                    </div>

                                </div>


                                {{-- Selected Count --}}

                                <div class="d-flex justify-content-between align-items-center mt-3">

                                    <small class="text-secondary">
                                        Select one or more doctors for this department.
                                    </small>

                                    <span
                                        id="selectedDoctorCount"
                                        class="badge bg-primary"
                                    >
                                        0 Selected
                                    </span>

                                </div>


                                @error('doctor_ids')

                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>

                                @enderror


                                @error('doctor_ids.*')

                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =====================================================
                    SETTINGS
                ====================================================== --}}

                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                Settings
                            </h5>

                            <p class="text-secondary mb-0">
                                Configure department visibility.
                            </p>

                        </div>


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
                                Active Department
                            </label>

                        </div>

                    </div>

                </div>



                {{-- =====================================================
                    ACTIONS
                ====================================================== --}}

                <div class="d-flex justify-content-end gap-2 mb-5">

                    <a
                        href="{{ route('admin.departments.index') }}"
                        class="btn btn-light"
                    >
                        Cancel
                    </a>


                    <button
                        type="submit"
                        class="btn btn-primary d-flex align-items-center gap-2"
                        id="submitBtn"
                    >

                        <span class="material-icons-outlined fs-5">
                            save
                        </span>

                        Save Department

                    </button>

                </div>


            </form>

        </div>

    </div>

</main>



{{-- =========================================================
    JAVASCRIPT
========================================================= --}}

@push('scripts')

<script>

document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('departmentForm');



    /* =========================================================
       RELATED DOCTORS
    ========================================================= */

    const doctorSearch = document.getElementById('doctorSearch');
    const doctorItems = document.querySelectorAll('.doctor-item');
    const doctorCheckboxes = document.querySelectorAll('.doctor-checkbox');
    const noDoctorFound = document.getElementById('noDoctorFound');
    const selectedDoctorCount = document.getElementById('selectedDoctorCount');

    function updateSelectedDoctorCount() {

        if (!selectedDoctorCount) {
            return;
        }

        const selectedCount =
            document.querySelectorAll('.doctor-checkbox:checked').length;

        selectedDoctorCount.textContent = selectedCount + ' Selected';
    }

    if (doctorSearch) {

        doctorSearch.addEventListener('input', function () {

            const searchValue = this.value.toLowerCase().trim();

            let visibleCount = 0;

            doctorItems.forEach(function (item) {

                const name = item.dataset.name || '';
                const department = item.dataset.department || '';

                const matched =
                    name.includes(searchValue) ||
                    department.includes(searchValue);

                item.style.display = matched ? '' : 'none';

                if (matched) {
                    visibleCount++;
                }

            });

            if (noDoctorFound) {
                noDoctorFound.style.display =
                    visibleCount === 0 ? 'block' : 'none';
            }

        });

    }

    doctorCheckboxes.forEach(function (checkbox) {

        checkbox.addEventListener('change', function () {
            updateSelectedDoctorCount();
        });

    });

    updateSelectedDoctorCount();


    /* =========================================================
       IMAGE PREVIEW
    ========================================================= */

    const imageInput = document.getElementById('departmentImage');
    const imagePreview = document.getElementById('imagePreview');

    if (imageInput && imagePreview) {

        imageInput.addEventListener('change', function () {

            imagePreview.innerHTML = '';

            const file = this.files[0];

            if (!file) {
                return;
            }

            const reader = new FileReader();

            reader.onload = function (event) {

                imagePreview.innerHTML = `
                    <div style="
                        width:180px;
                        height:120px;
                        border-radius:8px;
                        overflow:hidden;
                        border:1px solid #dee2e6;
                    ">
                        <img
                            src="${event.target.result}"
                            alt="Preview"
                            style="
                                width:100%;
                                height:100%;
                                object-fit:cover;
                            "
                        >
                    </div>
                `;

            };

            reader.readAsDataURL(file);

        });

    }



    /* =========================================================
       SERVICES
    ========================================================= */

    const servicesWrapper = document.getElementById('servicesWrapper');
    const addService = document.getElementById('addService');

    if (addService && servicesWrapper) {

        addService.addEventListener('click', function () {

            const row = document.createElement('div');

            row.className = 'row g-2 mb-3 service-row';

            row.innerHTML = `
                <div class="col">
                    <input
                        type="text"
                        name="services[]"
                        class="form-control"
                        placeholder="Enter service"
                    >
                </div>

                <div class="col-auto">
                    <button
                        type="button"
                        class="btn btn-outline-danger remove-service"
                    >
                        <span class="material-icons-outlined">
                            delete
                        </span>
                    </button>
                </div>
            `;

            servicesWrapper.appendChild(row);

        });

        servicesWrapper.addEventListener('click', function (event) {

            const button = event.target.closest('.remove-service');

            if (!button) {
                return;
            }

            const rows =
                servicesWrapper.querySelectorAll('.service-row');

            if (rows.length > 1) {
                button.closest('.service-row').remove();
            }

        });

    }



    /* =========================================================
       SPECIALITIES
    ========================================================= */

    const specialitiesWrapper =
        document.getElementById('specialitiesWrapper');

    const addSpeciality =
        document.getElementById('addSpeciality');

    if (addSpeciality && specialitiesWrapper) {

        addSpeciality.addEventListener('click', function () {

            const row = document.createElement('div');

            row.className = 'row g-2 mb-3 speciality-row';

            row.innerHTML = `
                <div class="col">
                    <input
                        type="text"
                        name="specialities[]"
                        class="form-control"
                        placeholder="Enter speciality"
                    >
                </div>

                <div class="col-auto">
                    <button
                        type="button"
                        class="btn btn-outline-danger remove-speciality"
                    >
                        <span class="material-icons-outlined">
                            delete
                        </span>
                    </button>
                </div>
            `;

            specialitiesWrapper.appendChild(row);

        });

        specialitiesWrapper.addEventListener('click', function (event) {

            const button =
                event.target.closest('.remove-speciality');

            if (!button) {
                return;
            }

            const rows =
                specialitiesWrapper.querySelectorAll('.speciality-row');

            if (rows.length > 1) {
                button.closest('.speciality-row').remove();
            }

        });

    }



    /* =========================================================
       CONDITIONS
    ========================================================= */

    const conditionsWrapper =
        document.getElementById('conditionsWrapper');

    const addCondition =
        document.getElementById('addCondition');

    if (addCondition && conditionsWrapper) {

        addCondition.addEventListener('click', function () {

            const row = document.createElement('div');

            row.className = 'row g-2 mb-3 condition-row';

            row.innerHTML = `
                <div class="col">
                    <input
                        type="text"
                        name="conditions[]"
                        class="form-control"
                        placeholder="Enter condition or care area"
                    >
                </div>

                <div class="col-auto">
                    <button
                        type="button"
                        class="btn btn-outline-danger remove-condition"
                    >
                        <span class="material-icons-outlined">
                            delete
                        </span>
                    </button>
                </div>
            `;

            conditionsWrapper.appendChild(row);

        });

        conditionsWrapper.addEventListener('click', function (event) {

            const button =
                event.target.closest('.remove-condition');

            if (!button) {
                return;
            }

            const rows =
                conditionsWrapper.querySelectorAll('.condition-row');

            if (rows.length > 1) {
                button.closest('.condition-row').remove();
            }

        });

    }



    /* =========================================================
       WHY CHOOSE
    ========================================================= */

    const whyChooseWrapper =
        document.getElementById('whyChooseWrapper');

    const addWhyChoose =
        document.getElementById('addWhyChoose');

    if (addWhyChoose && whyChooseWrapper) {

        addWhyChoose.addEventListener('click', function () {

            const row = document.createElement('div');

            row.className = 'row g-2 mb-3 why-choose-row';

            row.innerHTML = `
                <div class="col">
                    <input
                        type="text"
                        name="why_choose[]"
                        class="form-control"
                        placeholder="Enter reason"
                    >
                </div>

                <div class="col-auto">
                    <button
                        type="button"
                        class="btn btn-outline-danger remove-why-choose"
                    >
                        <span class="material-icons-outlined">
                            delete
                        </span>
                    </button>
                </div>
            `;

            whyChooseWrapper.appendChild(row);

        });

        whyChooseWrapper.addEventListener('click', function (event) {

            const button =
                event.target.closest('.remove-why-choose');

            if (!button) {
                return;
            }

            const rows =
                whyChooseWrapper.querySelectorAll('.why-choose-row');

            if (rows.length > 1) {
                button.closest('.why-choose-row').remove();
            }

        });

    }



    /* =========================================================
       CLIENT SIDE VALIDATION
    ========================================================= */

    if (form) {

        form.addEventListener('submit', function (event) {

            let valid = true;


            const nameInput =
                form.querySelector('[name="name"]');

            const nameClientError =
                document.getElementById('nameClientError');


            if (nameInput && !nameInput.value.trim()) {

                nameInput.classList.add('is-invalid');

                if (nameClientError) {
                    nameClientError.textContent =
                        'Please enter the department name.';
                }

                valid = false;

            } else if (nameInput) {

                nameInput.classList.remove('is-invalid');

                if (nameClientError) {
                    nameClientError.textContent = '';
                }

            }



            /* Image validation */

            if (imageInput && imageInput.files.length > 0) {

                const file = imageInput.files[0];

                const allowedTypes = [
                    'image/jpeg',
                    'image/png',
                    'image/webp'
                ];

                if (!allowedTypes.includes(file.type)) {

                    imageInput.classList.add('is-invalid');

                    valid = false;

                } else if (file.size > 2 * 1024 * 1024) {

                    imageInput.classList.add('is-invalid');

                    valid = false;

                } else {

                    imageInput.classList.remove('is-invalid');

                }

            }



            if (!valid) {

                event.preventDefault();

                const firstInvalid =
                    form.querySelector('.is-invalid');

                if (firstInvalid) {
                    firstInvalid.focus();
                }

            }

        });

    }

});

</script>

@endpush

@endsection