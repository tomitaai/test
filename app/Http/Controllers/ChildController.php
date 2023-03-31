<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Child;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Validator;
use Illuminate\View\View;
use Auth;



class ChildController extends Controller
{

    public function create()
    {
        return view('childrencreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //バリデーション
    $validator = Validator::make($request->all(), [
         'child_names.*' => 'required',
    ]);
        
        

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    //以下に登録処理を記述（Eloquentモデル）
	  // Eloquentモデル


foreach ($request->child_names as $child_name){
        //インスタンスを作成
        $children = new Child;
        $children->child_name = $child_name;
        $children->user_id = Auth::id();
        $children->save();
}

        //return view('top');
        return redirect(RouteServiceProvider::HOME);

    }

}