<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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

Route::get('/', [HomeController::class,'main'])->name('mainPage');
Route::get('/login',[SessionsController::class,'create'])->name('auth.login');
Route::get('/register',[RegisterController::class,'create'])->name('auth.register');
Route::get('/mainUser',[HomeController::class,'user'])->name('user.index');

Route::post('/register',[RegisterController::class,'store'])->name('auth.store');
Route::post('/login',[SessionsController::class,'store'])->name('auth.store');
Route::get('/logout',[SessionsController::class,'destroy'])->name('auth.destroy');