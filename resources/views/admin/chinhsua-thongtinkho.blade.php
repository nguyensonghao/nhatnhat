@extends('layout-admin')
@section('title', 'Trường Tín | Chỉnh sửa thông tin kho')
@section('title-page', 'Chỉnh sửa thông tin kho')
@section('content')
    <form class="form-setup-noti" id="form-add-mvd" method="post" action="/admin/chinhsua-thong-tin-kho">
        {{ csrf_field() }}
        <input type="hidden" name="id" id="id" class="form-control" value="{{$kho->id}}"/>
        <legend>Chỉnh sửa thông tin kho</legend>
        <div class="form-group">
            <label>Tên kho<span class="required-text">*</span></label>
            <input type="text" name="name" id="name" class="form-control" value="{{$kho->name}}"/>
        </div>
        <div class="form-group">
            <label>Email<span class="required-text">*</span></label>
            <input type="email" name="email" id="email" class="form-control" value="{{$kho->email}}"/>
        </div>
        <div class="form-group">
            <label>Phone<span class="required-text">*</span></label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{$kho->phone}}"/>
        </div>
        <div class="form-group">
            <label>Địa chỉ<span class="required-text">*</span></label>
            <textarea id="address" name="address" class="form-control" rows="3">{{$kho->address}}</textarea>
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
