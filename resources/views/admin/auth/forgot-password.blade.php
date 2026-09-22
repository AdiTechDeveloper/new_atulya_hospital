@extends('admin.layout.auth')

@section('title', 'Forgot Password')

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
                            Forgot Password?
                        </h4>

                        <p class="mb-0">
                            Enter your email address and we will send you a password reset link.
                        </p>

                        @if(session('status'))
                            <div class="alert alert-success mt-4">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger mt-4">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <div class="form-body my-4">

                            <form
                                class="row g-3"
                                action="{{ route('admin.password.email') }}"
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
                                        placeholder="Enter your admin email"
                                        required
                                    >

                                </div>

                                <div class="col-12">

                                    <div class="d-grid">

                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            Send Reset Link
                                        </button>

                                    </div>

                                </div>

                                <div class="col-12 text-center">

                                    <a
                                        href="{{ route('admin.login') }}"
                                        class="text-primary text-decoration-none"
                                    >
                                        Back to Login
                                    </a>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

@endsection