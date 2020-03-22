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
    <form action="{{route('category_add')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="category_name" placeholder="Enter name" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="slug">slug</label>
            <input type="slug" class="form-control" id="slug" name="slug" placeholder="Enter slug" value="{{old('slug')}}">
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
@endsection
