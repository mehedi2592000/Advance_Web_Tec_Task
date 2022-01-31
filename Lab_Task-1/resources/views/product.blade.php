<br><br>

@extends('layout.App')
@section('content')


<br>
<ul>
@foreach($product as $n)
    <li>{{$n}}</li>
@endforeach
</ul>

@endsection