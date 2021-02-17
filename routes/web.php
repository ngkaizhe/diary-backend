<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DiaryController;
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


// users view
Route::resource('/users', UserController::class);

// diaries view
Route::resource('diaries', DiaryController::class);
