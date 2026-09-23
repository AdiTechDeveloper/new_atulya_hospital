@extends('admin.layout.app')

@section('title', 'Blogs')

@section('content')
<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            {{-- Page Header --}}
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-1">Blogs</h4>
                    <p class="mb-0 text-secondary">
                        Manage all hospital blogs from here.
                    </p>
                </div>

                <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
                    <span class="material-icons-outlined align-middle me-1">
                        add
                    </span>
                    Add New Blog
                </a>
            </div>

            <!-- {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Close"></button>
                </div>
            @endif -->

            {{-- Validation Errors --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Blog List --}}
            <div class="card">
                <div class="card-body p-4">

                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <h5 class="mb-1">All Blogs</h5>
                            <p class="text-secondary mb-0">
                                View and manage your blog posts.
                            </p>
                        </div>

                        <span class="badge bg-primary">
                            {{ $blogs->count() }} Blogs
                        </span>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle mb-0">

                            <thead>
                                <tr>
                                    
                                    <th width="100">Image</th>
                                    <th>Blog</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Published</th>
                                    <th>Sort</th>
                                    <th>Status</th>
                                    <th>Featured</th>
                                    <th width="160">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse($blogs as $blog)

                                    <tr>

                                        {{-- ID --}}
                                       

                                        {{-- Image --}}
                                        <td>
                                            @if($blog->featured_image)
                                                <img
                                                    src="{{ asset('storage/' . $blog->featured_image) }}"
                                                    alt="{{ $blog->title }}"
                                                    style="
                                                        width: 70px;
                                                        height: 50px;
                                                        object-fit: cover;
                                                        border-radius: 8px;
                                                    "
                                                >
                                            @else
                                                <div
                                                    class="bg-light d-flex align-items-center justify-content-center"
                                                    style="
                                                        width: 70px;
                                                        height: 50px;
                                                        border-radius: 8px;
                                                    "
                                                >
                                                    <span class="material-icons-outlined text-secondary">
                                                        image
                                                    </span>
                                                </div>
                                            @endif
                                        </td>

                                        {{-- Blog --}}
                                        <td>
                                            <div>
                                                <h6 class="mb-1">
                                                    {{ $blog->title }}
                                                </h6>

                                                <small class="text-secondary">
                                                    /blog/{{ $blog->slug }}
                                                </small>
                                            </div>
                                        </td>

                                        {{-- Category --}}
                                        <td>
                                            @if($blog->category)
                                                <span class="badge bg-light text-dark">
                                                    {{ $blog->category }}
                                                </span>
                                            @else
                                                <span class="text-secondary">
                                                    —
                                                </span>
                                            @endif
                                        </td>

                                        {{-- Author --}}
                                        <td>
                                            {{ $blog->author ?: '—' }}
                                        </td>

                                        {{-- Published --}}
                                        <td>
                                            @if($blog->published_at)
                                                {{ $blog->published_at->format('d M Y') }}
                                            @else
                                                <span class="text-secondary">
                                                    Not published
                                                </span>
                                            @endif
                                        </td>

                                        {{-- Sort Order --}}
                                        <td>
                                            <span class="badge bg-secondary">
                                                {{ $blog->sort_order }}
                                            </span>
                                        </td>

                                        {{-- Status --}}
                                        <td>
                                            <form
                                                action="{{ route('admin.blogs.status', $blog) }}"
                                                method="POST"
                                            >
                                                @csrf
                                                @method('PATCH')

                                                <button
                                                    type="submit"
                                                    class="btn btn-sm {{ $blog->is_active ? 'btn-success' : 'btn-secondary' }}"
                                                >
                                                    {{ $blog->is_active ? 'Active' : 'Inactive' }}
                                                </button>
                                            </form>
                                        </td>

                                        {{-- Featured --}}
                                        <td>
                                            <form
                                                action="{{ route('admin.blogs.featured', $blog) }}"
                                                method="POST"
                                            >
                                                @csrf
                                                @method('PATCH')

                                                <button
                                                    type="submit"
                                                    class="btn btn-sm {{ $blog->is_featured ? 'btn-warning' : 'btn-light' }}"
                                                >
                                                    <span class="material-icons-outlined align-middle" style="font-size: 17px;">
                                                        {{ $blog->is_featured ? 'star' : 'star_border' }}
                                                    </span>

                                                    {{ $blog->is_featured ? 'Featured' : 'Set Featured' }}
                                                </button>
                                            </form>
                                        </td>

                                        {{-- Actions --}}
                                        <td>
                                            <div class="d-flex align-items-center gap-2">

                                                <a
                                                    href="{{ route('admin.blogs.edit', $blog) }}"
                                                    class="btn btn-sm btn-primary"
                                                    title="Edit"
                                                >
                                                    <span class="material-icons-outlined">
                                                        edit
                                                    </span>
                                                </a>

                                                <form
                                                    action="{{ route('admin.blogs.destroy', $blog) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this blog?');"
                                                >
                                                    @csrf
                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        class="btn btn-sm btn-danger"
                                                        title="Delete"
                                                    >
                                                        <span class="material-icons-outlined">
                                                            delete
                                                        </span>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>

                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="10" class="text-center py-5">

                                            <span
                                                class="material-icons-outlined text-secondary"
                                                style="font-size: 50px;"
                                            >
                                                article
                                            </span>

                                            <h5 class="mt-3 mb-1">
                                                No Blogs Found
                                            </h5>

                                            <p class="text-secondary mb-3">
                                                Start by creating your first blog.
                                            </p>

                                            <a
                                                href="{{ route('admin.blogs.create') }}"
                                                class="btn btn-primary"
                                            >
                                                <span class="material-icons-outlined align-middle me-1">
                                                    add
                                                </span>
                                                Add New Blog
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