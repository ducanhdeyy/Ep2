<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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


Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('singer', SingerController::class);
    Route::resource('album', AlbumController::class);
    Route::resource('song', SongController::class);
    Route::resource('user', UserController::class);
    Route::resource('transaction', TransactionController::class);
});

Route::get('/login', [AdminController::class,'index'])->name('login');
Route::get('/register',[AdminController::class,'create'])->name('admin.register');
Route::post('/register',[AdminController::class,'store'])->name('admin.store');
Route::post('/login',[AdminController::class,'login'])->name('admin.login');
Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');



