@extends('authentication.authentication')

@section('content')
Categoy Name  : {{$category->category_name}}
<br>
Slug  : {{$category->slug}}
<br>
    <h2>User</h2>
    @foreach($category->registers as $row)

        Name: {{$row->name}}
        <br>
        Email: {{$row->email}}
        <br>
        AGe: {{$row->age}}
        <br>
    @endforeach
@endsection
