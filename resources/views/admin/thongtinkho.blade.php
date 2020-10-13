@extends('layout-admin')
@section('title', 'Danh sách thông tin kho')
@section('title-page', 'Danh sách thông tin kho')
@section('content')
    @if(count($list))
        <table>
            <thead>
            <tr>
                <td>STT</td>
                <td>Tên</td>
                <td>Email</td>
                <td>Số điện thoại</td>
                <td>Địa chỉ</td>
                <td style="width: 160px">Hành động</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($list as $mvd)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $mvd->name }}</td>
                    <td>{{ $mvd->email }}</td>
                    <td>{{ $mvd->phone }}</td>
                    <td>{{ $mvd->address}}</td>
                    <td>
                        <a href="/admin/chinhsua-thong-tin-kho/{{$mvd->id}}" class="btn btn-primary btn-small">Chỉnh sửa</a>
                        <a class="btn btn-danger btn-small btn-remove-mvd" href="/admin/xoa-thong-tin-kho/{{$mvd->id}}">Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Không có dữ liệu</p>
    @endif
@endsection
