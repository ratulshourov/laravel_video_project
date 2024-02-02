<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\VideoChatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/calender-event', function () {
    return view('calender-event');
});
Route::get('/front', function () {
    return view('layouts.frontend');
});
Route::post('/save-event', [EventController::class,'saveEvent']);
Route::get('/', [EventController::class, 'index']);
Route::post('/manage-event', [EventController::class, 'manageEvent']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function(){
    Route::get('video_chat', [VideoChatController::class,'index']);
    Route::post('auth/video_chat',[VideoChatController::class,'auth']);
  });