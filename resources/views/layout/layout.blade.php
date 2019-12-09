<!DOCTYPE html>
<html lang="ja">

<head>
    @yield('head')
</head>

<body>
    @yield('header')
    @yield('content')
    @yield('footer')

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>