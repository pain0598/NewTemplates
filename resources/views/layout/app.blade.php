<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
    @stack('style')
</head>
<body>
    @include('layout.navbar')
    @yield('content')
    @include('layout.footer')
    @include('layout.script')
    @stack('scripts')
</body>
</html>
