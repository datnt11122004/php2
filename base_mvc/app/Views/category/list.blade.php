@extends('layout.main');
@section('content')
    {{--    @php(var_dump($products))--}}
    {{--    @endphp--}}
    <a href="{{route('add-category')}}" class="btn btn-info">Thêm</a>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Tên danh mục</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($category as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->category_name}}</td>
                <td>
                    <a href="{{route('detail-category/'.$item->id)}}" class="btn btn-success">Sửa</a>
                    <a onclick="confirmDelete('{{route('delete-category/'.$item->id)}}')" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
