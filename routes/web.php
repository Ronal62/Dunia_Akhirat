<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\category\CategoryController;
use App\Http\Controllers\Product\ProductController;
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

Route::get('/', [LoginController::class, 'login']);

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::get('/category/add', function () {
    return view('category.formadd');
});
Route::get('/product/add', function () {
    return view('product.formadd');
});

Route::resource('/category', CategoryController::class);

Route::get('/product/add', function () {
    return view('product.formadd');
});
Route::resource('/product', ProductController::class);
