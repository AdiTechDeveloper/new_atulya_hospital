@extends('admin.layout.app')

@section('title', 'Add Job')

@section('content')

<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            <div class="d-flex align-items-center justify-content-between mb-4">

                <div>
                    <h4 class="mb-1">
                        Add New Job
                    </h4>

                    <p class="mb-0 text-secondary">
                        Create a new career opportunity.
                    </p>
                </div>

                <a
                    href="{{ route('admin.jobs.index') }}"
                    class="btn btn-light"
                >
                    <span class="material-icons-outlined align-middle me-1">
                        arrow_back
                    </span>
                    Back
                </a>

            </div>

            <form
                action="{{ route('admin.jobs.store') }}"
                method="POST"
                id="jobForm"
                novalidate
            >

                @csrf

                <div class="row">

                    <div class="col-12 col-xl-8">

                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Basic Information
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Add the basic details of the job.
                                    </p>

                                </div>


                                <div class="mb-4">

                                    <label class="form-label">
                                        Job Title
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        name="title"
                                        id="jobTitle"
                                        class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title') }}"
                                        maxlength="150"
                                        placeholder="e.g. Staff Nurse"
                                    >

                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <div
                                        class="invalid-feedback"
                                        id="titleClientError"
                                    ></div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6 mb-4">

                                        <label class="form-label">
                                            Department
                                        </label>

                                        <input
                                            type="text"
                                            name="department"
                                            id="department"
                                            class="form-control @error('department') is-invalid @enderror"
                                            value="{{ old('department') }}"
                                            maxlength="100"
                                            placeholder="e.g. Nursing"
                                        >

                                        @error('department')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    <div class="col-md-6 mb-4">

                                        <label class="form-label">
                                            Location
                                        </label>

                                        <input
                                            type="text"
                                            name="location"
                                            id="location"
                                            class="form-control @error('location') is-invalid @enderror"
                                            value="{{ old('location') }}"
                                            maxlength="150"
                                            placeholder="e.g. Ahmedabad"
                                        >

                                        @error('location')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    <div class="col-md-6 mb-4">

                                        <label class="form-label">
                                            Employment Type
                                        </label>

                                        <input
                                            type="text"
                                            name="employment_type"
                                            id="employmentType"
                                            class="form-control @error('employment_type') is-invalid @enderror"
                                            value="{{ old('employment_type') }}"
                                            maxlength="100"
                                            placeholder="e.g. Full Time"
                                        >

                                        @error('employment_type')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    <div class="col-md-6 mb-4">

                                        <label class="form-label">
                                            Experience
                                        </label>

                                        <input
                                            type="text"
                                            name="experience"
                                            id="experience"
                                            class="form-control @error('experience') is-invalid @enderror"
                                            value="{{ old('experience') }}"
                                            maxlength="100"
                                            placeholder="e.g. 2-4 Years"
                                        >

                                        @error('experience')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>


                                    <div class="col-12 mb-4">

                                        <label class="form-label">
                                            Salary
                                        </label>

                                        <input
                                            type="text"
                                            name="salary"
                                            id="salary"
                                            class="form-control @error('salary') is-invalid @enderror"
                                            value="{{ old('salary') }}"
                                            maxlength="100"
                                            placeholder="e.g. ₹25,000 - ₹35,000"
                                        >

                                        @error('salary')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="card mb-4">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Job Details
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Add job description and requirements.
                                    </p>

                                </div>


                                <div class="mb-4">

                                    <label class="form-label">
                                        Job Description
                                        <span class="text-danger">*</span>
                                    </label>

                                    <textarea
                                        name="description"
                                        id="description"
                                        rows="6"
                                        maxlength="10000"
                                        class="form-control @error('description') is-invalid @enderror"
                                        placeholder="Enter job description..."
                                    >{{ old('description') }}</textarea>

                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <div
                                        class="invalid-feedback"
                                        id="descriptionClientError"
                                    ></div>

                                </div>


                                <div class="mb-0">

                                    <label class="form-label">
                                        Requirements
                                    </label>

                                    <textarea
                                        name="requirements"
                                        id="requirements"
                                        rows="6"
                                        maxlength="5000"
                                        class="form-control @error('requirements') is-invalid @enderror"
                                        placeholder="Enter job requirements..."
                                    >{{ old('requirements') }}</textarea>

                                    @error('requirements')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="col-12 col-xl-4">

                        <div class="card">

                            <div class="card-body p-4">

                                <div class="mb-4">

                                    <h5 class="mb-1">
                                        Job Status
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Control whether this job is visible on the website.
                                    </p>

                                </div>


                                <div class="form-check form-switch mb-4">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="is_active"
                                        value="1"
                                        id="isActive"
                                        {{ old('is_active', true) ? 'checked' : '' }}
                                    >

                                    <label
                                        class="form-check-label"
                                        for="isActive"
                                    >
                                        Active Job
                                    </label>

                                    @error('is_active')
                                        <div class="text-danger small mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>


                                <button
                                    type="submit"
                                    class="btn btn-primary w-100"
                                    id="submitBtn"
                                >
                                    <span class="material-icons-outlined align-middle me-1">
                                        save
                                    </span>
                                    Create Job
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>
    </div>
</main>


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('jobForm');

    if (!form) {
        return;
    }

    const titleInput = document.getElementById('jobTitle');
    const titleClientError = document.getElementById('titleClientError');

    const descriptionInput = document.getElementById('description');
    const descriptionClientError =
        document.getElementById('descriptionClientError');

    form.addEventListener('submit', function (event) {

        let valid = true;


        // Job title validation

        if (!titleInput.value.trim()) {

            titleInput.classList.add('is-invalid');

            titleClientError.textContent =
                'Please enter the job title.';

            valid = false;

        } else {

            titleInput.classList.remove('is-invalid');

            titleClientError.textContent = '';

        }


        // Job description validation

        if (!descriptionInput.value.trim()) {

            descriptionInput.classList.add('is-invalid');

            descriptionClientError.textContent =
                'Please enter the job description.';

            valid = false;

        } else if (descriptionInput.value.trim().length < 20) {

            descriptionInput.classList.add('is-invalid');

            descriptionClientError.textContent =
                'Job description must be at least 20 characters.';

            valid = false;

        } else {

            descriptionInput.classList.remove('is-invalid');

            descriptionClientError.textContent = '';

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

});
</script>

@endpush

@endsection