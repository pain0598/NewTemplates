<!DOCTYPE html>
<html lang="en">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layout.head')
    <!-- <style>
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);
    </style> -->
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
