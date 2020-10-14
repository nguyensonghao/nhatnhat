@extends('layout-admin')
@section('title', 'Trường Tín | Thêm thông tin thanh toán')
@section('title-page', 'Thêm thông tin thanh toán')
@section('content')
    <form class="form-setup-noti" id="form-add-mvd" method="post" action="/admin/them-thong-tin-thanh-toan" enctype="multipart/form-data">
        {{ csrf_field() }}
        <legend>Thêm thông tin thanh toán</legend>
        <div class="form-group">
            <label>Tên ngân hàng<span class="required-text">*</span></label>
            <input type="text" name="name" id="name" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Logo ngân hàng<span class="required-text">*</span></label>
            <input type="file" name="image" id="image" class="form-control" accept="image/x-png,image/gif,image/jpeg"/>
        </div>
        <div class="form-group">
            <label>Tên chủ tài khoản<span class="required-text">*</span></label>
            <input type="text" name="owner" id="owner" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Số tài khoản<span class="required-text">*</span></label>
            <input type="text" name="stk" id="stk" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Chi nhánh<span class="required-text">*</span></label>
            <textarea id="chinhanh" name="chinhanh" class="form-control" rows="3"></textarea>
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
