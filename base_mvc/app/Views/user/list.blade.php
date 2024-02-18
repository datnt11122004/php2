@extends('layout.main');
@section('content')
    {{--    @php(var_dump($products))--}}
    {{--    @endphp--}}
    <a href="{{route('add-user')}}" class="btn btn-info">Thêm</a>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Tên người dùng</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td>
                    <a href="{{route('detail-user/'.$item->id)}}" class="btn btn-success">Sửa</a>
                    <a onclick="confirmDelete('{{route('delete-user/'.$item->id)}}')" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
