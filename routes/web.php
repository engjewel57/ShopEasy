<?php

use App\Http\Controllers\Backend\Admin\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\Admin\Auth\LoginController as AdminLoginController;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


// Admin login route
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/st/login', [AdminLoginController::class, 'login'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'loginPost'])->name('login.post');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => '/', 'as' => 'f.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/new-arrivals', [HomeController::class, 'newArrivals'])->name('arrivals');
    Route::get('/hot-deals', [HomeController::class, 'hotDels'])->name('hot-deals');
    Route::get('/trending', [HomeController::class, 'trending'])->name('trending');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/category', [HomeController::class, 'category'])->name('category');
    Route::get('/card', [HomeController::class, 'card'])->name('card');
});

Route::group(['middleware' => ['auth'],'pixel'=>'as','user'=>'user'], function () {
Route::get('/dashboard', [ProfileController::class, 'index'])->name('dashboard');
});


