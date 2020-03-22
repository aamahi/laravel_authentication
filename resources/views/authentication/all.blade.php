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
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Category</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
{{--            <th scope="col">PHOTO</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($all as $user)
            <tr>
                <th>{{$user->id}}</th>
                <td>{{$user->category_id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->age}}</td>
{{--                <td>{{$user->id}}</td>--}}
{{--                <td>{{$user->id}}</td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
