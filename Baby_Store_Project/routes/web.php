<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
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
Route::get('/login',[SessionsController::class,'create'])->middleware('guest')->name('auth.login');
Route::get('/register',[RegisterController::class,'create'])->middleware('guest')->name('auth.register');
Route::get('/mainUser',[HomeController::class,'user'])->name('user.index');
Route::get('/logout',[SessionsController::class,'destroy'])->middleware('auth')->name('auth.destroy');
Route::get('/admin',[AdminController::class,'index'])->middleware('auth.admin')->name('admin.index');


Route::post('/register',[RegisterController::class,'store'])->name('auth.store');
Route::post('/login',[SessionsController::class,'store'])->name('auth.store');
