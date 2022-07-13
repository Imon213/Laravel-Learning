@extends('layouts.app')
@section('content')
<br>
<div class="row">
 
   
    <div class="col-md-7">
        @if($user->type =='buyer')
        <img class="img-fluid" src="/buyer.jpg" alt="nothing">
        @elseif($user->type == 'seller')
        <img class="img-fluid" src="/seller.webp" alt="nothing">
        @elseif($user->type == 'vendor')
        <img class="img-fluid" src="/vendor.jpg" alt="nothing">
        @elseif($user->type == 'deliveryman')
        <img class="img-fluid" src="/delivery.webp" alt="nothing">
        @endif
    </div>
    <div class="col-md-5 ">
    @if($user->type =='buyer')
        <h2 class="text-center">EDIT CUSTOMER INFORMATION</h2>
      @elseif($user->type =='seller')
      <h2 class="text-center">EDIT SHOP INFORMATION</h2>
      @elseif($user->type =='vendor')
      <h2 class="text-center">EDIT VENDOR INFORMATION</h2>
      @elseif($user->type =='deliveryman')
      <h2 class="text-center">EDIT DELIVERY MAN INFORMATION</h2>
        @endif
       <form action="{{route('details')}}" method="post">
        @csrf
        <div>
        <label for="name">Name</label>
        <input id="name" name="name" type="text" class="form-control" value="{{$user->name}}">
        </div>
        <br>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" class="form-control" value="{{$user->email}}">
        <br>
    
       <label for="phone">Phone</label>
        <input id="pnone" name="phone" type="phone" class="form-control" value="{{$user->phone}}">
        <br>
        <label for="nid">NID</label>
        <input id="nid" name="nid" type="nid" class="form-control" value="{{$user->nid}}">
        <br>
        <label for="address">Address</label>
        <input id="address" name="address" type="address" class="form-control" value="{{$user->address}}">

        <input name="id" type="hidden" class="form-control" value="{{$user->id}}">
        <br>

       <input type="submit" class="form-control btn btn-success " value="EDIT">
       </form>
    </div>
</div>
@endsection