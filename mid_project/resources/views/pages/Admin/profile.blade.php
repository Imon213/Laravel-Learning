@extends('layouts.app')
@section('content')
<style>
    .content{
        font-size: 18px;
        color: blue;
    }
    .left{
        border-right: 1px solid gray;
    }
    .alert{
        height: 20px;
    }
</style>
<br>
<div class="row text-center justify-content-center">
    <div class="col-md-6 text-center bg-light left">
    <a href="{{route('profile')}}"><img class="rounded-circle" style="width:200px; height:200px;" src="67386077.jpg" alt=""></a>
       <h3 class="name">{{$user->name}}</h3>
      
       <hr>
       <h4  class="content"> <i class="fa-solid fa-at"></i> {{$user->email}}</h4>
       <hr>
       <h4 class="content"><i class="fa-solid fa-phone"></i></i>  {{$user->phone}}</h4>
       <hr>
       <h4 class="content"> <i class="fa-solid fa-address-card"></i> {{$user->nid}}</h4>
       <hr>
       <h4 class="content"> <i class="fa-solid fa-location-dot"></i> {{$user->address}}</h4>
    
    </div>
    <div class="col-md-6 justify-content-center">
        <h4 class="title">EDIT PROFILE</h4>
        <br>
        <div class="col-md-9 col-sm-4  ms-md-5">
        <form action="{{route('profile')}}" method="post" >
            @csrf
            <input  id="name" type="text" name="name" class="form-control text-center" value="{{$user->name}}" >
            @error('name')
             <span class="text-danger" role="alert">
           {{$message}}
</span>
     @enderror
            
            <br>
            <input  id="name" type="phone" name="phone" class="form-control text-center" value="{{$user->phone}}" >
            @error('phone')
             <span class="text-danger" role="alert">
           {{$message}}
</span>
     @enderror
            <br>
            <input  id="name" type="nid" name="nid" class="form-control text-center" value="{{$user->nid}}" >
            @error('nid')
             <span class="text-danger" role="alert">
           {{$message}}
</span>
     @enderror
            <br>
            <input  id="name" type="address" name="address" class="form-control text-center" value="{{$user->address}}" >
            @error('address')
             <span class="text-danger" role="alert">
           {{$message}}
</span>
     @enderror
            <br>
            <input  id="name" type="password" name="password" class="form-control text-center" value="{{$user->password}}" >
            @error('password')
             <span class="text-danger" role="alert">
           {{$message}}
</span>
     @enderror
            <br>
            <input type="submit" class="btn btn-success form-control" value="EDIT">
        </form>
        </div>
    </div>
</div>
@endsection 