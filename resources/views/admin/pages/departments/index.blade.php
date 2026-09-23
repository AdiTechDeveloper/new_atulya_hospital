@extends('admin.layout.app')

@section('title', 'Departments')

@section('content')

<main class="main-wrapper">

    <div class="main-content">

        <div class="container-fluid">

            {{-- =========================================================
                PAGE HEADER
            ========================================================== --}}

            <div class="d-flex align-items-center justify-content-between mb-4">

                <div>

                    <h4 class="mb-1">
                        Departments
                    </h4>

                    <p class="mb-0 text-secondary">
                        Manage hospital departments and their information.
                    </p>

                </div>


                <a
                    href="{{ route('admin.departments.create') }}"
                    class="btn btn-primary d-flex align-items-center gap-2"
                >

                    <span class="material-icons-outlined fs-5">
                        add
                    </span>

                    Add Department

                </a>

            </div>



            {{-- =========================================================
                SUCCESS MESSAGE
            ========================================================== --}}

            <!-- @if(session('success'))

                <div
                    class="alert alert-success alert-dismissible fade show"
                    role="alert"
                >

                    <div class="d-flex align-items-center gap-2">

                        <span class="material-icons-outlined">
                            check_circle
                        </span>

                        <span>
                            {{ session('success') }}
                        </span>

                    </div>


                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>

                </div>

            @endif

 -->

            {{-- =========================================================
                ERROR MESSAGE
            ========================================================== --}}

            @if($errors->any())

                <div
                    class="alert alert-danger alert-dismissible fade show"
                    role="alert"
                >

                    <div class="d-flex align-items-start gap-2">

                        <span class="material-icons-outlined">
                            error_outline
                        </span>

                        <div>

                            <strong>
                                Something went wrong.
                            </strong>

                            <ul class="mb-0 mt-2 ps-3">

                                @foreach($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    </div>


                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>

                </div>

            @endif



            {{-- =========================================================
                DEPARTMENT TABLE
            ========================================================== --}}

            <div class="card">

                <div class="card-body p-4">


                    {{-- Table Header --}}

                    <div class="d-flex align-items-center justify-content-between mb-4">

                        <div>

                            <h5 class="mb-1">
                                All Departments
                            </h5>

                            <p class="text-secondary mb-0">
                                Total {{ $departments->count() }} departments
                            </p>

                        </div>

                    </div>



                    @if($departments->count())


                        <div class="table-responsive">

                            <table class="table align-middle mb-0">

                                <thead>

                                    <tr>

                                        <th>
                                            #
                                        </th>

                                        <th>
                                            Department
                                        </th>

                                        <th>
                                            Doctors
                                        </th>

                                        <th>
                                            Sort Order
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

                                    @foreach($departments as $department)

                                        <tr>


                                            {{-- ID --}}

                                            <td>

                                                <span class="fw-semibold">
                                                    {{ $department->id }}
                                                </span>

                                            </td>



                                            {{-- Department --}}

                                            <td>

                                                <div class="d-flex align-items-center gap-3">


                                                    {{-- Image --}}

                                                    @if($department->image)

                                                        <img
                                                            src="{{ asset('storage/' . $department->image) }}"
                                                            alt="{{ $department->name }}"
                                                            style="
                                                                width:70px;
                                                                height:55px;
                                                                object-fit:cover;
                                                                border-radius:8px;
                                                            "
                                                        >

                                                    @else

                                                        <div
                                                            class="d-flex align-items-center justify-content-center"
                                                            style="
                                                                width:70px;
                                                                height:55px;
                                                                border-radius:8px;
                                                                background:#f1f3f5;
                                                            "
                                                        >

                                                            <span class="material-icons-outlined text-secondary">
                                                                medical_services
                                                            </span>

                                                        </div>

                                                    @endif



                                                    <div>

                                                        <h6 class="mb-1">
                                                            {{ $department->name }}
                                                        </h6>

                                                        @if($department->short_description)

                                                            <small class="text-secondary">

                                                                {{ \Illuminate\Support\Str::limit(
                                                                    $department->short_description,
                                                                    60
                                                                ) }}

                                                            </small>

                                                        @endif

                                                    </div>

                                                </div>

                                            </td>



                                            {{-- Doctors --}}

                                            <td>

                                                @if($department->doctors->count())

                                                    <span class="badge bg-primary-subtle text-primary">

                                                        {{ $department->doctors->count() }}

                                                        {{ $department->doctors->count() == 1 ? 'Doctor' : 'Doctors' }}

                                                    </span>

                                                @else

                                                    <span class="text-secondary">
                                                        No Doctors
                                                    </span>

                                                @endif

                                            </td>



                                            {{-- Sort Order --}}

                                            <td>

                                                <span class="badge bg-light text-dark border">

                                                    {{ $department->sort_order }}

                                                </span>

                                            </td>



                                            {{-- Status --}}

                                            <td>

                                                @if($department->is_active)

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

                                                <div class="d-flex justify-content-end align-items-center gap-2">


                                                    {{-- Edit --}}

                                                    <a
                                                        href="{{ route(
                                                            'admin.departments.edit',
                                                            $department->id
                                                        ) }}"
                                                        class="btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center"
                                                        title="Edit Department"
                                                    >

                                                        <span class="material-icons-outlined fs-6">
                                                            edit
                                                        </span>

                                                    </a>



                                                    {{-- Status --}}

                                                    <form
                                                        action="{{ route(
                                                            'admin.departments.status',
                                                            $department->id
                                                        ) }}"
                                                        method="POST"
                                                        class="d-inline"
                                                    >

                                                        @csrf
                                                        @method('PATCH')

                                                        <button
                                                            type="submit"
                                                            class="btn btn-sm {{ $department->is_active ? 'btn-outline-warning' : 'btn-outline-success' }} d-flex align-items-center justify-content-center"
                                                            title="{{ $department->is_active ? 'Deactivate' : 'Activate' }}"
                                                        >

                                                            <span class="material-icons-outlined fs-6">

                                                                {{ $department->is_active
                                                                    ? 'visibility_off'
                                                                    : 'visibility'
                                                                }}

                                                            </span>

                                                        </button>

                                                    </form>



                                                    {{-- Delete --}}

                                                    <form
                                                        action="{{ route(
                                                            'admin.departments.destroy',
                                                            $department->id
                                                        ) }}"
                                                        method="POST"
                                                        class="d-inline delete-department-form"
                                                    >

                                                        @csrf
                                                        @method('DELETE')

                                                        <button
                                                            type="submit"
                                                            class="btn btn-sm btn-outline-danger d-flex align-items-center justify-content-center"
                                                            title="Delete Department"
                                                        >

                                                            <span class="material-icons-outlined fs-6">
                                                                delete
                                                            </span>

                                                        </button>

                                                    </form>


                                                </div>

                                            </td>


                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>


                    @else


                        {{-- =================================================
                            EMPTY STATE
                        ================================================== --}}

                        <div class="text-center py-5">

                            <div class="mb-3">

                                <span
                                    class="material-icons-outlined text-secondary"
                                    style="font-size:60px;"
                                >
                                    medical_services
                                </span>

                            </div>


                            <h5 class="mb-2">
                                No Departments Found
                            </h5>

                            <p class="text-secondary mb-4">
                                You haven't added any departments yet.
                            </p>


                            <a
                                href="{{ route('admin.departments.create') }}"
                                class="btn btn-primary d-inline-flex align-items-center gap-2"
                            >

                                <span class="material-icons-outlined fs-5">
                                    add
                                </span>

                                Add First Department

                            </a>

                        </div>

                    @endif


                </div>

            </div>


        </div>

    </div>

</main>



{{-- =========================================================
    JAVASCRIPT
========================================================= --}}

@push('scripts')

<script>

document.addEventListener('DOMContentLoaded', function () {

    const deleteForms =
        document.querySelectorAll('.delete-department-form');


    deleteForms.forEach(function (form) {

        form.addEventListener('submit', function (event) {

            const confirmed = confirm(
                'Are you sure you want to delete this department?'
            );

            if (!confirmed) {
                event.preventDefault();
            }

        });

    });

});

</script>

@endpush

@endsection