<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/logout',[LoginController::class, 'Logout'])->name('user.logout');

Auth::routes(['verify' => true, 'login' => false]);
Route::get('auth')->name('login')->uses([LoginController::class, 'showLoginForm']);
Route::post('auth')->name('login')->uses([LoginController::class, 'login']);

// Route::group(['middleware' => ['verified']], function () {
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware(["verified"]);
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware(["verified"]);
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/website', [HomeController::class, 'website'])->name('website');
Route::get('/manage/subscribe', [HomeController::class, 'manage'])->name('manage.subscribe');
Route::get('/manage/template', [HomeController::class, 'template'])->name('manage.template');
Route::get('/security', [HomeController::class, 'security'])->name('security');
// });

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::post('/subscription', [FormController::class, 'Subscription'])->name('subscribe');
});

Route::get('/form', [FormController::class, 'Register'])->name('form');
Route::post('/details', [FormController::class, 'Details'])->name('details');
