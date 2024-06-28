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
        Route::post('/forget', [AuthController::class, 'forget'])->name('User.Auth.Forget');
        Route::post('/reset', [AuthController::class, 'reset'])->name('User.Auth.Reset');
    }
);

Route::group(
    ['prefix' => 'profile'],
    function () {
        Route::get('/details', [AuthController::class, 'profileDetails'])->name('User.Profile.Details');
        Route::patch('/update', [AuthController::class, 'profileUpdate'])->name('User.Profile.Update');
        Route::patch('/update/password', [AuthController::class, 'profileUpdatePassword'])->name('User.Profile.Update.Password');
        Route::get('/logout', [AuthController::class, 'profileLogout'])->name('User.Profile.Logout');
    }
);
