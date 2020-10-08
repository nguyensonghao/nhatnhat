@extends('layout-admin')
@section('title', 'Thêm vận đơn')
@section('title-page', 'Thêm vận đơn')
@section('content')
    <form class="form-setup-noti" id="form-add-mvd" method="post" action="/admin/them-mvd">
        {{ csrf_field() }}
        <legend>Thêm mã vận đơn</legend>
        <div class="mt-20 mvd-item">
            <div class="form-group">
                <label>Tên chi nhánh<span class="required-text">*</span></label>
                <input name="name" id="name" class="input"/>
            </div>
            <div class="form-group">
                <label>Link Google Sheet<span class="required-text">*</span></label>
                <input name="link" id="link" class="input"/>
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
