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
<br><br>
<div class="row mx-5 justify-content-center">
<div class="col-md-6 col-sm-9">
    <div class="title">
    <h2 class="text-center">Registration</h2>
    </div>
<form action="{{route('registration')}}" method="post">
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
<br>
<span class="text-success">Select your role :</span>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="buyer">
  <label class="form-check-label" for="inlineRadio1">User</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="seller">
  <label class="form-check-label" for="inlineRadio2">Shop</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="type" id="inlineRadio3" value="vendor" >
  <label class="form-check-label" for="inlineRadio3">Vendor</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="type" id="inlineRadio3" value="deliveryman" >
  <label class="form-check-label" for="inlineRadio3">Delivery Man</label>
</div>@error('type')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror


<div class="mb-3">
<br>
  <input type="submit" class="form-control btn btn-success" value="SUBMIT">
</div>
</form>
<p class="text-center">Already Have an Account? <a href="{{route('login')}}">Login</a></p>
</div>
</div>
@endsection