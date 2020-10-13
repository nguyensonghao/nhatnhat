@extends('layout-admin')
@section('title', 'Trường Tín | Thêm thông tin kho')
@section('title-page', 'Thêm thông tin kho')
@section('content')
    <form class="form-setup-noti" id="form-add-mvd" method="post" action="/admin/them-thong-tin-kho">
        {{ csrf_field() }}
        <legend>Thêm thông tin kho</legend>
        <div class="form-group">
            <label>Tên kho<span class="required-text">*</span></label>
            <input type="text" name="name" id="name" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Email<span class="required-text">*</span></label>
            <input type="email" name="email" id="email" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Phone<span class="required-text">*</span></label>
            <input type="text" name="phone" id="phone" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Địa chỉ<span class="required-text">*</span></label>
            <textarea id="address" name="address" class="form-control" rows="3"></textarea>
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
        <button class="btn btn-primary" type="submit">Thêm</button>
    </form>
@endsection
