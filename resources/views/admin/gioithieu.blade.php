@extends('layout-admin')
@section('title', 'Giới thiệu')
@section('title-page', 'Giới thiệu')
@section('content')
    <form class="form-setup-noti" id="form-update-chinhsach" method="post" action="/admin/gioi-thieu">
        {{ csrf_field() }}
        <legend>Chỉnh sửa giới thiệu cho website</legend>
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
