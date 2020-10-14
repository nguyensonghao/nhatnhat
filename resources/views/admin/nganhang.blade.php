@extends('layout-admin')
@section('title', 'Danh sách ngân hàng')
@section('title-page', 'Danh sách ngân hàng')
@section('content')
    @if(count($list))
        <table>
            <thead>
            <tr>
                <td>STT</td>
                <td>Tên</td>
                <td>Chủ tài khoản</td>
                <td>Số tài khoản</td>
                <td>Chi nhánh</td>
                <td>Ảnh</td>
                <td style="width: 160px">Hành động</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($list as $payment)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $payment->name }}</td>
                    <td>{{ $payment->owner }}</td>
                    <td>{{ $payment->stk }}</td>
                    <td>{{ $payment->chinhanh }}</td>
                    <td>
                        <img src="/public/uploads/payment_{{$payment->id}}.png?version={{time()}}" height="40px" style="margin: auto">
                    </td>
                    <td>
                        <a href="/admin/chinhsua-thong-tin-thanh-toan/{{$payment->id}}" class="btn btn-primary btn-small">Chỉnh sửa</a>
                        <a class="btn btn-danger btn-small btn-remove-mvd" href="/admin/xoa-thong-tin-thanh-toan/{{$payment->id}}">Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Không có dữ liệu</p>
    @endif
@endsection
