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

            @if($errors->any())
            <div class="alert alert-danger border-0">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form
                action="{{ route('admin.settings.update') }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                @method('PUT')

                <div class="card mb-4">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="mb-1">Hospital Information</h5>
                            <p class="text-secondary mb-0">
                                Update your hospital's basic information.
                            </p>
                        </div>

                        <div class="row g-4">

                            <div class="col-12 col-xl-6">
                                <label class="form-label">
                                    Hospital Name
                                </label>

                                <input
                                    type="text"
                                    name="hospital_name"
                                    class="form-control"
                                    value="{{ old('hospital_name', $setting->hospital_name) }}"
                                    required
                                >
                            </div>

                            <div class="col-12 col-xl-6">
                                <label class="form-label">
                                    Phone Number
                                </label>

                                <input
                                    type="text"
                                    name="phone"
                                    class="form-control"
                                    value="{{ old('phone', $setting->phone) }}"
                                >
                            </div>

                            <div class="col-12">
                                <label class="form-label">
                                    Address
                                </label>

                                <textarea
                                    name="address"
                                    class="form-control"
                                    rows="3"
                                >{{ old('address', $setting->address) }}</textarea>
                            </div>

                            <div class="col-12 col-xl-6">
                                <label class="form-label">
                                    Google Maps Link
                                </label>

                                <input
                                    type="url"
                                    name="google_maps_url"
                                    class="form-control"
                                    value="{{ old('google_maps_url', $setting->google_maps_url) }}"
                                    placeholder="https://maps.app.goo.gl/..."
                                >

                                <small class="text-secondary">
                                    Link opened when users click the Google Maps icon.
                                </small>
                            </div>

                            <div class="col-12 col-xl-6">
                                <label class="form-label">
                                    Google Maps Embed URL
                                </label>

                                <input
                                    type="url"
                                    name="google_maps_embed_url"
                                    class="form-control"
                                    value="{{ old('google_maps_embed_url', $setting->google_maps_embed_url) }}"
                                    placeholder="https://www.google.com/maps?q=...&output=embed"
                                >

                                <small class="text-secondary">
                                    URL used to display the map on the Contact page.
                                </small>
                            </div>

                            <div class="col-12 col-xl-6">
                                <label class="form-label">
                                    Hospital Logo
                                </label>

                                <input
                                    type="file"
                                    name="logo"
                                    id="logoInput"
                                    class="form-control"
                                    accept=".jpg,.jpeg,.png,.webp"
                                >

                                <small class="text-secondary">
                                    Leave empty to keep the current logo.
                                </small>
                            </div>

                            <div class="col-12 col-xl-6">
                                <label class="form-label d-block">
                                    Logo Preview
                                </label>

                                <div
                                    class="border rounded p-3 d-flex align-items-center justify-content-center"
                                    style="min-height: 120px;"
                                >
                                    <img
                                        id="logoPreview"
                                        src="{{ str_starts_with($setting->logo ?? '', 'settings/')
                                            ? asset('storage/' . $setting->logo)
                                            : asset($setting->logo ?? 'assets/img/logo/Atulya-logo.png') }}"
                                        alt="Hospital Logo"
                                        style="max-width: 220px; max-height: 90px; object-fit: contain;"
                                    >
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="mb-1">Social Media</h5>
                            <p class="text-secondary mb-0">
                                Update your hospital's social media links.
                            </p>
                        </div>

                        <div class="row g-4">

                            <div class="col-12 col-xl-6">
                                <label class="form-label">
                                    Facebook URL
                                </label>

                                <input
                                    type="url"
                                    name="facebook_url"
                                    class="form-control"
                                    value="{{ old('facebook_url', $setting->facebook_url) }}"
                                    placeholder="https://facebook.com/..."
                                >
                            </div>

                            <div class="col-12 col-xl-6">
                                <label class="form-label">
                                    Instagram URL
                                </label>

                                <input
                                    type="url"
                                    name="instagram_url"
                                    class="form-control"
                                    value="{{ old('instagram_url', $setting->instagram_url) }}"
                                    placeholder="https://instagram.com/..."
                                >
                            </div>

                            <div class="col-12 col-xl-6">
                                <label class="form-label">
                                    YouTube URL
                                </label>

                                <input
                                    type="url"
                                    name="youtube_url"
                                    class="form-control"
                                    value="{{ old('youtube_url', $setting->youtube_url) }}"
                                    placeholder="https://youtube.com/..."
                                >
                            </div>

                            <div class="col-12 col-xl-6">
                                <label class="form-label">
                                    WhatsApp URL
                                </label>

                                <input
                                    type="url"
                                    name="whatsapp_url"
                                    class="form-control"
                                    value="{{ old('whatsapp_url', $setting->whatsapp_url) }}"
                                    placeholder="https://wa.me/..."
                                >
                            </div>

                        </div>

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h5 class="mb-1">Hospital Timing</h5>
                            <p class="text-secondary mb-0">
                                Manage hospital operating hours.
                            </p>
                        </div>

                        <div class="row g-4">

                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input
                                        type="checkbox"
                                        name="is_24_hours"
                                        value="1"
                                        class="form-check-input"
                                        id="is24Hours"
                                        {{ old('is_24_hours', $setting->is_24_hours) ? 'checked' : '' }}
                                    >

                                    <label class="form-check-label" for="is24Hours">
                                        Hospital is open 24×7
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 col-xl-6">
                                <label class="form-label">
                                    Opening Time
                                </label>

                                <input
                                    type="time"
                                    name="opening_time"
                                    id="openingTime"
                                    class="form-control"
                                    value="{{ old('opening_time', $setting->opening_time) }}"
                                    {{ old('is_24_hours', $setting->is_24_hours) ? 'disabled' : '' }}
                                >
                            </div>

                            <div class="col-12 col-xl-6">
                                <label class="form-label">
                                    Closing Time
                                </label>

                                <input
                                    type="time"
                                    name="closing_time"
                                    id="closingTime"
                                    class="form-control"
                                    value="{{ old('closing_time', $setting->closing_time) }}"
                                    {{ old('is_24_hours', $setting->is_24_hours) ? 'disabled' : '' }}
                                >
                            </div>

                        </div>

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body p-4">

                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">

                            <div>
                                <h5 class="mb-1">Save Settings</h5>
                                <p class="text-secondary mb-0">
                                    Changes will be applied across the website.
                                </p>
                            </div>

                            <button
                                type="submit"
                                class="btn btn-primary px-4"
                            >
                                <span class="material-icons-outlined me-1 align-middle">
                                    save
                                </span>
                                Save Changes
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

    const logoInput = document.getElementById('logoInput');
    const logoPreview = document.getElementById('logoPreview');

    if (logoInput && logoPreview) {
        logoInput.addEventListener('change', function (event) {

            const file = event.target.files[0];

            if (!file) {
                return;
            }

            const reader = new FileReader();

            reader.onload = function (e) {
                logoPreview.src = e.target.result;
            };

            reader.readAsDataURL(file);
        });
    }

    const is24Hours = document.getElementById('is24Hours');
    const openingTime = document.getElementById('openingTime');
    const closingTime = document.getElementById('closingTime');

    function updateTimingFields() {
        const disabled = is24Hours.checked;

        openingTime.disabled = disabled;
        closingTime.disabled = disabled;
    }

    if (is24Hours && openingTime && closingTime) {
        is24Hours.addEventListener('change', updateTimingFields);

        updateTimingFields();
    }

});
</script>
@endpush