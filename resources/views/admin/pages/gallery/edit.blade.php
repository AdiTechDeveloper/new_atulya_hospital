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
                        <p class="text-muted mb-0">Modify category, file, or description details.</p>
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
                        <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                {{-- Category Name --}}
                                <div class="col-md-6 mb-3">
                                    <label for="category_name" class="form-label fw-bold">Category Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="category_name" name="category_name"
                                        value="{{ old('category_name', $gallery->category_name) }}" list="categoryOptions"
                                        required>
                                    <datalist id="categoryOptions">
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat }}">
                                        @endforeach
                                    </datalist>
                                </div>

                                {{-- Media Type Selector --}}
                                <div class="col-md-6 mb-3">
                                    <label for="media_type" class="form-label fw-bold">Media Type <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="media_type" name="media_type" required
                                        onchange="toggleMediaTypeInputs()">
                                        <option value="image"
                                            {{ old('media_type', $gallery->media_type) == 'image' ? 'selected' : '' }}>Image
                                            Upload</option>
                                        <option value="video"
                                            {{ old('media_type', $gallery->media_type) == 'video' ? 'selected' : '' }}>Video
                                            Link (Embed URL)</option>
                                    </select>
                                </div>

                                {{-- Title / Caption --}}
                                <div class="col-md-6 mb-3">
                                    <label for="title" class="form-label fw-bold">Title / Caption</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ old('title', $gallery->title) }}">
                                </div>

                                {{-- Sort Order --}}
                                <div class="col-md-6 mb-3">
                                    <label for="sort_order" class="form-label fw-bold">Sort Order</label>
                                    <input type="number" class="form-control" id="sort_order" name="sort_order"
                                        value="{{ old('sort_order', $gallery->sort_order) }}">
                                </div>

                                {{-- Dynamic Upload Field (Image) --}}
                                <div class="col-md-12 mb-3" id="imageUploadField">
                                    <label for="file" class="form-label fw-bold">Replace Image File</label>
                                    @if ($gallery->media_type === 'image' && $gallery->file_path)
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $gallery->file_path) }}" alt="Current Image"
                                                class="rounded" style="width: 120px; height: 70px; object-fit: cover;">
                                            <div class="small text-muted">Current stored image preview</div>
                                        </div>
                                    @endif
                                    <input type="file" class="form-control" id="file" name="file"
                                        accept="image/*">
                                    <small class="text-muted d-block mt-1">Leave blank to keep the existing image.</small>
                                </div>

                                {{-- Dynamic Video URL Field --}}
                                <div class="col-md-12 mb-3 d-none" id="videoUrlField">
                                    <label for="file_path" class="form-label fw-bold">Video Embed URL <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="file_path" name="file_path"
                                        value="{{ old('file_path', $gallery->media_type === 'video' ? $gallery->file_path : '') }}"
                                        placeholder="https://www.youtube.com/embed/...">
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary px-4">Update Gallery Item</button>
                                <a href="{{ route('admin.gallery.index') }}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

   <script>
    function toggleMediaTypeInputs() {
        const mediaType = document.getElementById('media_type').value;
        const imageField = document.getElementById('imageUploadField');
        const videoField = document.getElementById('videoUrlField');

        if (mediaType === 'video') {
            imageField.style.display = 'none';
            videoField.style.display = 'block';
        } else {
            imageField.style.display = 'block';
            videoField.style.display = 'none';
        }
    }

    // Run on page load and on change
    document.getElementById('media_type').addEventListener('change', toggleMediaTypeInputs);
    document.addEventListener("DOMContentLoaded", toggleMediaTypeInputs);
</script>
@endsection
