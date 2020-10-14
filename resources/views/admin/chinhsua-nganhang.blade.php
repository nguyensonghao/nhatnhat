@extends('layout-admin')
@section('title', 'Trường Tín | Chỉnh sửa thông tin thanh toán')
@section('title-page', 'Chỉnh sửa thông tin thanh toán')
@section('content')
    <form class="form-setup-noti" id="form-add-mvd" method="post" action="/admin/chinhsua-thong-tin-thanh-toan" enctype="multipart/form-data">
        {{ csrf_field() }}
        <legend>Chỉnh sửa thông tin thanh toán</legend>
        <input type="hidden" name="id" value="{{$payment->id}}"/>
        <div class="form-group">
            <label>Tên ngân hàng<span class="required-text">*</span></label>
            <input type="text" name="name" id="name" class="form-control" value="{{$payment->name}}"/>
        </div>
        <div class="form-group">
            <label>Logo ngân hàng<span class="required-text">*</span></label>
            <input type="file" name="image" id="image" class="form-control" accept="image/x-png,image/gif,image/jpeg"/>
            <img src="/public/uploads/payment_{{$payment->id}}.png?version={{time()}}" height="40px" style="margin-top: 20px;">
        </div>
        <div class="form-group">
            <label>Tên chủ tài khoản<span class="required-text">*</span></label>
            <input type="text" name="owner" id="owner" class="form-control" value="{{$payment->owner}}"/>
        </div>
        <div class="form-group">
            <label>Số tài khoản<span class="required-text">*</span></label>
            <input type="text" name="stk" id="stk" class="form-control" value="{{$payment->stk}}"/>
        </div>
        <div class="form-group">
            <label>Chi nhánh<span class="required-text">*</span></label>
            <input type="text" id="chinhanh" name="chinhanh" class="form-control" value="{{$payment->chinhanh}}"/>
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
