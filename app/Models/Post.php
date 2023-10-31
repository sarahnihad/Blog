<?php

namespace App\Models;

use App\Models\Command;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'cat_id',
        'titel',
        'thumb',
        'full_img',
        'content',
        'tags',
    ];


    public function postuser(){
        return $this->belongsTo(User::class,'user_id');  }  

        public function postcategory(){
            return $this->belongsTo(Category::class,'cat_id');  }  





          
        
                 public function postcomment(){
                    return $this-> hasMany(Command::class,'post_id','id');
                 
                     }   
                    
                    }
