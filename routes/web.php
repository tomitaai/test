<?php

use App\Http\Controllers\ProfileController;//9.43.x~
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TopPageController; //Add
use App\Http\Controllers\PostController; //Add
use App\Http\Controllers\ChildController; //Add
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\MailmasterController;
use App\Http\Controllers\QuestionmasterController;
use App\Http\Controllers\AnswerController;
use App\Models\Post; //Add
use App\Models\Child; //Add
use App\Models\Schedule; //Add
use App\Models\Mailmaster; //Add
use App\Models\Questionmaster; 
use App\Models\Answer; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//post：ダッシュボード表示
///ダッシュボード表示
Route::get('/', [TopPageController::class,'show'])->middleware(['auth'])->name('top');
Route::get('/dashboard', [TopPageController::class,'show'])->middleware(['auth'])->name('dashboard');

//post：一覧表示
Route::get('/posts', [PostController::class,'index'])->middleware(['auth'])->name('post_index');

//post：個別表示
Route::get('/postsshow/{post}',[PostController::class,"show"])->name('post_show');

//post：追加 
Route::get('/postscreate',[PostController::class,"create"])->name('post_create');
Route::post('/posts',[PostController::class,"store"])->name('post_store');

//post：削除 
Route::delete('/post/{post}', [PostController::class,"destroy"])->name('post_destroy');

//post：更新画面
Route::post('/postsedit/{post}',[PostController::class,"edit"])->name('post_edit'); //通常
Route::get('/postsedit/{post}', [PostController::class,"edit"])->name('edit');      //Validationエラーありの場合

//post：更新画面
Route::post('/posts/update',[PostController::class,"update"])->name('post_update');



//child：追加 
Route::get('/childrencreate',[ChildController::class,"create"])->name('child_create');
Route::post('/children',[ChildController::class,"store"])->name('child_store');


//イベント登録
Route::get('/calendar', function () {return view('calendar');});
Route::post('/schedule-add', [ScheduleController::class, 'scheduleAdd'])->name('schedule-add');
Route::post('/schedule-get', [ScheduleController::class, 'scheduleGet'])->name('schedule-get');



//質問リストマスタ
//Route::get('/questionmasterscreate',[QuestionmasterController::class,"create"])->name('questionmasterscreate');
//Route::post('/questionmasters',[QuestionmasterController::class,"store"])->name('questionmastersstore');



//質問の回答
//answer：一覧表示
Route::get('/answers', [AnswerController::class,'index'])->middleware(['auth'])->name('answer_index');

//個別表示
// Route::get('/answersshow/{answer}',[AnswerController::class,"show"])->name('answer_show');

//追加 
Route::get('/answerscreate1',[AnswerController::class,"create1"])->name('answerscreate1');
Route::get('/answerscreate2',[AnswerController::class,"create2"])->name('answerscreate2');
Route::get('/answerscreate3',[AnswerController::class,"create3"])->name('answerscreate3');
Route::get('/answerscreate4',[AnswerController::class,"create4"])->name('answerscreate4');

Route::post('/answers1',[AnswerController::class,"store1"])->name('answersstore1');
Route::post('/answers2',[AnswerController::class,"store2"])->name('answersstore2');
Route::post('/answers3',[AnswerController::class,"store3"])->name('answersstore3');
Route::post('/answers4',[AnswerController::class,"store4"])->name('answersstore4');

//削除 
//Route::delete('/answer/{answer}', [AnswerController::class,"destroy"])->name('answer_destroy');

//更新画面
Route::post('/answersedit/{answer}',[AnswerController::class,"edit"])->name('answer_edit'); //通常
Route::get('/answersedit/{answer}', [AnswerController::class,"edit"])->name('edit');      //Validationエラーありの場合

//更新画面
Route::post('/answers/update',[AnswerController::class,"update"])->name('answer_update');



//メールマスタ
Route::get('/10000', function () {return view('mail.10000');});
Route::get('/10100', function () {return view('mail.10100');});

Route::get('/mailmasterscreate',[MailmasterController::class,"create"])->name('mailmasterscreate');
Route::post('/mailmasters',[MailmasterController::class,"store"])->name('mailmastersstore');


//notification：一覧表示
Route::get('/notifications', [MailmasterController::class,'index'])->middleware(['auth'])->name('notification_index');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
