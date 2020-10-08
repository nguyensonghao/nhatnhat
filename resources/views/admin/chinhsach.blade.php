@extends('layout-admin')
@section('title', 'Thông báo')
@section('title-page', 'Thông báo')
@section('content')
    <form class="form-setup-noti">
        <legend>Cài đặt thông báo cho website</legend>
        <textarea rows="10" class="input mt-20"></textarea>
        <div class="mt-20">
            <input type="checkbox" id="show-noti" name="show-noti"/>
            <label for="show-noti">Hiển thị thông báo</label>
        </div>
        <button class="btn btn-primary" type="submit">Chỉnh sửa</button>
    </form>
@endsection
