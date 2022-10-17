<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['c_id', 'name', 'type', 'method', 'p_id'];

     public function post(){
        return $this->hasOne(Post::class );
    }
}
