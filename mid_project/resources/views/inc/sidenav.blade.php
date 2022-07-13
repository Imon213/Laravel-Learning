<style>
   .side-nav{
        border: 1px solid black;
        height: 500px;
      
    }
    .nav-icon{
        color: gray;
        margin: 20px 0;
        cursor: pointer;
    }
    .nav-sub-icon{
        font-size:16px;
        margin-left: 20px;
        color: gray;
        cursor: pointer;
    }
</style>

<div class="col-md-2 bg-light side-nav sticky-left p-3">
    <a href="{{route('profile')}}"><img class="rounded-circle" style="width:100px; height:100px;" src="67386077.jpg" alt=""></a>
   <a href="{{route('user')}}"> <h5 class="nav-icon"><i class="fa-solid fa-users"></i>  Users</h5></a>
    <h5 class="nav-icon" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      <i class="fa-solid fa-truck"></i> Delivery</h5>
    <div class="collapse" id="collapseExample">
   <div class="">
<a href="{{route('addDel')}}">
<h5 class="nav-sub-icon"><i class="fa-solid fa-person-circle-plus"></i>  Add Delivery Man</h5>
</a>
  
  <a href="{{route('DeliveryHistory')}}">
  <h5 class="nav-sub-icon" ><i class="fa-solid fa-clock-rotate-left"></i>  History</h5>
  </a>
  <a  href="#dman">
  <h5 class="nav-sub-icon"><i class="fa-solid fa-user-check"></i>  Request</h5>
  </a>
  </div>
  
</div>
<h5 class="nav-icon" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample"><i class="fa-solid fa-cash-register"></i> Orders</h5> 
<div class="collapse" id="collapseExample2">
  <div class="">
  <a href="{{route('order')}}"><h5 class="nav-sub-icon"><i class="fa-solid fa-clipboard-list"></i> Order List</h5></a>
  <a href="{{route('OrderHistory')}}"><h5 class="nav-sub-icon"><i class="fa-solid fa-clock-rotate-left"></i>  History</h5></a>
  </div>
</div>
<h5 class="nav-icon"><i class="fa-solid fa-envelope-open-text"></i>  Support</h5>
<a href="{{route('logout')}}"><h5 class="nav-icon"><i class="fa-solid fa-right-from-bracket"></i>  Logout</h5></a>
  </div>