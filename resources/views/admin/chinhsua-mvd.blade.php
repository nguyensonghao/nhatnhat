@extends('layout-admin')
@section('title', 'Chỉnh sửa vận đơn')
@section('title-page', 'Chỉnh sửa vận đơn')
@section('content')
    <form class="form-setup-noti" id="form-edit-mvd" method="post" action="/admin/chinhsua-mvd">
        {{ csrf_field() }}
        <legend>Chỉnh sửa mã vận đơn</legend>
        <input type="hidden" name="id" value="{{$mvd->id}}"/>
        <div class="mt-20 mvd-item">
            <div class="form-group">
                <label>Tên chi nhánh<span class="required-text">*</span></label>
                <input name="name" id="name" class="input" value="{{$mvd->name}}"/>
            </div>
            <div class="form-group">
                <label>Link Google Sheet<span class="required-text">*</span></label>
                <input name="link" id="link" class="input" value="{{$mvd->link}}"/>
            </div>
        </div>
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
        <button class="btn btn-primary" type="submit">Cập nhật</button>
    </form>
@endsection
