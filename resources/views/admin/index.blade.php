@extends('admin.layout.app')
@section('title', 'Home')
@section('content')

<body>
    <main class="main-wrapper">
        <div class="main-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Dashboard</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Atulya Hospital</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </main>

    <div class="overlay btn-toggle"></div>

</body>

@endsection
