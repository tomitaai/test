<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; //これは不要かも
use Illuminate\Http\Request;
use Auth; 

class TopPageController extends Controller
{
    public function show(){
       return view('top');
    }
	
}