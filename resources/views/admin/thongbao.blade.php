@extends('layout-admin')
@section('title', 'Thông báo')
@section('title-page', 'Thông báo')
@section('content')
    <form class="form-setup-noti" id="form-setup-noti" method="post" action="/admin/thong-bao">
        {{ csrf_field() }}
        <legend>Cài đặt thông báo cho website</legend>
        <textarea rows="10" name="content" id="content" class="form-control">{{$noti ? $noti->content : ''}}</textarea>
        <div class="mt-20">
            <input type="checkbox" id="show-noti" name="show-noti" {{$noti && $noti->isShow ? 'checked' : ''}}/>
            <label for="show-noti">Hiển thị thông báo</label>
        </div>
        @if(Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        @if(Session::get('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
        @endif
        <button class="btn btn-primary" type="submit">Chỉnh sửa</button>
    </form>
@endsection
