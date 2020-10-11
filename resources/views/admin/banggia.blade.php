@extends('layout-admin')
@section('title', 'Bảng giá')
@section('title-page', 'Bảng giá')
@section('content')
    <form class="form-setup-noti" id="form-update-banggia" method="post" action="/admin/bang-gia">
        {{ csrf_field() }}
        <legend>Chỉnh sửa bảng giá cho website</legend>
        <textarea rows="10" class="input mt-20" name="content" id="content">{{$content}}</textarea>
        @if(Session::get('success'))
            <div class="message-success">
                {{Session::get('success')}}
            </div>
        @endif
        @if(Session::get('error'))
            <div class="message-error">
                {{Session::get('error')}}
            </div>
        @endif
        <button class="btn btn-primary" type="submit">Chỉnh sửa</button>
    </form>
@endsection
