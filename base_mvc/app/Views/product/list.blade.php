@extends('layout.main');
@section('content')
    {{--    @php(var_dump($products))--}}
    {{--    @endphp--}}
    <a href="{{route('add-product')}}" class="btn btn-info">Thêm</a>
    <table class="table">
       <thead>
           <tr>
               <th>#</th>
               <th>Tên sản phẩm</th>
               <th>Giá</th>
               <th>Danh mục</th>
               <th>Thao tác</th>
           </tr>
       </thead>
        <tbody>
        @foreach($products as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->category_name}}</td>
                <td>
                    <a href="{{route('detail-product/'.$item->idProduct)}}" class="btn btn-success">Sửa</a>
                    <a onclick="confirmDelete('{{route('delete-product/'.$item->idProduct)}}')" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
