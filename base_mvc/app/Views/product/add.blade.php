@extends('layout.main');
@section('content')
    @if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <span>{{$_SESSION['success']}}</span>
    @endif
    <form action="{{route('post-product')}}" method="post">
        <div class="form-group">
            <label for="name">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="category">Danh mục sản phẩm</label>
            <select name="category_id" id="" class="form-control">
                <option value="0">Chọn danh mục</option>
                @foreach($listCategory as $key=>$item )
                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3"></div>
        <input type="submit" value="Add" name="add" class="btn btn-info">
    </form>
@endsection
