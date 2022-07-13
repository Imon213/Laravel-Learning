<?php

namespace App\Models;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Orderdetail extends Model
{
    use HasFactory;
    public function order(){
        return $this->belongsTo(Product::class,'p_id');
    }
}
