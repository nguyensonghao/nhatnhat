@extends('layout-admin')
@section('title', 'Trường Tín | Cài đặt thông tin chung')
@section('title-page', 'Thêm vận đơn')
@section('content')
    <form class="form-setup-noti" id="form-add-mvd" method="post" action="/admin/thong-tin-chung">
        {{ csrf_field() }}
        <legend>Cài đặt thông tin chung</legend>
        <div class="form-group">
            <label>Hot Line<span class="required-text">*</span></label>
            <input type="text" name="hotline" id="hotline" class="form-control" value="{{$general && property_exists($general, 'hotline') ? $general->hotline : ''}}"/>
        </div>
        <div class="form-group">
            <label>Email<span class="required-text">*</span></label>
            <input type="email" name="email" id="email" class="form-control" value="{{$general && property_exists($general, 'email') ? $general->email : ''}}"/>
        </div>
        <div class="form-group">
            <label>Facebook<span class="required-text">*</span></label>
            <input type="text" name="facebook" id="facebook" class="form-control" value="{{$general && property_exists($general, 'facebook') ? $general->facebook : ''}}"/>
        </div>
        <div class="form-group">
            <label>Zalo<span class="required-text">*</span></label>
            <input type="text" name="zalo" id="zalo" class="form-control" value="{{$general && property_exists($general, 'zalo') ? $general->zalo : ''}}"/>
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
