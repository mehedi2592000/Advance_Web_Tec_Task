@extends('Layouts.app')
@section('content')


<h2>Login  From</h2>

<form action="{{route('Regestration')}}" class="form-group" method="post">
    {{csrf_field()}}

    <lable for="" >Username</lable>
        <input type="text" name="name"value="{{old('name')}}"class="form-control"> 
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >Password</lable>
        <input type="text" name="id"value="{{old('id')}}"class="form-control"> 
        @error('id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    

    <input type="submit" class="btn btn-primary" value="Add student">
</form>


@endsection