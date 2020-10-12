<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="description">
    <meta name="keywords">
    <meta property="og:type" content="website">
    <meta property="og:url">
    <meta property="og:image">
    <meta property="og:site_name">
    <meta property="og:description">
    <title>@yield('title')</title>
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet">
</head>
<body>
    @include('components.header')
    @yield('content')
    @include('components.footer')
</body>
<script src="{{ asset('public/libs/jquery-validation/lib/jquery-3.1.1.js') }}"></script>
<script src="{{ asset('public/js/app.js') }}"></script>
</html>
