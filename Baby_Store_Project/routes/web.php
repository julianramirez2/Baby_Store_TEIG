<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
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
Route::get('/products',[ProductsController::class,'index'])->middleware('auth.admin')->name('productsAdmin.index');
Route::get('/products/create',[ProductsController::class,'create'])->middleware('auth.admin')->name('productsAdmin.create');
Route::get('/products/edit/{id}',[ProductsController::class,'edit'])->middleware('auth.admin')->name('productsAdmin.edit');

Route::get('/users',[UsersController::class,'index'])->middleware('auth.admin')->name('usersAdmin.index');
Route::get('/users/create',[UsersController::class,'create'])->middleware('auth.admin')->name('usersAdmin.create');
Route::get('/users/edit/{id}',[UsersController::class,'edit'])->middleware('auth.admin')->name('userssAdmin.edit');

Route::post('/register',[RegisterController::class,'store'])->name('auth.store');
Route::post('/login',[SessionsController::class,'store'])->name('auth.store');
Route::post('/products/create',[ProductsController::class,'store'])->middleware('auth.admin')->name('productsAdmin.store');
Route::post('/products/edit/{id}',[ProductsController::class,'update'])->middleware('auth.admin')->name('productsAdmin.update');
Route::delete('/products/delete/{id}',[ProductsController::class,'destroy'])->name('productsAdmin.destroy');

Route::post('/users/create',[UsersController::class,'store'])->middleware('auth.admin')->name('usersAdmin.store');
Route::post('/users/edit/{id}',[UsersController::class,'update'])->middleware('auth.admin')->name('usersAdmin.update');
Route::delete('/users/delete/{id}',[UsersController::class,'destroy'])->name('usersAdmin.destroy');






