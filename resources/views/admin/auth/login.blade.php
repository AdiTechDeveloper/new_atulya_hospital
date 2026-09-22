@extends('admin.layout.auth')

@section('title', 'Admin Login')

@section('content')

<body class="bg-login">

    <div class="container-fluid my-5">
        <div class="row">

            <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">

                <div class="card rounded-4">

                    <div class="card-body p-5">

                        <img
                            src="{{ asset('admin/assets/images/logo1.png') }}"
                            class="mb-4"
                            width="145"
                            alt="Atulya Hospital"
                        >

                        <h4 class="fw-bold">
                            Get Started Now
                        </h4>

                        <p class="mb-0">
                            Enter your credentials to login your account
                        </p>

                        @if(session('status'))
                            <div class="alert alert-success mt-3 mb-0">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger mt-3 mb-0">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger mt-3 mb-0">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <div class="form-body my-4">

                            <form
                                class="row g-3"
                                action="{{ url('/admin/login') }}"
                                method="POST"
                            >

                                @csrf

                                <div class="col-12">

                                    <label
                                        for="inputEmailAddress"
                                        class="form-label"
                                    >
                                        Email
                                    </label>

                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        id="inputEmailAddress"
                                        value="{{ old('email') }}"
                                        placeholder="john@example.com"
                                        required
                                    >

                                </div>

                                <div class="col-12">

                                    <label
                                        for="inputChoosePassword"
                                        class="form-label"
                                    >
                                        Password
                                    </label>

                                    <div
                                        class="input-group"
                                        id="show_hide_password"
                                    >

                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control border-end-0"
                                            id="inputChoosePassword"
                                            placeholder="Enter Password"
                                            required
                                        >

                                        <a
                                            href="javascript:;"
                                            class="input-group-text bg-transparent"
                                        >
                                            <i class="bi bi-eye-slash-fill"></i>
                                        </a>

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="d-flex justify-content-end">

                                        <a
                                            href="{{ route('admin.password.request') }}"
                                            class="text-primary text-decoration-none"
                                        >
                                            Forgot Password?
                                        </a>

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="d-grid">

                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            Login
                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function () {

            $("#show_hide_password a").on('click', function (event) {

                event.preventDefault();

                if ($('#show_hide_password input').attr("type") === "text") {

                    $('#show_hide_password input').attr('type', 'password');

                    $('#show_hide_password i')
                        .addClass("bi-eye-slash-fill")
                        .removeClass("bi-eye-fill");

                } else {

                    $('#show_hide_password input').attr('type', 'text');

                    $('#show_hide_password i')
                        .removeClass("bi-eye-slash-fill")
                        .addClass("bi-eye-fill");

                }

            });

        });
    </script>

</body>

@endsection