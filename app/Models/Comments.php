<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function posts(){
        return $this->hasOne(Blog::class,'id','blog_id');
    }
}
