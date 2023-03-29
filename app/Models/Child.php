<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $fillable = [
        'child_name',
    ];
    
    public function user(){
		return $this->belongsTo(User::class);
    }
    
    public function posts(){
		return $this->belongsToMany(Post::class);
    }


}