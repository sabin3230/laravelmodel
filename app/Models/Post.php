<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['p_id','name', 'email', 'message','c_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
