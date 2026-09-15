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

    
    @yield('content')

    <!-- Footer -->
    @include('admin.partials.footer')


    <!-- Javascript -->
    @include('admin.partials.js')

    @stack('scripts')

</body>

</html>