@extends('admin.layout.app')

@section('title', 'Settings')

@section('content')
<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            <div class="d-flex align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-1">Settings</h4>
                    <p class="mb-0 text-secondary">
                        Manage your hospital information, social media and timings.
                    </p>
                </div>
            </div>

            @if(session('success'))
            <div class="alert alert-success border-0">
                {{ session('success') }}
            </div>
            @endif


            <form
                action="{{ route('admin.settings.update') }}"
                method="POST"
                enctype="multipart/form-data"
                id="settingsForm">

                @csrf
                @method('PUT')


                {{-- Hospital Information --}}
                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                Hospital Information
                            </h5>

                            <p class="text-secondary mb-0">
                                Update your hospital's basic information.
                            </p>

                        </div>


                        <div class="row g-4">


                            {{-- Hospital Name --}}
                            <div class="col-12 col-xl-6">

                                <label
                                    for="hospitalName"
                                    class="form-label">
                                    Hospital Name
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="hospital_name"
                                    id="hospitalName"
                                    class="form-control @error('hospital_name') is-invalid @enderror"
                                    value="{{ old('hospital_name', $setting->hospital_name) }}"
                                    placeholder="Enter hospital name"
                                    autocomplete="off">

                                <div
                                    id="hospitalNameClientError"
                                    class="invalid-feedback"></div>

                                @error('hospital_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            {{-- Phone --}}
                            <div class="col-12 col-xl-6">

                                <label
                                    for="phone"
                                    class="form-label">
                                    Phone Number
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="tel"
                                    name="phone"
                                    id="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone', $setting->phone) }}"
                                    placeholder="Enter 10-digit mobile number"
                                    maxlength="10"
                                    minlength="10"
                                    inputmode="numeric"
                                    autocomplete="off">

                                <div
                                    id="phoneClientError"
                                    class="invalid-feedback"></div>

                                @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            {{-- Address --}}
                            <div class="col-12">

                                <label
                                    for="address"
                                    class="form-label">
                                    Address
                                    <span class="text-danger">*</span>
                                </label>

                                <textarea
                                    name="address"
                                    id="address"
                                    rows="3"
                                    class="form-control @error('address') is-invalid @enderror"
                                    placeholder="Enter hospital address">{{ old('address', $setting->address) }}</textarea>

                                <div
                                    id="addressClientError"
                                    class="invalid-feedback"></div>

                                @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            {{-- Google Maps Link --}}
                            <div class="col-12 col-xl-6">

                                <label
                                    for="googleMapsUrl"
                                    class="form-label">
                                    Google Maps Link
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="url"
                                    name="google_maps_url"
                                    id="googleMapsUrl"
                                    class="form-control @error('google_maps_url') is-invalid @enderror"
                                    value="{{ old('google_maps_url', $setting->google_maps_url) }}"
                                    placeholder="https://maps.app.goo.gl/...">

                                <div
                                    id="googleMapsUrlClientError"
                                    class="invalid-feedback"></div>

                                @error('google_maps_url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                <small class="text-secondary">
                                    Link opened when users click the Google Maps icon.
                                </small>

                            </div>


                            {{-- Google Maps Embed URL --}}
                            <div class="col-12 col-xl-6">

                                <label
                                    for="googleMapsEmbedUrl"
                                    class="form-label">
                                    Google Maps Embed URL
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="url"
                                    name="google_maps_embed_url"
                                    id="googleMapsEmbedUrl"
                                    class="form-control @error('google_maps_embed_url') is-invalid @enderror"
                                    value="{{ old('google_maps_embed_url', $setting->google_maps_embed_url) }}"
                                    placeholder="https://www.google.com/maps?q=...&output=embed">

                                <div
                                    id="googleMapsEmbedUrlClientError"
                                    class="invalid-feedback"></div>

                                @error('google_maps_embed_url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                <small class="text-secondary">
                                    URL used to display the map on the Contact page.
                                </small>

                            </div>


                            {{-- Logo --}}
                            <div class="col-12 col-xl-6">

                                <label
                                    for="logoInput"
                                    class="form-label">
                                    Hospital Logo
                                </label>

                                <input
                                    type="file"
                                    name="logo"
                                    id="logoInput"
                                    class="form-control @error('logo') is-invalid @enderror"
                                    accept=".jpg,.jpeg,.png,.webp">

                                @error('logo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                <small class="text-secondary">
                                    Leave empty to keep the current logo.
                                </small>

                            </div>


                            {{-- Logo Preview --}}
                            <div class="col-12 col-xl-6">

                                <label class="form-label d-block">
                                    Logo Preview
                                </label>

                                <div
                                    class="border rounded p-3 d-flex align-items-center justify-content-center"
                                    style="min-height: 120px;">

                                    <img
                                        id="logoPreview"
                                        src="{{ str_starts_with($setting->logo ?? '', 'settings/')
                                            ? asset('storage/' . $setting->logo)
                                            : asset($setting->logo ?? 'assets/img/logo/Atulya-logo.png') }}"
                                        alt="Hospital Logo"
                                        style="max-width: 220px; max-height: 90px; object-fit: contain;">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Social Media --}}
                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                Social Media
                            </h5>

                            <p class="text-secondary mb-0">
                                Update your hospital's social media links.
                            </p>

                        </div>


                        <div class="row g-4">


                            {{-- Facebook --}}
                            <div class="col-12 col-xl-6">

                                <label
                                    for="facebookUrl"
                                    class="form-label">
                                    Facebook URL
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="url"
                                    name="facebook_url"
                                    id="facebookUrl"
                                    class="form-control @error('facebook_url') is-invalid @enderror"
                                    value="{{ old('facebook_url', $setting->facebook_url) }}"
                                    placeholder="https://facebook.com/...">

                                <div
                                    id="facebookUrlClientError"
                                    class="invalid-feedback"></div>

                                @error('facebook_url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            {{-- Instagram --}}
                            <div class="col-12 col-xl-6">

                                <label
                                    for="instagramUrl"
                                    class="form-label">
                                    Instagram URL
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="url"
                                    name="instagram_url"
                                    id="instagramUrl"
                                    class="form-control @error('instagram_url') is-invalid @enderror"
                                    value="{{ old('instagram_url', $setting->instagram_url) }}"
                                    placeholder="https://instagram.com/...">

                                <div
                                    id="instagramUrlClientError"
                                    class="invalid-feedback"></div>

                                @error('instagram_url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            {{-- YouTube --}}
                            <div class="col-12 col-xl-6">

                                <label
                                    for="youtubeUrl"
                                    class="form-label">
                                    YouTube URL
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="url"
                                    name="youtube_url"
                                    id="youtubeUrl"
                                    class="form-control @error('youtube_url') is-invalid @enderror"
                                    value="{{ old('youtube_url', $setting->youtube_url) }}"
                                    placeholder="https://youtube.com/...">

                                <div
                                    id="youtubeUrlClientError"
                                    class="invalid-feedback"></div>

                                @error('youtube_url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            {{-- WhatsApp --}}
                            <div class="col-12 col-xl-6">

                                <label
                                    for="whatsappUrl"
                                    class="form-label">
                                    WhatsApp URL
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="url"
                                    name="whatsapp_url"
                                    id="whatsappUrl"
                                    class="form-control @error('whatsapp_url') is-invalid @enderror"
                                    value="{{ old('whatsapp_url', $setting->whatsapp_url) }}"
                                    placeholder="https://wa.me/...">

                                <div
                                    id="whatsappUrlClientError"
                                    class="invalid-feedback"></div>

                                @error('whatsapp_url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Hospital Timing --}}
                <div class="card mb-4">

                    <div class="card-body p-4">

                        <div class="mb-4">

                            <h5 class="mb-1">
                                Hospital Timing
                            </h5>

                            <p class="text-secondary mb-0">
                                Manage hospital operating hours.
                            </p>

                        </div>


                        <div class="row g-4">


                            {{-- 24 Hours --}}
                            <div class="col-12">

                                <div class="form-check form-switch">

                                    <input
                                        type="checkbox"
                                        name="is_24_hours"
                                        value="1"
                                        class="form-check-input"
                                        id="is24Hours"
                                        {{ old('is_24_hours', $setting->is_24_hours) ? 'checked' : '' }}>

                                    <label
                                        class="form-check-label"
                                        for="is24Hours">
                                        Hospital is open 24×7
                                    </label>

                                </div>

                            </div>


                            {{-- Opening Time --}}
                            <div class="col-12 col-xl-6">

                                <label
                                    for="openingTime"
                                    class="form-label">
                                    Opening Time

                                    <span
                                        id="openingRequired"
                                        class="text-danger"
                                        style="{{ old('is_24_hours', $setting->is_24_hours) ? 'display:none;' : '' }}">
                                        *
                                    </span>

                                </label>

                                <input
                                    type="time"
                                    name="opening_time"
                                    id="openingTime"
                                    class="form-control @error('opening_time') is-invalid @enderror"
                                    value="{{ old('opening_time', $setting->opening_time) }}"
                                    {{ old('is_24_hours', $setting->is_24_hours) ? 'disabled' : '' }}>

                                <div
                                    id="openingTimeClientError"
                                    class="invalid-feedback"></div>

                                @error('opening_time')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            {{-- Closing Time --}}
                            <div class="col-12 col-xl-6">

                                <label
                                    for="closingTime"
                                    class="form-label">
                                    Closing Time

                                    <span
                                        id="closingRequired"
                                        class="text-danger"
                                        style="{{ old('is_24_hours', $setting->is_24_hours) ? 'display:none;' : '' }}">
                                        *
                                    </span>

                                </label>

                                <input
                                    type="time"
                                    name="closing_time"
                                    id="closingTime"
                                    class="form-control @error('closing_time') is-invalid @enderror"
                                    value="{{ old('closing_time', $setting->closing_time) }}"
                                    {{ old('is_24_hours', $setting->is_24_hours) ? 'disabled' : '' }}>

                                <div
                                    id="closingTimeClientError"
                                    class="invalid-feedback"></div>

                                @error('closing_time')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>

                    </div>

                </div>

                {{-- Save Settings --}}
                <div class="card mb-4">
                    
                    <div class="card-body p-4">
                        
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                            
                            <div>
                                
                                <h5 class="mb-1">
                                    Save Settings
                                </h5>

                                <p class="text-secondary mb-0">
                                    Changes will be applied across the website.
                                </p>

                            </div>

                            <button
                                type="submit"
                                class="btn btn-primary px-4">

                                <span class="material-icons-outlined me-1 align-middle">
                                    save
                                </span>
                                
                                Save Changes

                            </button>

                        </div>
                        
                    </div>
                    
                </div>

            </form>

            {{-- Change Password --}}
            <div class="card mb-4">
            
                <div class="card-body p-4">
            
                    <div class="mb-4">
                        <h5 class="mb-1">
                            Change Password
                        </h5>
            
                        <p class="text-secondary mb-0">
                            Update your admin account password.
                        </p>
                    </div>
            
                    <form
                        action="{{ route('admin.password.change') }}"
                        method="POST"
                        id="changePasswordForm"
                        novalidate>
                        @csrf
            
                        <div class="row g-4">
            
                            {{-- Current Password --}}
                            <div class="col-12 col-xl-4">
            
                                <label for="currentPassword" class="form-label">
                                    Current Password
                                    <span class="text-danger">*</span>
                                </label>
            
                                <input
                                    type="password"
                                    name="current_password"
                                    id="currentPassword"
                                    class="form-control @error('current_password') is-invalid @enderror"
                                    placeholder="Enter current password"
                                    autocomplete="current-password">
            
                                @error('current_password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
            
                            </div>
            
            
                            {{-- New Password --}}
                            <div class="col-12 col-xl-4">
            
                                <label for="newPassword" class="form-label">
                                    New Password
                                    <span class="text-danger">*</span>
                                </label>
            
                                <input
                                    type="password"
                                    name="password"
                                    id="newPassword"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Enter new password"
                                    autocomplete="new-password">
            
                                @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
            
                            </div>
            
            
                            {{-- Confirm Password --}}
                            <div class="col-12 col-xl-4">
            
                                <label for="confirmPassword" class="form-label">
                                    Confirm New Password
                                    <span class="text-danger">*</span>
                                </label>
            
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    id="confirmPassword"
                                    class="form-control"
                                    placeholder="Confirm new password"
                                    autocomplete="new-password">
            
                            </div>
            
            
                            {{-- Button --}}
                            <div class="col-12">
            
                                <div class="d-flex justify-content-end">
            
                                    <button
                                        type="submit"
                                        class="btn btn-primary px-4">
                                        <span class="material-icons-outlined me-1 align-middle">
                                            lock_reset
                                        </span>
            
                                        Update Password
                                    </button>
            
                                </div>
            
                            </div>
            
                        </div>
            
                    </form>
            
                </div>
            
            </div>
        </div>
    </div>
</main>
@endsection


@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const form = document.getElementById('settingsForm');
        
        const hospitalName = document.getElementById('hospitalName');
        const phone = document.getElementById('phone');
        const address = document.getElementById('address');

        const googleMapsUrl = document.getElementById('googleMapsUrl');
        const googleMapsEmbedUrl = document.getElementById('googleMapsEmbedUrl');

        const facebookUrl = document.getElementById('facebookUrl');
        const instagramUrl = document.getElementById('instagramUrl');
        const youtubeUrl = document.getElementById('youtubeUrl');
        const whatsappUrl = document.getElementById('whatsappUrl');

        const is24Hours = document.getElementById('is24Hours');
        const openingTime = document.getElementById('openingTime');
        const closingTime = document.getElementById('closingTime');

        const openingRequired = document.getElementById('openingRequired');
        const closingRequired = document.getElementById('closingRequired');

        const logoInput = document.getElementById('logoInput');
        const logoPreview = document.getElementById('logoPreview');


        function showError(input, errorId, message) {

            input.classList.add('is-invalid');

            const error = document.getElementById(errorId);

            if (error) {
                error.textContent = message;
            }

        }


        function clearError(input, errorId) {

            input.classList.remove('is-invalid');

            const error = document.getElementById(errorId);

            if (error) {
                error.textContent = '';
            }

        }


        function validateRequired(input, errorId, message) {

            if (!input.value.trim()) {

                showError(
                    input,
                    errorId,
                    message
                );

                return false;
            }

            clearError(input, errorId);

            return true;
        }


        function validateUrl(input, errorId, message) {

            if (!input.value.trim()) {

                showError(
                    input,
                    errorId,
                    'This field is required.'
                );

                return false;
            }

            try {

                new URL(input.value.trim());

                clearError(input, errorId);

                return true;

            } catch (error) {

                showError(
                    input,
                    errorId,
                    message
                );

                return false;
            }
        }


        // Phone Only Numbers

        phone.addEventListener('input', function() {

            this.value = this.value
                .replace(/\D/g, '')
                .slice(0, 10);

            clearError(
                phone,
                'phoneClientError'
            );

        });


        // Hospital Name

        hospitalName.addEventListener('input', function() {

            clearError(
                hospitalName,
                'hospitalNameClientError'
            );

        });


        // Address

        address.addEventListener('input', function() {

            clearError(
                address,
                'addressClientError'
            );

        });


        // URL Fields

        const urlFields = [

            {
                input: googleMapsUrl,
                error: 'googleMapsUrlClientError'
            },

            {
                input: googleMapsEmbedUrl,
                error: 'googleMapsEmbedUrlClientError'
            },

            {
                input: facebookUrl,
                error: 'facebookUrlClientError'
            },

            {
                input: instagramUrl,
                error: 'instagramUrlClientError'
            },

            {
                input: youtubeUrl,
                error: 'youtubeUrlClientError'
            },

            {
                input: whatsappUrl,
                error: 'whatsappUrlClientError'
            }

        ];


        urlFields.forEach(function(item) {

            item.input.addEventListener('input', function() {

                clearError(
                    item.input,
                    item.error
                );

            });

        });


        // Hospital Timing

        function updateTimingFields() {

            const is24 = is24Hours.checked;

            openingTime.disabled = is24;
            closingTime.disabled = is24;

            openingTime.required = !is24;
            closingTime.required = !is24;

            if (openingRequired) {
                openingRequired.style.display =
                    is24 ? 'none' : 'inline';
            }

            if (closingRequired) {
                closingRequired.style.display =
                    is24 ? 'none' : 'inline';
            }

            if (is24) {

                clearError(
                    openingTime,
                    'openingTimeClientError'
                );

                clearError(
                    closingTime,
                    'closingTimeClientError'
                );

            }

        }


        is24Hours.addEventListener(
            'change',
            updateTimingFields
        );

        updateTimingFields();


        openingTime.addEventListener('change', function() {

            clearError(
                openingTime,
                'openingTimeClientError'
            );

        });


        closingTime.addEventListener('change', function() {

            clearError(
                closingTime,
                'closingTimeClientError'
            );

        });


        // Logo Preview

        if (logoInput && logoPreview) {

            logoInput.addEventListener('change', function(event) {

                const file = event.target.files[0];

                if (!file) {
                    return;
                }

                const allowedTypes = [
                    'image/jpeg',
                    'image/png',
                    'image/webp'
                ];

                if (!allowedTypes.includes(file.type)) {

                    alert(
                        'Please upload a JPG, JPEG, PNG or WEBP image.'
                    );

                    this.value = '';

                    return;
                }

                if (file.size > 2 * 1024 * 1024) {

                    alert(
                        'Logo size must not exceed 2MB.'
                    );

                    this.value = '';

                    return;
                }

                const reader = new FileReader();

                reader.onload = function(e) {
                    logoPreview.src = e.target.result;
                };

                reader.readAsDataURL(file);

            });

        }


        // Form Submit Validation

        form.addEventListener('submit', function(event) {

            let valid = true;

            if (!validateRequired(
                    hospitalName,
                    'hospitalNameClientError',
                    'Please enter the hospital name.'
                )) {
                valid = false;
            }


            const phoneValue = phone.value.trim();

            if (!phoneValue) {

                showError(
                    phone,
                    'phoneClientError',
                    'Please enter the phone number.'
                );

                valid = false;

            } else if (!/^[6-9][0-9]{9}$/.test(phoneValue)) {

                showError(
                    phone,
                    'phoneClientError',
                    'Please enter a valid 10-digit mobile number.'
                );

                valid = false;

            } else {

                clearError(
                    phone,
                    'phoneClientError'
                );

            }


            if (!validateRequired(
                    address,
                    'addressClientError',
                    'Please enter the hospital address.'
                )) {
                valid = false;
            }


            urlFields.forEach(function(item) {

                if (!validateUrl(
                        item.input,
                        item.error,
                        'Please enter a valid URL.'
                    )) {
                    valid = false;
                }

            });


            if (!is24Hours.checked) {

                if (!openingTime.value) {

                    showError(
                        openingTime,
                        'openingTimeClientError',
                        'Please enter the opening time.'
                    );

                    valid = false;

                }


                if (!closingTime.value) {

                    showError(
                        closingTime,
                        'closingTimeClientError',
                        'Please enter the closing time.'
                    );

                    valid = false;

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

    });
</script>

@endpush