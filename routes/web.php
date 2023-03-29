<?php

use App\Http\Controllers\ProfileController;//9.43.x~
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController; //Add
use App\Models\Post; //Add
use App\Http\Controllers\TopPageController; //Add
use App\Http\Controllers\ChildController; //Add
use App\Http\Controllers\ScheduleController;
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



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
