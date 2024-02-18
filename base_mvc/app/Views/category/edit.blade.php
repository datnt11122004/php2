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
    <form action="{{route('edit-category/'.$category->id)}}" method="post">
        <div class="form-group">
            <label for="name">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name" value="{{$category->category_name}}">
        </div>
        <div class="mb-3"></div>
        <input type="submit" value="Update" name="update" class="btn btn-info">
    </form>
@endsection
