@extends('layouts.app')
@section('content')
<br><br>
<div class="container">
    <div class="row-m-2">
        <form action="" class="col-9">
        <div class="form-group">
          <input type="search" name="search" id="" class="form-control" placeholder="customer id"/>
          
          <button class="btn btn-primary">search</button>
</div>
</form>
</div>
</div>

<table class="table table-border">
    <tr>
        <th>id</th>
        <th>product id</th>
        <th>customer id</th>
        <th>unitprice</th>
        <th>totalprice </th>
        <th>servicetype </th>
        <th>orderstatus </th>
        <th>providername </th>
        <th>date</th>
      <!--  <th>status </th> -->
        
    </tr>
    @foreach($orderdetaillist as $orderdetaillist)
    <tr>
        <td>{{$orderdetaillist->id}}</td>
        <td>{{$orderdetaillist->orderid}}</td>
        <td>{{$orderdetaillist->customerid}}</td>
        <td>{{$orderdetaillist->unitprice}}</td>
        <td>{{$orderdetaillist->totalprice}}</td>
        <td>{{$orderdetaillist->servicetype}}</td>
        <td>{{$orderdetaillist->orderstatus}}</td>
        <td>{{$orderdetaillist->providername}}</td>
        <td>{{$orderdetaillist->date}}</td>

        <td><a class="btn btn-success px-3" href="/orderdetailupdate/{{$orderdetaillist->id}}">update</a></td>

        <td><a class="btn btn-danger px-3" href="/customerDelete/{{$orderdetaillist->id}}">Delete</a></td>

        
    
</tr>
@endforeach

</table>
@endsection