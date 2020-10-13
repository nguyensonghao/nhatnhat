<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="trường tín, truongtin, logistics, truongtinlogistics, vận chuyển, hàng nhập khẩu">
    <meta name="keywords" content="trường tín, truongtin, logistics, truongtinlogistics, vận chuyển, hàng nhập khẩu">
    <meta property="og:type" content="website">
    <meta property="og:image">
    <meta name="copyright" content="Trường Tín logistics">
    <meta name="author" content="Trường Tín logistics">
    <meta property="og:site_name" content="truongtinlogistics.com">
    <meta property="og:description" content="trường tín, truongtin, logistics, truongtinlogistics, vận chuyển, hàng nhập khẩu">
    <title>@yield('title')</title>
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{ asset('public/css/truongtin.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header-nav">
        @include('components.header-top')
        @include('components.header')
    </header>
    @yield('content')
    @include('components.footer')
</body>
<script src="{{ asset('public/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('public/js/truongtin.js') }}"></script>
</html>
