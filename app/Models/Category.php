<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'titel',
        'details',
        'img',
    ];


    public function categorypost(){
        return $this-> hasMany(Post::class,'cat_id','id');
     
         }
}
