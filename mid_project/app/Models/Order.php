<?php

namespace App\Models;
use App\Models\Orderdetail;
use App\Models\Alluser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

public function user(){
    return $this->belongsTo(Alluser::class,'u_id');
    
}
}