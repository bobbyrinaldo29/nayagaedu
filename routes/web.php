<?php

use App\Http\Controllers\Admin\BankNameController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\ProfileController;
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
    // GET
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('bank-name', [BankNameController::class, 'index'])->name('admin.bankName');

    // POST
    Route::post('bank-name', [BankNameController::class, 'create']);

    // PUT
    Route::put('bank-name/{id}', [BankNameController::class, 'update']);

    // Delete
    Route::delete('bank-name/{id}/destroy', [BankNameController::class, 'destroy']);
});

// User
Auth::routes(['verify' => true]);
Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'preventBackHistory', 'verified']], function () {
    // GET
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');

    // POST
    Route::post('profile', [ProfileController::class, 'create'])->name('profile.update');
});
