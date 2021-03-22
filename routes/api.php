<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// register and login function
Route::post('/register', [Api\AuthController::class, 'register']);
Route::post('/login', [Api\AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/diaries', [Api\DiaryController::class, 'index']);
    Route::post('/diaries', [Api\DiaryController::class, 'store']);
    Route::put('/diaries/{diary}', [Api\DiaryController::class, 'update']);
    Route::delete('/diaries/{diary}', [Api\DiaryController::class, 'destroy']);

    Route::post('/logout', [Api\AuthController::class, 'logout']);
});
