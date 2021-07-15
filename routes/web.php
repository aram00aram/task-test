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
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/invite', [DashboardController::class, 'invite'])->name('dashboard.invite');
    Route::get('/user-add', [AuthController::class, 'add_user'])->name('user-add');
    Route::post('/create_user', [AuthController::class, 'create_user'])->name('create_user');
    Route::get('/create-pdf', [\App\Http\Controllers\PdfController::class, 'createPDF'])->name('createPDF');


    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
