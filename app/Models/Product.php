<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class Product extends Model
{
    use HasFactory , SoftDeletes;
    protected $table = "products";

    public function reviews(){
        return $this->hasMany(Review::class);
    }

}
