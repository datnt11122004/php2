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
    <form action="{{route('edit-user/'.$user->id)}}" method="post">
        <div class="form-group">
            <label for="name">Tên người dùng</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" value="{{$user->address}}">
        </div>
        <div class="mb-3"></div>
        <input type="submit" value="Update" name="update" class="btn btn-info">
    </form>
@endsection
