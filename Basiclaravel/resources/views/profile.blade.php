@extends('layout.App')
@section('content')

<h1>Welcome to the part time {{$name}}</h1>

<ul>
@foreach($names as $n)
    <li>{{$n}}</li>
@endforeach
</ul>

@endsection