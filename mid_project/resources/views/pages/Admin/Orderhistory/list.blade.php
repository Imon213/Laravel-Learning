@extends('layouts.app')
@section('content')
<table class="table table-striped table-hover text-center">
    <tr class="table-primary">
        <th>Customer Name</th>
        <th>Phone</th>
        <th>NID</th>
        <th>Address</th>
        <th>Status</th>
        <th>Action</th>

    </tr>
    @foreach($order->where('status','delivered') as $item)
    <tr>
        <td>{{$item->user->name}}</td>
        <td>{{$item->user->phone}}</td>
        <td>{{$item->user->nid}}</td>
        <td>{{$item->user->address}}</td>
        <td>{{$item->status}}</td>
        <td><a class="btn btn-success" href="/HistoryDetails/{{$item->o_id}}">Details</a></td>
    </tr>
   @endforeach
</table>



@endsection