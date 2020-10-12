@extends('layout-admin')
@section('title', 'Danh sách mã vận đơn')
@section('title-page', 'Danh sách mã vận đơn')
@section('content')
    @if(count($list))
        <table>
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Tên</td>
                    <td>Link Google Sheet</td>
                    <td style="width: 160px">Hành động</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $mvd)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $mvd->name }}</td>
                        <td>
                            <a href="{{ $mvd->link }}" target="_blank">
                                {{ $mvd->link }}
                            </a>
                        </td>
                        <td>
                            <a href="/admin/chinhsua-mvd/{{$mvd->id}}" class="btn btn-primary btn-small">Chỉnh sửa</a>
                            <a class="btn btn-danger btn-small btn-remove-mvd" href="/admin/xoa-mvd/{{$mvd->id}}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Không có dữ liệu</p>
    @endif
@endsection
