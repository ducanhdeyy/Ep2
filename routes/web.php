<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});


Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    Route::resource('category', CategoryController::class);
    Route::resource('singer', SingerController::class);
    Route::resource('album', AlbumController::class);
    Route::resource('song', SongController::class);
    Route::resource('user', UserController::class);
    Route::resource('transaction', TransactionController::class);
});
Route::resource('login', LoginController::class);
    


