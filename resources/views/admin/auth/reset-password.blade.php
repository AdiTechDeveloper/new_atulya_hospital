@extends('admin.layout.auth')

@section('title', 'Reset Password')

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
                            Reset Password
                        </h4>

                        <p class="mb-0">
                            Enter your new password below.
                        </p>

                        @if($errors->any())
                            <div class="alert alert-danger mt-4">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <div class="form-body my-4">

                            <form
                                class="row g-3"
                                action="{{ route('admin.password.update') }}"
                                method="POST"
                            >

                                @csrf

                                <input
                                    type="hidden"
                                    name="token"
                                    value="{{ $token }}"
                                >

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
                                        value="{{ old('email', $email) }}"
                                        placeholder="Enter your email"
                                        required
                                    >

                                </div>

                                <div class="col-12">

                                    <label
                                        for="inputPassword"
                                        class="form-label"
                                    >
                                        New Password
                                    </label>

                                    <input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        id="inputPassword"
                                        placeholder="Enter new password"
                                        required
                                    >

                                </div>

                                <div class="col-12">

                                    <label
                                        for="inputPasswordConfirmation"
                                        class="form-label"
                                    >
                                        Confirm Password
                                    </label>

                                    <input
                                        type="password"
                                        name="password_confirmation"
                                        class="form-control"
                                        id="inputPasswordConfirmation"
                                        placeholder="Confirm new password"
                                        required
                                    >

                                </div>

                                <div class="col-12">

                                    <div class="d-grid">

                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            Reset Password
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

</body>

@endsection