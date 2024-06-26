<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\AuthController;

/*
|--------------------------------------------------------------------------
| Front API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(
    ['prefix' => 'auth'],
    function () {
        Route::post('/login', [AuthController::class, 'login'])->name('User.Auth.Login');
        Route::post('/register', [AuthController::class, 'register'])->name('User.Auth.Register');
        Route::post('/forget', [AuthController::class, 'forget'])->name('User.Auth.Forgot');
        Route::post('/reset', [AuthController::class, 'reset'])->name('User.Auth.Reset');
    }
);
