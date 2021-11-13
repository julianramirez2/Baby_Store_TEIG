<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishListController;

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
Route::get('/login', [SessionsController::class,'create'])->middleware('guest')->name('auth.login');
Route::get('/register', [RegisterController::class,'create'])->middleware('guest')->name('auth.register');
Route::get('/mainUser', [HomeController::class,'user'])->name('user.index');
Route::get('/logout', [SessionsController::class,'destroy'])->middleware('auth')->name('auth.destroy');
Route::get('/admin', [AdminController::class,'index'])->middleware('auth.admin')->name('admin.index');
Route::get('/adminProducts', [ProductsController::class,'index'])->middleware('auth.admin')->name('productsAdmin.index');
Route::get('/products/create', [ProductsController::class,'create'])->middleware('auth.admin')->name('productsAdmin.create');
Route::get('/products/edit/{id}', [ProductsController::class,'edit'])->middleware('auth.admin')->name('productsAdmin.edit');

Route::get('/users', [UsersController::class,'userTable'])->middleware('auth.admin')->name('admin.userTable');
Route::get('/users/create', [UsersController::class,'create'])->middleware('auth.admin')->name('admin.create');
Route::get('/users/edit/{id}', [UsersController::class,'edit'])->middleware('auth.admin')->name('admin.edit');

Route::get('/cart', [CartController::class,'index'])->name('cart.index');
Route::get('/cart/add/{id}', [CartController::class,'add'])->name('cart.add');
Route::get('/cart/remove', [CartController::class,'removeAll'])->name('cart.remove');

Route::get('/cart/pdf', [CartController::class,'pdf'])->name('cart.pdf');
Route::get('/order/pdf', [OrdersController::class,'orderPDF'])->name('order.pdf');

Route::post('/register', [RegisterController::class,'store'])->name('auth.store');
Route::post('/login', [SessionsController::class,'store'])->name('auth.store');
Route::post('/products/create', [ProductsController::class,'store'])->middleware('auth.admin')->name('productsAdmin.store');
Route::post('/products/edit/{id}', [ProductsController::class,'update'])->middleware('auth.admin')->name('productsAdmin.update');
Route::delete('/products/delete/{id}', [ProductsController::class,'destroy'])->name('productsAdmin.destroy');

Route::post('/users/create', [UsersController::class,'store'])->middleware('auth.admin')->name('admin.store');
Route::post('/users/edit/{id}', [UsersController::class,'update'])->middleware('auth.admin')->name('admin.update');
Route::delete('/users/delete/{id}', [UsersController::class,'destroy'])->name('admin.destroy');

Route::get('/products', [ProductsController::class,'userSearch'])->name('user.products');
Route::get('/products/ord', [ProductsController::class,'orderByName'])->name('user.productsOrd');

Route::get('/checkout', [CartController::class,'checkout'])->name('cart.checkout');
Route::get('/order/show', [OrdersController::class,'show'])->name('order.showOrder');
