<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::get('/', [FrontController::class, 'index'])->name('front.home');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::get('/privacy_policy', [FrontController::class, 'privacy_policy'])->name('front.privacy_policy');
Route::get('/terms_of_use', [FrontController::class, 'terms_of_use'])->name('front.terms_of_use');
Route::get('/cookie_policy', [FrontController::class, 'cookie_policy'])->name('front.cookie_policy');
Route::get('/register', [FrontController::class, 'register'])->name('front.register');
Route::get('/login', [FrontController::class, 'login'])->name('front.login');
Route::get('/forget_password', [FrontController::class, 'forget_password'])->name('front.forget_password');
Route::get('/reset_password', [FrontController::class, 'reset_password'])->name('front.reset_password');
