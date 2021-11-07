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

Route::view('/', 'welcome');
Route::view('market', 'market')->name('market');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');

Route::group(['middleware' => 'preventBackHistory'], function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin
Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'preventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// User
Auth::routes(['verify' => true]);
Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'preventBackHistory', 'verified']], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
});
