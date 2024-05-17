<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserProductController;

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

Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::get('/loginuser', [AuthController::class,'loginuser'])->name('loginuser');
Route::post('/login', [AuthController::class,'loginAttempt'])->name('login.attempt');
Route::post('/loginuser', [AuthController::class,'loginAttempt2'])->name('login.attempt2');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'registerAttempt'])->name('register.attempt');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/dashboarduser', [DashboardController::class,'index2'])->name('User.dashboard');


Route::get('/staffs', [staffController::class,'index'])->name('staffs');
Route::get('/staffadd',[staffController::class,'create'])->name('staff.create');
Route::post('/staff/store',[staffController::class,'store'])->name('staff.store');
Route::get('/staff/{id}/edit',[staffController::class,'edit'])->name('staff.edit');
Route::post('/staff/{id}/update',[staffController::class,'update'])->name('staff.update');
Route::post('/staffstore',[staffController::class,'store'])->name('staff.store');
Route::get('/staff/{id}/delete',[staffController::class,'delete']);




Route::get('/products',[ProductController::class,'index'])->name('products.index');

Route::get('/productadd',[ProductController::class,'create'])->name('product.create');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('/product/{id}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::post('/product/{id}/update',[ProductController::class,'update']);
Route::post('/productstore',[ProductController::class,'store'])->name('product.store');
Route::get('/product/{id}/delete',[ProductController::class,'delete']);



Route::get('/UserProduct',[UserProductController::class,'index'])->name('UserProducts.index');

Route::get('/settings', function () {
    return view('Admin.Settings.settings');
});
Route::get('/settings2', function () {
    return view('Admin.Settings.settings2');
});
// Route::get('/dashboard', function () {
//     return view('dashboard_layout');
// });
