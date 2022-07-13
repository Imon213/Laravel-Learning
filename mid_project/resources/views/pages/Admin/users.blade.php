@extends('layouts.app')
@section('content')
<style>
    a{
        margin-left: 30px;
    }
</style>
<div class="">
<ul class="nav justify-content-center my-2">
<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#collapseExample">Buyer</a></li>
<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#collapseExample2">Seller</a></li>
<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#collapseExample3">Vendor</a></li>
<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#collapseExample4">Delivery Man</a></li>
</ul>
</div>
l
<div class="tab-content">
<div class="tab-pane active" id="collapseExample">@include('pages.Admin.buyer')</div>
<div class="tab-pane fade" id="collapseExample2">@include('pages.Admin.seller')</div>
<div class="tab-pane fade" id="collapseExample3">@include('pages.Admin.vendor')</div>
<div class="tab-pane fade" id="collapseExample4">@include('pages.Admin.deliveryman')</div>
</div>



@endsection