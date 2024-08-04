<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body>
    @include('layout.navbar')
    @yield('content')
    @include('layout.footer')
    @include('layout.script')
</body>
</html>
