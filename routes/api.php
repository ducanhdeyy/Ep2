<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\SongController;
use App\Http\Controllers\Client\AlbumController;
use App\Http\Controllers\Client\SingerController;
use App\Http\Controllers\Client\LoginController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:api')->group(function (){
    Route::get('/song', [SongController::class, 'index']);
    Route::get('/singer', [SingerController::class, 'index']);
    Route::get('/album', [AlbumController::class, 'index']);
});

Route::post('/login', [LoginController::class,'login']);
Route::post('/logout', [LoginController::class,'logout']);
