@extends('layouts.app')
@section('content')
<table class="table table-striped table-hover text-center">
    <tr class="table-primary">
   
        <th>Customer Name</th>
        <th>Customer Phone</th>
        <th>Customer NID</th>
       
        
    </tr>
    @foreach($order as $item)
    <tr>
        <td>{{$item->user->name}}</td>
        <td>{{$item->user->phone}}</td>
        <td>{{$item->user->nid}}</td>
       
       
        
    </tr>
   @endforeach
</table>



@endsection