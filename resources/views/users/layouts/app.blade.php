<!DOCTYPE html>
<html lang="en">
<head>
    @include('users.layouts.head')
</head>
<body>

    @include('users.layouts.navbar')
        @yield('content')
    @include('users.layouts.footer')

</body>
</html>
