<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Post;
use App\Models\Child;
use Illuminate\Http\Request;
use Validator;
use Auth;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Answer::where('user_id',\Auth::user()->id)->get();//  ??Auth::id());
        return view('answersindex', [
            'answers' => $answers
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create1()
    {
        return view('answerscreate1');
    }

    public function create2()
    {
        return view('answerscreate2');
    }

    public function create3()
    {
        return view('answerscreate3');
    }

    public function create4()
    {
        return view('answerscreate4');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        //バリデーション
    $validator = Validator::make($request->all(), [
        'question' => 'required',
        'answer' => 'required',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    //以下に登録処理を記述（Eloquentモデル）
	  // Eloquentモデル
	  $answers = new Answer;

        $answers->question = $request->question;
        $answers->answer = $request->answer;
        $answers->user_id = Auth::id();
        $answers->save(); 
        return redirect('/answerscreate2');
    }

    public function store2(Request $request)
    {
        //バリデーション
    $validator = Validator::make($request->all(), [
        'question' => 'required',
        'answer' => 'required',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    //以下に登録処理を記述（Eloquentモデル）
	  // Eloquentモデル
	  $answers = new Answer;

        $answers->question = $request->question;
        $answers->answer = $request->answer;
        $answers->user_id = Auth::id();
        $answers->save(); 
        return redirect('/answerscreate3');
    }

    public function store3(Request $request)
    {
        //バリデーション
    $validator = Validator::make($request->all(), [
        'question' => 'required',
        'answer' => 'required',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    //以下に登録処理を記述（Eloquentモデル）
	  // Eloquentモデル
	  $answers = new Answer;

        $answers->question = $request->question;
        $answers->answer = $request->answer;
        $answers->user_id = Auth::id();
        $answers->save(); 
        return redirect('/answerscreate4');
    }

    public function store4(Request $request)
    {
        //バリデーション
    $validator = Validator::make($request->all(), [
        'question' => 'required',
        'answer' => 'required',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    //以下に登録処理を記述（Eloquentモデル）
	  // Eloquentモデル
	  $answers = new Answer;

        $answers->question = $request->question;
        $answers->answer = $request->answer;
        $answers->user_id = Auth::id();
        $answers->save(); 
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        // return view('answersshow', ['answer' => $answer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        return view('answersedit', ['answer' => $answer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
         'question' => 'required',
         'answer' => 'required',
    ]);

    //バリデーション:エラー 
        if ($validator->fails()) {
             return redirect('/answersedit/'.$request->id)
                 ->withInput()
                 ->withErrors($validator);
    }
        
        //データ更新
        $answers = Answer::where('user_id',Auth::id())->find($request->id);
        $answers->question = $request->question;
        $answers->answer = $request->answer;
        $answers->save();
        return redirect('/answers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }
}
