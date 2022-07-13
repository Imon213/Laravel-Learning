<?php
$b = $buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(30))->where('type','buyer')->count();
$lb = $buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(60))->where('type','buyer')->count();
$pb = $lb - $b;
$gob = (($b-$pb)*100)/$pb;

$s = $buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(30))->where('type','seller')->count();
$ls = $buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(60))->where('type','seller')->count();
$ps = $ls - $s;
$gos = (($s-$ps)*100)/$ps;

$d = $buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(30))->where('type','deliveryman')->where('status','active')->count();
$ld = $buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(60))->where('type','deliveryman')->where('status','active')->count();
$pd = $ld - $d;
$dos = (($d-$pd)*100)/$pd;

$v = $buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(30))->where('type','vendor')->count();
$lv = $buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(60))->where('type','vendor')->count();
$pv = $lv - $v;
$gov = (($v-$pv)*100)/$pv;
$dman = $buyer->where('type','deliveryman')->where('status','requested');
 ?>
@extends('layouts.app')

@section('content')
<style>
  
    h3{
        font-size: 18px;
    }
    .item{
        font-size:13px;
    }
</style>
<br>
<div class="row">
    @include('inc.sidenav')

    
     <div class="col-md-10">
        <h2>Admin Dashboard</h2>
        <span>Welcome <a href="{{route('profile')}}">{{ session()->get('name') }}</a> to our System</span>
        <br> <br>
    <div class="row d-flex justify-content-center">
    <div class="col-md-2 m-1 card">
            <div class="title">
                <h3 class="text-center text-info">USERS</h3>
            </div>
            <div class="body text-center">
               <h5 class="text-secondary item">Buyer: {{$buyer->where('type','buyer')->count()}}</h5>
               <h5 class="text-success item"> Seller: {{$buyer->where('type','seller')->count()}}</h5>
               <h5 class="item"> Vendor: {{$buyer->where('type','vendor')->count()}}</h5>
               <h5 class="item"> Delivery Man: {{$buyer->where('type','deliveryman')->count()}}</h5>
            </div>
            <div class="card-footer text-center">
                <span>TOTAL</span>
                <h4>{{$buyer->count()}}</h4>
            </div>
        </div>
        <div class="col-md-2 m-1  card">
        <div class="title">
                <h3 class="text-center text-secondary">BUYER</h3>
            </div>
            <div class="body text-center text-success">
               <h5 class="text-success item"> Today: {{$buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(1))->where('type','buyer')->count()}}</h2>
               <h5 class="text-info item"> This Week: {{$buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(7))->where('type','buyer')->count()}}</h2>
               <h5 class="text-primary item"> This year: {{$buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(365))->where('type','buyer')->count()}}</h2>
            </div>
            <div class="card-footer text-primary text-center">
              <h6>LAST 30 DAYS GROWTH RATE</h6>
           
                @if($gob<=0)
                <div class="progress">
               <div class="progress-bar bg-danger" role="progressbar" style="width:{{$gob+200}}%;" 
               aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$gob}}%</div>
               </div>
               @else
               <div class="progress">
               <div class="progress-bar" role="progressbar" style="width:{{$gob}}%;" 
               aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$gob}}%</div>
               </div>
               @endif
         

            </div>
        </div>
        <div class="col-md-2 m-1  card">
        <div class="title">
                <h3 class="text-center text-success">SELLER</h3>
            </div>
            <div class="body text-center">
               <h5 class="text-success item">Today {{$buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(1))->where('type','seller')->count()}}</h2>
               <h5 class="text-info item"> This Week:  {{$buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(7))->where('type','seller')->count()}}</h2>
               <h5 class="text-primary item"> This year:  {{$buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(365))->where('type','seller')->count()}}</h2>
            </div>
            <div class="card-footer text-primary text-center">
              <h6>LAST 30 DAYS GROWTH RATE</h6>
           
                @if($gos<=0)
                <div class="progress">
               <div class="progress-bar bg-danger" role="progressbar" style="width:{{$gos+200}}%;" 
               aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$gos}}%</div>
               </div>
               @else
               <div class="progress">
               <div class="progress-bar" role="progressbar" style="width:{{$gos}}%;" 
               aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$gos}}%</div>
               </div>
               @endif
         

            </div>
        </div>
        <div class="col-md-2 m-1  card">
        <div class="title">
                <h3 class="text-center">DELIVERY MAN</h3>
            </div>
            <div class="body text-center">
            <h5 class="text-success item">Today {{$buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(1))->where('type','deliveryman')->count()}}</h2>
               <h5 class="text-info item"> This Week:  {{$buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(7))->where('type','deliveryman')->count()}}</h2>
               <h5 class="text-primary item"> This year:  {{$buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(365))->where('type','deliveryman')->count()}}</h2>
            </div>
            <div class="card-footer text-primary text-center">
              <h6>LAST 30 DAYS GROWTH RATE</h6>
           
                @if($dos<=0)
                <div class="progress">
               <div class="progress-bar bg-danger" role="progressbar" style="width:{{$dos+200}}%;" 
               aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$dos}}%</div>
               </div>
               @else
               <div class="progress">
               <div class="progress-bar" role="progressbar" style="width:{{$dos}}%;" 
               aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$dos}}%</div>
               </div>
               @endif
         

            </div>
        </div>
        <div class="col-md-2 m-1  card">
        <div class="title">
                <h3 class="text-center">VENDOR</h3>
            </div>
            <div class="body text-center">
            <h5 class="text-success item">Today {{$buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(1))->where('type','vendor')->count()}}</h2>
               <h5 class="text-info item"> This Week:  {{$buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(7))->where('type','vendor')->count()}}</h2>
               <h5 class="text-primary item"> This year:  {{$buyer->where('created_at','>=',\Carbon\Carbon::now()->subDays(365))->where('type','vendor')->count()}}</h2>
            </div>
            <div class="card-footer text-primary text-center">
              <h6>LAST 30 DAYS GROWTH RATE</h6>
           
                @if($gov<=0)
                <div class="progress">
               <div class="progress-bar bg-danger" role="progressbar" style="width:{{$gov+200}}%;" 
               aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$gov}}%</div>
               </div>
               @else
               <div class="progress">
               <div class="progress-bar" role="progressbar" style="width:{{$gov}}%;" 
               aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$gov}}%</div>
               </div>
               @endif
         

            </div>
        </div>
        <div class="col-md-5 m-2  card">
        <div class="title">
                <h3 class="text-center text-info">PRODUCTS</h3>
            </div>
            <div class="body text-center">
               <h5 class="text-seconday"> Total: {{$product->count()}}</h2>
               <h5 class="text-success"> Total Sell: {{$orders->where('status','delivered')->count()}}</h2>
             
            </div>
        </div>
        <div class="col-md-5 m-2  card">
        <div class="title">
                <h3 class="text-center  text-primary">ORDERS</h3>
            </div>
            <div class="body text-center">
               <h6> Pending: {{$orders->where('status','pending')->count()}}</h2>
               <h6 class="text-success">Successful: {{$orders->where('status','delivered')->count()}}</h2>
               <h6  class="text-danger">Failed: {{$orders->where('status','cancel')->count()}}</h2>
             
            </div>
    </div>
     </div>
   <br>
</div>
<h3 class="text-center" id="#dman">Delivery man Request</h3>
<br>
<table class="table table-bordered text-center">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>NID</th>
        <th>Address</th>
        <th>Status</th>
        <th colspan="2">Action</th>
    </tr>
    @foreach($dman as $item)
    
        <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->phone}}</td>
           <td>{{$item->nid}}</td>
           <td>{{$item->address}}</td>
           <td>{{$item->status}}</td>
           <td><a class="btn btn-success" href="/Accept/{{$item->id}}">ACCEPT</a></td>
           <td><button class="btn btn-success">Remove</button></td>
        </tr>
    
    @endforeach
</table>
@endsection