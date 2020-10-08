<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <script src="{{ asset('libs/jquery-validation/lib/jquery-3.1.1.js') }}"></script>
    <script src="{{ asset('libs/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</head>
<body>
    <div class="login-page">
        <form class="form-setup-noti" id="form-login" method="post" action="/admin/login">
            {{ csrf_field() }}
            <div class="logo-container">
                <img src="/images/header-logo.png" class="logo"/>
            </div>
            <p class="title">Đăng nhập hệ thống</p>
            <div class="form-group">
                <label>Email</label>
                <input class="input" type="email" name="email" id="email"/>
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input class="input" type="password" name="password" id="password"/>
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
