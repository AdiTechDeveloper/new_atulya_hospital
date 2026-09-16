@extends('admin.layout.app')

@section('title', isset($doctor) ? 'Edit Doctor' : 'Add Doctor')

@section('content')
<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid my-4">
            {{-- Header --}}
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2>{{ isset($doctor) ? 'Edit Doctor: ' . $doctor->name : 'Add New Doctor' }}</h2>
                    <p class="text-muted mb-0">
                        {{ isset($doctor) ? 'Update doctor profile details, qualifications, and OPD timings.' : 'Add doctor profile details, qualifications, OPD timings, and care information.' }}
                    </p>
                </div>
                <a href="{{ route('admin.doctors.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to List
                </a>
            </div>

            {{-- Form Card --}}
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form id="doctorForm" action="{{ isset($doctor) ? route('admin.doctors.update', $doctor->id) : route('admin.doctors.store') }}" method="POST" enctype="multipart/form-data" novalidate>

                        @csrf
                        @if(isset($doctor))
                        @method('PUT')
                        @endif

                        <div class="row">
                            {{-- Basic Information Section --}}
                            <div class="col-12 mb-2">
                                <h5 class="text-primary border-bottom pb-2">Basic Information</h5>
                            </div>

                            {{-- Doctor Name --}}
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label fw-bold">Doctor Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $doctor->name ?? '') }}" placeholder="e.g. Dr. Darshil Shah">
                                @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Department --}}
                            <div class="col-md-6 mb-3">
                                <label for="department" class="form-label fw-bold">Department <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('department') is-invalid @enderror" id="department" name="department" value="{{ old('department', $doctor->department ?? '') }}" placeholder="e.g. Urology">
                                @error('department')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Speciality --}}
                            <div class="col-md-6 mb-3">
                                <label for="speciality" class="form-label fw-bold">Speciality <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('speciality') is-invalid @enderror" id="speciality" name="speciality" value="{{ old('speciality', $doctor->speciality ?? '') }}" placeholder="e.g. Urologist & Andrologist">
                                @error('speciality')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Qualification --}}
                            <div class="col-md-6 mb-3">
                                <label for="qualification" class="form-label fw-bold">Qualification <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('qualification') is-invalid @enderror" id="qualification" name="qualification" value="{{ old('qualification', $doctor->qualification ?? '') }}" placeholder="e.g. MS, MCH, Urology">
                                @error('qualification')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Phone Number --}}
                            <div class="col-md-6 mb-3">
                                <label for="phone_number" class="form-label fw-bold">Appointment Phone Number</label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number', $doctor->phone_number ?? '') }}" placeholder="Enter 10 digit mobile number" inputmode="numeric" maxlength="10" autocomplete="tel">
                                @error('phone_number')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- OPD Timing --}}
                            <div class="col-md-6 mb-3">
                                <label for="opd_timing" class="form-label fw-bold">OPD Timing <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('opd_timing') is-invalid @enderror" id="opd_timing" name="opd_timing" value="{{ old('opd_timing', $doctor->opd_timing ?? '') }}" placeholder="e.g. 04 PM to 06 PM" maxlength="17" autocomplete="off">
                                @error('opd_timing')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Doctor Image Upload --}}
                            <div class="col-md-12 mb-4">
                                <label for="image" class="form-label fw-bold">
                                    Profile Picture @if(!isset($doctor)) <span class="text-danger">*</span> @endif
                                </label>

                                {{-- Live Preview Container --}}
                                <div class="mb-2">
                                    <img id="imagePreview" src="{{ isset($doctor) && $doctor->image ? asset('storage/' . $doctor->image) : '#' }}" alt="Profile Preview" class="rounded img-thumbnail {{ isset($doctor) && $doctor->image ? '' : 'd-none' }}" style="height: 100px; width: 100px; object-fit: cover;">
                                </div>

                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" onchange="previewDoctorImage(this)">

                                @error('image')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @else
                                <small class="text-muted d-block mt-1">
                                    {{ isset($doctor) ? 'Leave empty if you do not want to change the picture.' : 'Accepted formats: jpeg, png, jpg, webp (Max: 2MB)' }}
                                </small>
                                @enderror
                            </div>

                            {{-- Profile Content Section --}}
                            <div class="col-12 mb-2 mt-2">
                                <h5 class="text-primary border-bottom pb-2">Profile Page Content</h5>
                            </div>

                            {{-- About Doctor --}}
                            <div class="col-md-12 mb-3">
                                <label for="about" class="form-label fw-bold">About the Doctor</label>
                                <textarea class="form-control @error('about') is-invalid @enderror" id="about" name="about" rows="4" placeholder="Enter doctor biography summary...">{{ old('about', $doctor->about ?? '') }}</textarea>
                                @error('about')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Areas of Care --}}
                            <div class="col-md-12 mb-3">
                                <label for="areas_of_care" class="form-label fw-bold">Areas of Care</label>
                                <input type="text" class="form-control @error('areas_of_care') is-invalid @enderror" id="areas_of_care" name="areas_of_care" value="{{ old('areas_of_care', isset($areas_of_care) ? $areas_of_care : '') }}" placeholder="Specialist Consultation, Clinical Evaluation, Treatment Guidance">
                                @error('areas_of_care')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Patient Care Text --}}
                            <div class="col-md-12 mb-3">
                                <label for="patient_care_text" class="form-label fw-bold">Patient Care Text</label>
                                <textarea class="form-control @error('patient_care_text') is-invalid @enderror" id="patient_care_text" name="patient_care_text" rows="3" placeholder="Enter patient care approach...">{{ old('patient_care_text', $doctor->patient_care_text ?? '') }}</textarea>
                                @error('patient_care_text')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary px-4">
                                {{ isset($doctor) ? 'Update Doctor' : 'Save Doctor' }}
                            </button>
                            <a href="{{ route('admin.doctors.index') }}" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@push('scripts')

