@extends('layout-admin')
@section('title', 'Chính sách')
@section('title-page', 'Chính sách')
@section('content')
    <form class="form-setup-noti" id="form-update-chinhsach" method="post" action="/admin/chinh-sach">
        {{ csrf_field() }}
        <legend>Chỉnh sửa chính sách cho website</legend>
        <textarea rows="10" class="input mt-20" name="content" id="content">{{$content}}</textarea>
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
