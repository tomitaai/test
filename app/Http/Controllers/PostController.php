<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Child;
use Illuminate\Http\Request;
use Validator;
use Auth; 

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //自分のuser_idが付与されている投稿だけ取得する
        $posts = Post::where('user_id',Auth::id())->orderBy('shooting_date', 'asc')->paginate(10);
        return view('index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $children = Child::where('user_id',Auth::id())->pluck('child_name', 'id')->toArray();
        return view('postscreate', compact('children'));
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
         'event_name' => 'required',
         'material' => 'required',
         'shooting_date' => 'required',
        //  'pubrequest' => 'required',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    //以下に登録処理を記述（Eloquentモデル）
	  // Eloquentモデル
	  $posts = new Post;
	  
        $original = $request->file('material')->getClientOriginalName();
        $name = date('Ymd_His') . '_' . $original;
        $request->file('material')->move('storage/materials',$name);
        $posts->material = $name;
        
        //送信されたmaterialファイルのmimeTypeを取得する
        $mimetype = $request->file('material')->getClientMimeType();
        if(str_contains($mimetype,'image')) {
              $posts->mimetype = '1';
        }
        if(str_contains($mimetype,'video')) {
              $posts->mimetype = '2';
        }

        $posts->event_name = $request->event_name;
        $posts->shooting_date = $request->shooting_date;
        $posts->pubrequest = $request->pubrequest;
        $posts->user_id = Auth::id();
        $posts->save(); 
        
        $posts->children()->attach($request->children);


        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        
        $children = Post::find($post->id)->children;
        return view('postsshow', compact('children'))
        ->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $children = Child::where('user_id',Auth::id())->pluck('child_name', 'id')->toArray();
        return view('postsedit', compact('children'))
        ->with('post', $post);

        //{posts}id 値を取得 => Post $posts id 値の1レコード取得
        //return view('postsedit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
    
        //バリデーション
    $validator = Validator::make($request->all(), [
         'shooting_date' => 'required',
         'pubrequest' => 'required',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
             return redirect('/postsedit/'.$request->id)
                 ->withInput()
                 ->withErrors($validator);
    }


        
        //データ更新
        $posts = Post::where('user_id',Auth::id())->find($request->id);
        $posts->shooting_date = $request->shooting_date;
        $posts->pubrequest = $request->pubrequest;
        $posts->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();       //追加
        return redirect('/');  //追加
    }
}