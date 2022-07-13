@extends('layouts.app')
@section('content')
<table class="table table-striped table-hover text-center">
    <tr class="table-primary">
        <th>Delivery Man Name</th>
        <th>Delivery Man Phone</th>
        <th> Delivery Man NID</th>
        <th> Order Status</th>
        <th>Action</th>

    </tr>
    @foreach($delivery as $item)
    <tr>
    <td>{{$item->deliveryman->name}}</td>
    <td>{{$item->deliveryman->phone}}</td>
    <td>{{$item->deliveryman->nid}}</td>
        <td>{{$item->status}}</td>
        <td><a class="btn btn-success" href="/DeliveryDetails/{{$item->o_id}}">See More</a></td>
    </tr>
   @endforeach
</table>



@endsection