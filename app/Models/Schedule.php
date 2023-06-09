<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'start_date',
    'end_date',
    'schedule_name',
    'user_id',
    ];
    protected $dates = [
    'start_date',
    'end_date',

    ];
    public function user(){
		return $this->belongsTo(User::class);
    }

}
