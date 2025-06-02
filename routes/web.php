<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ColorController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\DashoardController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SizeController;
use App\Http\Controllers\admin\StatusController;
use App\Http\Controllers\admin\TaxController;
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

// Color  Controller 
Route::get('/color/create',[ColorController::class,'create'])->name('color.create');
Route::get('/color/index',[ColorController::class,'index'])->name('color.index');
Route::post('/color/store',[ColorController::class,'store'])->name('color.store');
Route::get('/color/edit/{id}',[ColorController::class,'edit'])->name('color.edit');
Route::post('/color/update/{id}',[ColorController::class,'update'])->name('color.update');
Route::post('/color/destroy/{id}',[ColorController::class,'destroy'])->name('color.destroy');

// Product  Controller 
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::get('/product/index',[ProductController::class,'index'])->name('product.index');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::post('/product/destroy/{id}',[ProductController::class,'destroy'])->name('product.destroy');

// Customer  Controller 
Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::get('/customer/index',[CustomerController::class,'index'])->name('customer.index');
Route::post('/customer/store',[CustomerController::class,'store'])->name('customer.store');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');
Route::post('/customer/destroy/{id}',[CustomerController::class,'destroy'])->name('customer.destroy');
// Customer Status Change 
Route::get('/customer/status/{stat_id}', [StatusController::class, 'statusChange'])->name('customer.statuschange');});


// Brand  Controller 
Route::get('/brand/create',[BrandController::class,'create'])->name('brand.create');
Route::get('/brand/index',[BrandController::class,'index'])->name('brand.index');
Route::post('/brand/store',[BrandController::class,'store'])->name('brand.store');
Route::get('/brand/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
Route::post('/brand/update/{id}',[BrandController::class,'update'])->name('brand.update');
Route::post('/brand/destroy/{id}',[BrandController::class,'destroy'])->name('brand.destroy');



// Tax  Controller 
Route::get('/tax/create',[TaxController::class,'create'])->name('tax.create');
Route::get('/tax/index',[TaxController::class,'index'])->name('tax.index');
Route::post('/tax/store',[TaxController::class,'store'])->name('tax.store');
Route::get('/tax/edit/{id}',[TaxController::class,'edit'])->name('tax.edit');
Route::post('/tax/update/{id}',[TaxController::class,'update'])->name('tax.update');
Route::post('/tax/destroy/{id}',[TaxController::class,'destroy'])->name('tax.destroy');