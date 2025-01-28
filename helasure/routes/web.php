<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AuthController;

Route::get('/login', function () {
    return Inertia::render('Auth/Login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/register', function () {
    return Inertia::render('Auth/Register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.attempt');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
