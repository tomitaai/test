<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionmaster extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'question',
    ];
}
