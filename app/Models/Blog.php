<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Blog extends Model
{
    use HasFactory;
     protected $table = "blogs";

     public function post_by(){

        return $this->hasOne(User::class, 'id', 'user_id');
     }
}
