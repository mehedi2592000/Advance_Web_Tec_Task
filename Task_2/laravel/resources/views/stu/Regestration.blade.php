@extends('Layouts.app')
@section('content')


<h2>Regestration From</h2>

<form action="{{route('Regestration')}}" class="form-group" method="post">
    {{csrf_field()}}

    <lable for="" >Name</lable>
        <input type="text" name="name"value="{{old('name')}}"class="form-control"> 
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >phone</lable>
        <input type="text" name="id"value="{{old('id')}}"class="form-control"> 
        @error('id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >Dath of birth</lable>
        <input type="text" name="dob"value="{{old('dob')}}"class="form-control"> 
        @error('dob')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >email</lable>
        <input type="text" name="email"value="{{old('email')}}"class="form-control"> 
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>


    <input type="submit" class="btn btn-primary" value="Add student">
</form>


@endsection