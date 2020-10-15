<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="{{ asset('public/css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="{{ asset('public/libs/jquery-validation/lib/jquery-3.1.1.js') }}"></script>
    <script src="{{ asset('public/libs/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('public/js/admin.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>
    <div class="login-page">
        <form class="form-setup-noti" id="form-login" method="post" action="/admin/login">
            {{ csrf_field() }}
            <div class="logo-container">
                <img src="/public/images/header-logo.png" class="logo"/>
            </div>
            <p class="title">Đăng nhập hệ thống</p>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="email" id="email"/>
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input class="form-control" type="password" name="password" id="password"/>
            </div>
            @if(Session::get('error'))
                <div class="message-error">
                    {{Session::get('error')}}
                </div>
            @endif
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Đăng nhập
                </button>
            </div>
        </form>
    </div>
</body>
</html>
