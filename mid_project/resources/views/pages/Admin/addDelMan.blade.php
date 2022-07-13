@extends('layouts.app')
@section('content')
<style>
.input{
    height: 50px;
}
label{
    color: green;
}
</style>
<br>
<div class="row">
     @include('inc.sidenav')
   <div class="col-md-10">
   <div class="row mx-5 justify-content-center">
<div class="col-md-6 col-sm-9">
    <div class="title">
    <h2 class="text-center">ADD DELIVERY</h2>
    </div>
<form action="{{route('addDel')}}" method="post">
    @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Full Name</label>
  <input type="text" class="form-control input" type="text" name="name" id="exampleFormControlInput1" placeholder="name..........">
</div>
@error('name')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email Address</label>
  <input type="email" class="form-control input" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
</div>
@error('email')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Phone number</label>
  <input type="number" class="form-control input" id="exampleFormControlInput1" name="phone" placeholder="01*********">
</div>
@error('phone')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">NID Number</label>
  <input type="text" class="form-control input" id="exampleFormControlInput1" name="nid" placeholder="420*********">
</div>
@error('nid')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Current Address</label>
  <input type="address" class="form-control input" id="exampleFormControlInput1" name="address" placeholder="house, road, sub-district, district">
</div>
@error('address')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" class="form-control input" id="exampleFormControlInput1" name="password" placeholder="*********">
</div>
@error('password')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror


<div class="mb-3">
  <input type="submit" class="form-control btn btn-success" value="SUBMIT">
</div>
</form>
 </div>
   </div>
</div>
@endsection