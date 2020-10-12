<html>
<head>
    <meta charset="utf-8">
    <title>Trường Tín | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="{{ asset('public/css/admin.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="{{ asset('public/libs/jquery-validation/lib/jquery-3.1.1.js') }}"></script>
    <script src="{{ asset('public/libs/jquery-validation/jquery.validate.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="{{ asset('public/js/admin.js') }}"></script>
</head>
<body>
<div class="header">
    <img src="/public/images/header-logo.png" class="header-logo"/>
    <div class="header-right">
        <img src="/public/images/admin-avatar.jpg" alt=""/>
        <p class="username">Admin</p>
        <a class="btn-logout" href="/admin/logout">Đăng xuất</a>
    </div>
</div>
<div class="content">
    <div class="menu-left">
        <ul>
            <li class="has-menu-child">
                <a href="/admin">Mã vận đơn</a>
                <ul class="menu-child">
                    <li {!! (Route::is('admin') ? 'class="active"' : '') !!}>
                        <a href="/admin">Danh sách</a>
                    </li>
                    <li {!! (Route::is('themmvd') ? 'class="active"' : '') !!}>
                        <a href="/admin/them-mvd">Thêm</a>
                    </li>
                </ul>
            </li>
            <li {!! (Route::is('chinhsach') ? 'class="active"' : '') !!}>
                <a href="/admin/chinh-sach">Chính sách</a>
            </li>
            <li {!! (Route::is('thongbao') ? 'class="active"' : '') !!}>
                <a href="/admin/thong-bao">Thông báo</a>
            </li>
            <li {!! (Route::is('banggia') ? 'class="active"' : '') !!}>
                <a href="/admin/bang-gia">Bảng giá</a>
            </li>
        </ul>
    </div>
    <div class="content-right">
        <div class="content-right-header">
            <p class="page-title">@yield('title-page')</p>
        </div>
        <div class="content-right-container">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
