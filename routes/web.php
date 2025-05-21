<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashoardController;
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

// DashboardController 
Route::get('/Dashboard',[DashoardController::class, 'index'])->name('Dashboard');