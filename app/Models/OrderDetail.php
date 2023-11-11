<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class OrderDetail extends Model
{
    use HasFactory;
     protected $table = "order_detail";

     public function products(){
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
