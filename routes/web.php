<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\DashoardController;
use App\Http\Controllers\admin\SizeController;
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
    return view('welcome');
});

// admin Routes 
// AuthController 
Route::get('/register',[AuthController::class, 'register'])->name('auth.register');
Route::post('/registerauth',[AuthController::class, 'registerauth'])->name('auth.registerauth');
Route::get('/login',[AuthController::class, 'login'])->name('auth.login');
Route::post('/loginauth',[AuthController::class, 'loginauth'])->name('auth.loginauth');

// Middleware route 
Route::middleware('AuthMiddleware')->group(function () {
   // DashboardController 
Route::get('/Dashboard',[DashoardController::class, 'index'])->name('Dashboard'); 

// category Controller 
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::get('/category/index',[CategoryController::class,'index'])->name('category.index');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::post('/category/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');

// Coupon Controller 
Route::get('/Coupon/create',[CouponController::class,'create'])->name('Coupon.create');
Route::get('/Coupon/index',[CouponController::class,'index'])->name('Coupon.index');
Route::post('/Coupon/store',[CouponController::class,'store'])->name('Coupon.store');
Route::get('/Coupon/edit/{id}',[CouponController::class,'edit'])->name('Coupon.edit');
Route::post('/Coupon/update/{id}',[CouponController::class,'update'])->name('Coupon.update');
Route::post('/Coupon/destroy/{id}',[CouponController::class,'destroy'])->name('Coupon.destroy');

// Size  Controller 
Route::get('/size/create',[SizeController::class,'create'])->name('size.create');
Route::get('/size/index',[SizeController::class,'index'])->name('size.index');
Route::post('/size/store',[SizeController::class,'store'])->name('size.store');
Route::get('/size/edit/{id}',[SizeController::class,'edit'])->name('size.edit');
Route::post('/size/update/{id}',[SizeController::class,'update'])->name('size.update');
Route::post('/size/destroy/{id}',[SizeController::class,'destroy'])->name('size.destroy');
});