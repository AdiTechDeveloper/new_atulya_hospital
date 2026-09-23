<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
    @include('admin.partials.css')

    <title>@yield('title', 'Home') | Atulya Hospital</title>

    @stack('styles')

</head>

<body>

    <!-- Header/Navbar -->
    @include('admin.partials.header')
    @include('admin.partials.sidebaar')

    @if(session('success') || session('error'))
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">
        <div
            id="globalToast"
            class="toast align-items-center border-0 shadow-lg {{ session('success') ? 'text-bg-success' : 'text-bg-danger' }}"
            role="alert"
            aria-live="assertive"
            aria-atomic="true"
        >
            <div class="d-flex">
                <div class="toast-body">
                    @if(session('success'))
                        <i class="bi bi-check-circle-fill me-2"></i>
                        {{ session('success') }}
                    @else
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        {{ session('error') }}
                    @endif
                </div>

                <button
                    type="button"
                    class="btn-close btn-close-white me-2 m-auto"
                    data-bs-dismiss="toast"
                    aria-label="Close">
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toastElement = document.getElementById('globalToast');

            if (toastElement) {
                new bootstrap.Toast(toastElement, {
                    delay: 3000
                }).show();
            }
        });
    </script>
@endif
    @yield('content')

    <!-- Footer -->
    @include('admin.partials.footer')


    <!-- Javascript -->
    @include('admin.partials.js')

    @stack('scripts')

</body>

</html>