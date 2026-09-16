@extends('admin.layout.app')

@section('title', 'Videos')

@section('content')
<main class="main-wrapper">
    <div class="main-content">

<div class="container-fluid">

    {{-- Page Header --}}
    <div class="row">
        <div class="col-12">

            <div class="d-flex align-items-center justify-content-between mb-4">

                <div>
                    <h4 class="mb-1">Videos</h4>

                    <p class="mb-0 text-secondary">
                        Manage all videos displayed on your website.
                    </p>
                </div>

                <div>
                    <a href="{{ route('admin.videos.create') }}"
                       class="btn btn-primary">

                        <i class="material-icons-outlined align-middle me-1">
                            add
                        </i>

                        Add New Video

                    </a>
                </div>

            </div>

        </div>
    </div>


    {{-- Success Message --}}
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show"
             role="alert">

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    {{-- Videos Table --}}
    <div class="card">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table align-middle mb-0">

                    <thead>
                        <tr>

                            

                            <th style="width: 130px;">
                                Thumbnail
                            </th>

                            <th>
                                Video
                            </th>

                            <th>
                                Category
                            </th>

                            <th>
                                Language
                            </th>

                            <th>
                                Duration
                            </th>

                            <th>
                                Order
                            </th>

                            <th>
                                Featured
                            </th>

                            <th>
                                Status
                            </th>

                            <th class="text-end">
                                Action
                            </th>

                        </tr>
                    </thead>

                    <tbody>

                        @forelse($videos as $video)

                            @php
                                $youtubeId = null;

                                if (preg_match(
                                    '/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/|youtube\.com\/shorts\/)([^&?\/]+)/',
                                    $video->youtube_url,
                                    $matches
                                )) {
                                    $youtubeId = $matches[1];
                                }
                            @endphp

                            <tr>

                                


                                {{-- Thumbnail --}}
                                <td>

                                    @if($video->thumbnail)

                                        <img src="{{ asset('storage/' . $video->thumbnail) }}"
                                             alt="{{ $video->title }}"
                                             style="width: 110px; height: 65px; object-fit: cover; border-radius: 8px;">

                                    @elseif($youtubeId)

                                        <img src="https://img.youtube.com/vi/{{ $youtubeId }}/hqdefault.jpg"
                                             alt="{{ $video->title }}"
                                             style="width: 110px; height: 65px; object-fit: cover; border-radius: 8px;">

                                    @else

                                        <div class="bg-light d-flex align-items-center justify-content-center"
                                             style="width: 110px; height: 65px; border-radius: 8px;">

                                            <i class="material-icons-outlined text-secondary">
                                                videocam_off
                                            </i>

                                        </div>

                                    @endif

                                </td>


                                {{-- Video --}}
                                <td>

                                    <div>

                                        <h6 class="mb-1">
                                            {{ $video->title }}
                                        </h6>

                                        @if($video->slug)
                                            <small class="text-secondary">
                                                /{{ $video->slug }}
                                            </small>
                                        @endif

                                        @if($video->description)

                                            <p class="mb-0 mt-1 text-secondary small"
                                               style="max-width: 300px;">

                                                {{ \Illuminate\Support\Str::limit($video->description, 80) }}

                                            </p>

                                        @endif

                                    </div>

                                </td>


                                {{-- Category --}}
                                <td>

                                    @if($video->category)

                                        <span class="badge bg-light text-dark">
                                            {{ $video->category }}
                                        </span>

                                    @else

                                        <span class="text-secondary">
                                            —
                                        </span>

                                    @endif

                                </td>


                                {{-- Language --}}
                                <td>

                                    {{ $video->language ?: '—' }}

                                </td>


                                {{-- Duration --}}
                                <td>

                                    {{ $video->duration ?: '—' }}

                                </td>


                                {{-- Sort Order --}}
                                <td>

                                    {{ $video->sort_order }}

                                </td>


                                {{-- Featured --}}
                                <td>

                                    @if($video->is_featured)

                                        <span class="badge bg-warning text-dark">
                                            Featured
                                        </span>

                                    @else

                                        <span class="text-secondary">
                                            No
                                        </span>

                                    @endif

                                </td>


                                {{-- Status --}}
                                <td>

                                    @if($video->is_active)

                                        <span class="badge bg-success">
                                            Active
                                        </span>

                                    @else

                                        <span class="badge bg-secondary">
                                            Inactive
                                        </span>

                                    @endif

                                </td>


                                {{-- Actions --}}
                                <td class="text-end">

                                    <div class="d-flex justify-content-end gap-1">

                                        {{-- Edit --}}
                                        <a href="{{ route('admin.videos.edit', $video) }}"
                                           class="btn btn-sm btn-light"
                                           title="Edit">

                                            <i class="material-icons-outlined">
                                                edit
                                            </i>

                                        </a>


                                        {{-- Status --}}
                                        <form action="{{ route('admin.videos.status', $video) }}"
                                              method="POST">

                                            @csrf
                                            @method('PATCH')

                                            <button type="submit"
                                                    class="btn btn-sm btn-light"
                                                    title="{{ $video->is_active ? 'Deactivate' : 'Activate' }}">

                                                <i class="material-icons-outlined">

                                                    {{ $video->is_active
                                                        ? 'visibility_off'
                                                        : 'visibility'
                                                    }}

                                                </i>

                                            </button>

                                        </form>


                                        {{-- Delete --}}
                                        <form action="{{ route('admin.videos.destroy', $video) }}"
                                              method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete this video?');">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-sm btn-light text-danger"
                                                    title="Delete">

                                                <i class="material-icons-outlined">
                                                    delete
                                                </i>

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="10"
                                    class="text-center py-5">

                                    <div class="mb-3">

                                        <i class="material-icons-outlined"
                                           style="font-size: 48px;">

                                            videocam_off

                                        </i>

                                    </div>

                                    <h6>
                                        No videos found
                                    </h6>

                                    <p class="text-secondary mb-3">
                                        Add your first video to get started.
                                    </p>

                                    <a href="{{ route('admin.videos.create') }}"
                                       class="btn btn-primary">

                                        <i class="material-icons-outlined align-middle me-1">
                                            add
                                        </i>

                                        Add New Video

                                    </a>

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

@endsection