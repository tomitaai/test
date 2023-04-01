<?php

namespace App\Http\Controllers;

use App\Models\Questionmaster;
use Illuminate\Http\Request;
use Validator;
use Auth;

class QuestionmasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questionmasterscreate');
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
         'question' => 'required',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    //以下に登録処理を記述（Eloquentモデル）
	  // Eloquentモデル
	  $questionmasters = new questionmaster;

        $questionmasters->question = $request->question;
        $questionmasters->save(); 
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mailmaster  $mailmaster
     * @return \Illuminate\Http\Response
     */
    public function show(Mailmaster $mailmaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mailmaster  $mailmaster
     * @return \Illuminate\Http\Response
     */
    public function edit(Mailmaster $mailmaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mailmaster  $mailmaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mailmaster $mailmaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mailmaster  $mailmaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mailmaster $mailmaster)
    {
        //
    }
}