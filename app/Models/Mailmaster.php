<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mailmaster extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'mail_name',
    'title',
    'body',
    ];
}
