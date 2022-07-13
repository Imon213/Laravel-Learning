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
    <h2 class="text-center">Login</h2>
    </div>
<form action="{{route('login')}}" method="post">
    @csrf

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email Address</label>
  <input type="email" class="form-control input" id="exampleFormControlInput1" name="email" value = "<?php if(isset($_COOKIE['email'])) {echo $_COOKIE['email'];} ?>" placeholder="name@example.com">
</div>

@error('email')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" class="form-control input" id="exampleFormControlInput1" value = "<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>" name="password" placeholder="*********">
</div>
@error('password')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror

<input type="checkbox" name="rem" id="r"><label for="r">Remember me</label>
<div class="mb-3">
  <input type="submit" class="form-control btn btn-success" value="Login">
</div>
</form>

<div class="title text-center">
  

<br>
<p class="text-center">Don't have any account? <a href="{{route('registration')}}">Registration</a></p>
</div>
</div>
@endsection