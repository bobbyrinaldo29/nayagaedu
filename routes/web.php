<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BankNameController;
use App\Http\Controllers\Admin\CategoryArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Payment\TransactionController;
use App\Http\Controllers\User\HistoryController;
use App\Http\Controllers\User\MemberController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'aboutBlog'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::group(['middleware' => 'preventBackHistory'], function () {
    Auth::routes();
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/{category}', [HomeController::class, 'show'])->name('blog');

    // Admin
    Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'preventBackHistory']], function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        Route::get('package-setting', [PackageController::class, 'index'])->name('admin.package');
        Route::post('package-setting', [PackageController::class, 'create'])->name('package.create');
        Route::put('package-setting/{id}', [PackageController::class, 'update']);
        Route::delete('package-setting/{id}/destroy', [PackageController::class, 'destroy']);

        Route::get('bank-setting', [BankNameController::class, 'index'])->name('admin.bankName');
        Route::post('bank-setting', [BankNameController::class, 'create'])->name('bankName.create');
        Route::put('bank-name/{id}', [BankNameController::class, 'update']);
        Route::delete('bank-name/{id}/destroy', [BankNameController::class, 'destroy']);

        Route::get('content/categories', [CategoryArticleController::class, 'index'])->name('admin.categories');
        Route::post('content/categories', [CategoryArticleController::class, 'create'])->name('categories.create');
        Route::put('content/categories/{id}', [CategoryArticleController::class, 'update']);
        Route::delete('content/categories/{id}/destroy', [CategoryArticleController::class, 'destroy']);

        Route::get('content/articles', [ArticleController::class, 'index'])->name('admin.articles');
        Route::get('content/articles/create', [ArticleController::class, 'create'])->name('articles.create');
        Route::post('content/articles/store', [ArticleController::class, 'store'])->name('articles.store');
    });

    // User
    Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'preventBackHistory', 'verified']], function () {

        // GET
        Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');

        Route::get('package', [PackageController::class, 'show'])->name('package');

        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('profile', [ProfileController::class, 'create'])->name('profile.create');
        Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('package/{id}/checkout', [TransactionController::class, 'index']);
        Route::post('package/checkout', [TransactionController::class, 'create'])->name('invoice.create');
        Route::get('package/checkout/{reference}', [TransactionController::class, 'show'])->name('invoice.show');

        Route::get('history', [HistoryController::class, 'index'])->name('history');
        Route::get('history/invoice/{id}', [HistoryController::class, 'show'])->name('history.invoice');

        Route::get('members', [MemberController::class, 'index'])->name('members');
    });
});
