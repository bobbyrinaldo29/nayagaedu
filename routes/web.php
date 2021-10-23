<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'guest'], function () {
    Route::view('/', 'welcome');
    Route::view('blog', 'blog')->name('blog');
    Route::view('contact', 'contact')->name('contact');
});

Route::group(['middleware' => 'preventBackHistory'], function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User
Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'preventBackHistory']], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
});

// Admin
Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'preventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});
