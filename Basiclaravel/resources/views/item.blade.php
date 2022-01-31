<br><br>

@extends('layout.App')
@section('content')


<br>
<ul>
@foreach($item as $n)
    <li>{{$n}}</li>
@endforeach
</ul>

@endsection