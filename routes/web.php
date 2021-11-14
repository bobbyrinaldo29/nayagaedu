<?php

use App\Http\Controllers\Admin\BankNameController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PackageController;
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

// Admin
Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'preventBackHistory']], function () {
    // GET
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('bank-setting', [BankNameController::class, 'index'])->name('admin.bankName');
    Route::get('package-setting', [PackageController::class, 'index'])->name('admin.package');

    // POST
    Route::post('bank-setting', [BankNameController::class, 'create'])->name('bankName.create');
    Route::post('package-setting', [PackageController::class, 'create'])->name('package.create');

    // PUT
    Route::put('bank-name/{id}', [BankNameController::class, 'update']);
    Route::put('package-setting/{id}', [PackageController::class, 'update']);

    // Delete
    Route::delete('bank-name/{id}/destroy', [BankNameController::class, 'destroy']);
    Route::delete('package-setting/{id}/destroy', [PackageController::class, 'destroy']);
});

// User
Auth::routes(['verify' => true]);
Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'preventBackHistory', 'verified']], function () {
    // GET
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');

    // SHOW
    Route::get('package', [PackageController::class, 'show'])->name('package');

    // POST
    Route::post('profile', [ProfileController::class, 'create'])->name('profile.create');

    // PUT
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});
