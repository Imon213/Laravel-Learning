<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alluser;
use App\Models\Order;
class Delivery extends Model
{
    use HasFactory;
    public function deliveryman(){
        return $this->belongsTo(Alluser::class,'deliveryman_id');
    }
   
}
