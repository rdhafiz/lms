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

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/privacy_policy', [FrontController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/terms_of_use', [FrontController::class, 'terms_of_use'])->name('terms_of_use');
Route::get('/cookie_policy', [FrontController::class, 'cookie_policy'])->name('cookie_policy');
Route::get('/register', [FrontController::class, 'register'])->name('register');
Route::get('/login', [FrontController::class, 'login'])->name('login');
Route::get('/forget_password', [FrontController::class, 'forget_password'])->name('forget_password');
Route::get('/reset_password', [FrontController::class, 'reset_password'])->name('reset_password');
