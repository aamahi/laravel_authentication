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
{{--            <th scope="col">Category</th>--}}
            <th scope="col">Category Name</th>
            <th scope="col">slug</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($all as $user)
            <tr>
                <th>{{$user->id}}</th>
                <td>{{$user->category_name}}</td>
                <td>{{$user->slug}}</td>
                <td><a href="{{route('show_category',$user->id)}}" class="btn btn-success">Show</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
