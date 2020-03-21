@extends('authentication.authentication')

@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               {{$error}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
    @endif
    <form action="{{route('reg')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="age">age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Enter age" value="{{old('age')}}">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" value="{{old('password')}}">
        </div>
        <div class="form-group">
            <label for="confirm_password">confirm_password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter confirm_password" value="{{old('confirm_password')}}">
        </div>

        <button type="submit" class="btn btn-primary">Signup</button>
    </form>
@endsection
