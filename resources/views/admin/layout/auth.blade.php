<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
    @include('admin.partials.css')

    <title>@yield('title', 'Login') | Atulya Hospital</title>

    @stack('styles')
</head>

<body>

    @yield('content')

    @include('admin.partials.js')

    @stack('scripts')

</body>

</html>