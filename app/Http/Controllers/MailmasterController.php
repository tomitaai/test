<?php

namespace App\Http\Controllers;

use App\Models\Mailmaster;
use Illuminate\Http\Request;
use Validator;
use Auth;

class MailmasterController extends Controller
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
        return view('mailmasterscreate');
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
         'mail_name' => 'required',
         'title' => 'required',
         'body' => 'required',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    //以下に登録処理を記述（Eloquentモデル）
	  // Eloquentモデル
	  $mailmasters = new Mailmaster;

        $mailmasters->mail_name = $request->mail_name;
        $mailmasters->title = $request->title;
        $mailmasters->body = $request->body;
        $mailmasters->save(); 
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
