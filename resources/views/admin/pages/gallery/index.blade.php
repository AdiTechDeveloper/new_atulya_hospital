@extends('admin.layout.app')

@section('title', 'Manage Gallery')

@section('content')
<main class="main-wrapper">
    <div class="main-content">
<div class="container mt-6">
    {{-- Page Header & Add Button --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2>Manage Gallery</h2>
            <p class="text-muted mb-0">Add, edit, or manage hospital photos and videos across categories.</p>
        </div>
        <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Add New Gallery Item
        </a>
    </div>

    {{-- Gallery Data Table Card --}}
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            {{-- <th width="5%">#</th> --}}
                            <th width="15%">Preview</th>
                            <th width="20%">Category</th>
                            <th width="20%">Title</th>
                            {{-- <th width="10%">Type</th> --}}
                            <th width="10%">Status</th>
                            <th width="20%" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Assuming you pass a flat collection of items to the admin index: $galleries = Gallery::all(); --}}
                        @forelse($galleries as $index => $item)
                            <tr>
                                {{-- <td>{{ $index + 1 }}</td> --}}
                                <td>
                                    @if($item->media_type === 'video')
                                        <div class="bg-dark text-white rounded d-flex align-items-center justify-content-center" style="width: 80px; height: 50px;">
                                            <i class="bi bi-play-fill fs-4"></i>
                                        </div>
                                    @else
                                        <img src="{{ asset('storage/' . $item->file_path) }}" 
                                             alt="{{ $item->title }}" 
                                             class="rounded object-fit-cover" 
                                             style="width: 80px; height: 50px;">
                                    @endif
                                </td>
                                <td>
                                    <span class="badge bg-secondary">{{ $item->category_name }}</span>
                                </td>
                                <td>{{ $item->title ?? '—' }}</td>
                                {{-- <td>
                                    <span class="text-uppercase small fw-bold text-muted">{{ $item->media_type }}</span>
                                </td> --}}
                                <td>
                                    <form action="{{ route('admin.gallery.status', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-sm {{ $item->status == 1 ? 'btn-success' : 'btn-outline-secondary' }}">
                                            {{ $item->status == 1 ? 'Active' : 'Inactive' }}
                                        </button>
                                    </form>
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('admin.gallery.edit', $item->id) }}" class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">
                                    No gallery items found. Click "Add New Gallery Item" to get started.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    </div>
</main>

{{-- ================= TOAST NOTIFICATION ================= --}}
@if(session('success') || session('error'))
    <div class="toast-container position-fixed top-0 end-0 p-3"
        style="z-index: 9999;">

        <div id="galleryToast"
            class="toast align-items-center border-0 shadow-lg
            {{ session('success') ? 'text-bg-success' : 'text-bg-danger' }}"
            role="alert"
            aria-live="assertive"
            aria-atomic="true">

            <div class="d-flex">

                <!-- <div class="toast-body">

                    @if(session('success'))
                        <i class="bi bi-check-circle-fill me-2"></i>
                        {{ session('success') }}
                    @else
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        {{ session('error') }}
                    @endif

                </div> -->

                <button type="button"
                    class="btn-close btn-close-white me-2 m-auto"
                    data-bs-dismiss="toast"
                    aria-label="Close">
                </button>

            </div>

        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const toastElement =
                document.getElementById('galleryToast');

            if (toastElement) {

                const toast =
                    new bootstrap.Toast(toastElement, {
                        delay: 3000
                    });

                toast.show();

            }

        });
    </script>
@endif
@endsection