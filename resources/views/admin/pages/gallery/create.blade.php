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
            <p class="text-muted mb-0">Upload a hospital photo or add a video link under any category.</p>
        </div>
        <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to List
        </a>
    </div>

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form Card --}}
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    {{-- Category Name (Free-form input with datalist suggestions) --}}
                    <div class="col-md-6 mb-3">
                        <label for="category_name" class="form-label fw-bold">Category Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="category_name" name="category_name" 
                               value="{{ old('category_name') }}" list="categoryOptions" 
                               placeholder="e.g. Infrastructure, ICU, Operation Theatre" required>
                        <datalist id="categoryOptions">
                            @foreach($categories as $cat)
                                <option value="{{ $cat }}">
                            @endforeach
                        </datalist>
                        <small class="text-muted">Type a new category or pick from existing ones.</small>
                    </div>

                    {{-- Media Type Selector --}}
                    <div class="col-md-6 mb-3">
                        <label for="media_type" class="form-label fw-bold">Media Type <span class="text-danger">*</span></label>
                        <select class="form-select" id="media_type" name="media_type" required onchange="toggleMediaTypeInputs()">
                            <option value="image" {{ old('media_type') == 'image' ? 'selected' : '' }}>Image Upload</option>
                            <option value="video" {{ old('media_type') == 'video' ? 'selected' : '' }}>Video Link (Embed URL)</option>
                        </select>
                    </div>

                    {{-- Title / Caption --}}
                    <div class="col-md-6 mb-3">
                        <label for="title" class="form-label fw-bold">Title / Caption</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Optional description">
                    </div>

                    {{-- Sort Order --}}
                    <div class="col-md-6 mb-3">
                        <label for="sort_order" class="form-label fw-bold">Sort Order</label>
                        <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}">
                    </div>

                    {{-- Dynamic Upload Field (Image) --}}
                    <div class="col-md-12 mb-3" id="imageUploadField">
                        <label for="file" class="form-label fw-bold">Upload Image File <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="file" name="file" accept="image/*">
                        <small class="text-muted">Accepted formats: jpeg, png, jpg, webp (Max: 5MB)</small>
                    </div>

                    {{-- Dynamic Video URL Field --}}
                    <div class="col-md-12 mb-3 d-none" id="videoUrlField">
                        <label for="file_path" class="form-label fw-bold">Video Embed URL <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="file_path" name="file_path" value="{{ old('file_path') }}" placeholder="https://www.youtube.com/embed/...">
                        <small class="text-muted">Enter a valid iframe embed link for the video.</small>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary px-4">Save Gallery Item</button>
                    <a href="{{ route('admin.gallery.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
    </div>
</main>
{{-- JavaScript to toggle between Image Upload and Video Link input fields --}}
<script>
    function toggleMediaTypeInputs() {
        const mediaType = document.getElementById('media_type').value;
        const imageField = document.getElementById('imageUploadField');
        const videoField = document.getElementById('videoUrlField');

        if (mediaType === 'video') {
            imageField.classList.add('d-none');
            videoField.classList.remove('d-none');
        } else {
            imageField.classList.remove('d-none');
            videoField.classList.add('d-none');
        }
    }

    // Run on page load in case of old input re-rendering
    document.addEventListener("DOMContentLoaded", function() {
        toggleMediaTypeInputs();
    });
</script>
@endsection