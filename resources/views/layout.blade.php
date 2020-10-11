<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    @include('components.header')
    @yield('content')
    @include('components.footer')
    @include('components.modal')
</body>
<script src="{{ asset('libs/jquery-validation/lib/jquery-3.1.1.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</html>
