<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AuthController;



Route::get('/', fn() => Inertia::render('Welcome'));
Route::get('/services', fn() => Inertia::render('Home/Services'));
Route::get('/about', fn() => Inertia::render('Home/About'));
Route::get('/faqs', fn() => Inertia::render('Home/Faqs'));
Route::get('/contact-us', fn() => Inertia::render('Home/ContactUs'));

Route::get('/Terms-0f-service', fn() => Inertia::render('Home/TermsOfService'));
Route::get('/Privacy-Policy', fn() => Inertia::render('Home/PrivacyPolicy'));


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