<script>
    $(function() {
        $('#phone_number').on('input', function() {
            this.value = this.value.replace(/\D/g, '').slice(0, 10);
        });

        $('#opd_timing').on('input', function() {
            this.value = this.value.replace(/[^0-9a-zA-Z ]/g, '').slice(0, 17);
        });

        $("#doctorForm").validate({
            highlight: function(element) {
                $(element).addClass('is-invalid').removeClass('is-valid');
            }
            , unhighlight: function(element) {
                $(element).removeClass('is-invalid');
            }
            , errorElement: 'div'
            , errorClass: 'invalid-feedback d-block'
            , errorPlacement: function(error, element) {
                error.insertAfter(element);
            },

            // Validation Rules
            rules: {
                name: {
                    required: true
                    , minlength: 3
                }
                , department: {
                    required: true
                }
                , speciality: {
                    required: true
                }
                , qualification: {
                    required: true
                }
                , phone_number: {
                    digits: true
                    , minlength: 10
                    , maxlength: 10
                }
                , opd_timing: {
                    required: true
                    , pattern: /^(0[1-9]|1[0-2]) (AM|PM) to (0[1-9]|1[0-2]) (AM|PM)$/i
                }
                , @if(!isset($doctor))
                image: {
                    required: true
                    , extension: "jpg|jpeg|png|webp"
                }
                @else
                image: {
                    extension: "jpg|jpeg|png|webp"
                }
                @endif
            },

            // Custom Messages
            messages: {
                name: {
                    required: "Please enter doctor name"
                    , minlength: "Name must be at least 3 characters long"
                }
                , department: "Please enter department"
                , speciality: "Please enter speciality"
                , qualification: "Please enter qualification"
                , phone_number: {
                    digits: "Mobile number must contain digits only"
                    , minlength: "Mobile number must be exactly 10 digits"
                    , maxlength: "Mobile number must be exactly 10 digits"
                }
                , opd_timing: {
                    required: "Please enter OPD timing"
                    , pattern: "Use format: 04 PM to 06 PM"
                }
                , image: {
                    required: "Please upload a profile picture"
                    , extension: "Please upload a valid image file (jpg, jpeg, png, webp)"
                }
            },

            // Prevent Form Submit if Invalid
            submitHandler: function(form) {
                form.submit();
            }
        });
    });

    function previewDoctorImage(input) {
        const preview = document.getElementById('imagePreview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('d-none');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
@endpush
@endsection
