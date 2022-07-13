@extends('layouts.app')
@section('content')
<table class="table table-striped table-hover text-center">
    <tr class="table-primary">
   
        <th>Product Name</th>
        <th>Product Category</th>
        <th>Product Status</th>
        <th>Ordered Quantity</th>
        <th>Total Amount</th>
        <th>Action</th>
        
    </tr>
    @foreach($detail as $item)
    <tr>
        <td>{{$item->order->p_name}}</td>
        <td>{{$item->order->p_type}}</td>
        <td>{{$item->order->status}}</td>
        <td>{{$item->qty}}</td>
        <td>{{$item->totalamount}}</td>
        <td><a href="/downloadPdf/{{$item->o_id}}" class="btn btn-success">Download</a></td>
       
        
    </tr>
   @endforeach
</table>



@endsection