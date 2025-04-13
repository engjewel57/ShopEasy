<?php

use App\Http\Controllers\Backend\Admin\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::group(['prefix'=>'/','as'=>'f'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    });

Route::group(['middleware' => ['auth'],'pixel'=>'as','user'=>'user'], function () {
Route::get('/admin/dashboard', [ProfileController::class, 'index'])->name('dashboard');
});


