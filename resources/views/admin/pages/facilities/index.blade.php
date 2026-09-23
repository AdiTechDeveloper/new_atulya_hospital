@extends('admin.layout.app')

@section('title', 'Facilities')

@section('content')

<main class="main-wrapper">
    <div class="main-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">

                    <div class="d-flex align-items-center justify-content-between mb-4">

                        <div>
                            <h4 class="mb-1">Facilities</h4>
                            <p class="mb-0 text-secondary">
                                Manage hospital facilities.
                            </p>
                        </div>

                        <div>
                            <a href="{{ route('admin.facilities.create') }}"
                               class="btn btn-primary">

                                <i class="material-icons-outlined align-middle me-1">
                                    add
                                </i>

                                Add Facility
                            </a>
                        </div>

                    </div>

                </div>
            </div>


            <!-- @if(session('success'))

                <div class="row">
                    <div class="col-12">

                        <div class="alert alert-success alert-dismissible fade show"
                             role="alert">

                            {{ session('success') }}

                            <button type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close">
                            </button>

                        </div>

                    </div>
                </div>

            @endif -->


            @if($errors->any())

                <div class="row">
                    <div class="col-12">

                        <div class="alert alert-danger alert-dismissible fade show"
                             role="alert">

                            <strong>Please fix the following errors:</strong>

                            <ul class="mb-0 mt-2">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                            <button type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close">
                            </button>

                        </div>

                    </div>
                </div>

            @endif


            <div class="row">

                <div class="col-12">

                    <div class="card">

                        <div class="card-body p-4">

                            <div class="d-flex align-items-center justify-content-between mb-4">

                                <div>
                                    <h5 class="mb-1">
                                        All Facilities
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Total {{ $facilities->count() }} facilities
                                    </p>
                                </div>

                            </div>


                            <div class="table-responsive">

                                <table class="table align-middle mb-0">

                                    <thead class="table-light">

                                        <tr>
                                            <th width="80">Order</th>
                                            <th width="100">Image</th>
                                            <th>Facility</th>
                                            <th>Slug</th>
                                            <th width="120">Status</th>
                                            <th width="160" class="text-end">
                                                Actions
                                            </th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        @forelse($facilities as $facility)

                                            <tr>

                                                <td>
                                                    <span class="fw-semibold">
                                                        {{ $facility->sort_order }}
                                                    </span>
                                                </td>


                                                <td>

                                                    @if($facility->main_image)

                                                        <img
                                                            src="{{ asset('storage/' . $facility->main_image) }}"
                                                            alt="{{ $facility->title }}"
                                                            width="65"
                                                            height="55"
                                                            class="rounded"
                                                            style="object-fit: cover;"
                                                        >

                                                    @else

                                                        <div
                                                            class="d-flex align-items-center justify-content-center bg-light rounded"
                                                            style="width:65px;height:55px;"
                                                        >
                                                            <i class="material-icons-outlined text-secondary">
                                                                image
                                                            </i>
                                                        </div>

                                                    @endif

                                                </td>


                                                <td>

                                                    <h6 class="mb-1">
                                                        {{ $facility->title }}
                                                    </h6>

                                                    @if($facility->short_description)

                                                        <p class="mb-0 text-secondary small">
                                                            {{ \Illuminate\Support\Str::limit($facility->short_description, 80) }}
                                                        </p>

                                                    @endif

                                                </td>


                                                <td>
                                                    <span class="text-secondary">
                                                        {{ $facility->slug }}
                                                    </span>
                                                </td>


                                                <td>

                                                    @if($facility->is_active)

                                                        <span class="badge bg-success">
                                                            Active
                                                        </span>

                                                    @else

                                                        <span class="badge bg-secondary">
                                                            Inactive
                                                        </span>

                                                    @endif

                                                </td>


                                                <td>

                                                    <div class="d-flex justify-content-end gap-2">

                                                        <a href="{{ route('admin.facilities.edit', $facility) }}"
                                                           class="btn btn-sm btn-outline-primary"
                                                           title="Edit">

                                                            <i class="material-icons-outlined">
                                                                edit
                                                            </i>

                                                        </a>


                                                        <form
                                                            action="{{ route('admin.facilities.status', $facility) }}"
                                                            method="POST"
                                                        >

                                                            @csrf
                                                            @method('PATCH')

                                                            <button
                                                                type="submit"
                                                                class="btn btn-sm btn-outline-warning"
                                                                title="Change Status"
                                                            >

                                                                <i class="material-icons-outlined">
                                                                    {{ $facility->is_active ? 'visibility_off' : 'visibility' }}
                                                                </i>

                                                            </button>

                                                        </form>


                                                        <form
                                                            action="{{ route('admin.facilities.destroy', $facility) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Are you sure you want to delete this facility?');"
                                                        >

                                                            @csrf
                                                            @method('DELETE')

                                                            <button
                                                                type="submit"
                                                                class="btn btn-sm btn-outline-danger"
                                                                title="Delete"
                                                            >

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

                                                <td colspan="6"
                                                    class="text-center py-5">

                                                    <i class="material-icons-outlined text-secondary"
                                                       style="font-size: 50px;">
                                                        domain
                                                    </i>

                                                    <h5 class="mt-3 mb-1">
                                                        No Facilities Found
                                                    </h5>

                                                    <p class="text-secondary mb-3">
                                                        Start by adding your first facility.
                                                    </p>

                                                    <a href="{{ route('admin.facilities.create') }}"
                                                       class="btn btn-primary">

                                                        <i class="material-icons-outlined align-middle me-1">
                                                            add
                                                        </i>

                                                        Add Facility

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

        </div>
    </div>
</main>

@endsection