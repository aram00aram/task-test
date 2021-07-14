<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login_user', [AuthController::class, 'login_user'])->name('login.user');
    Route::get('/register', [AuthController::class, 'registration'])->name('registration');
    Route::post('/register_user', [AuthController::class, 'register_user'])->name('register.user');
});

Route::middleware('auth')->group(function () {

    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/invite', [DashboardController::class, 'invite'])->name('dashboard.invite');
    });

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
