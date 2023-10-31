<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Command extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'comment',
        
    ];




    public function commandpost(){
        return $this->belongsTo(Post::class,'post_id');  } 


        public function commanduser(){
            return $this->belongsTo(User::class,'user_id');  } 
        

    




}
