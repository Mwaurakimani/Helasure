<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscrowController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DisputeController;
use App\Http\Controllers\ChatController;


//auth
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/user', function () {
    return auth()->user();
})->middleware('auth:sanctum');


// Protected routes (requires authentication)
Route::middleware('auth:sanctum')->group(function () {

    // 📌 Escrow Transactions
    Route::apiResource('escrows', EscrowController::class);

    // 📌 Payments
    Route::post('escrows/{escrow}/pay', [PaymentController::class, 'initiatePayment']);
    Route::post('escrows/{escrow}/release', [PaymentController::class, 'releaseFunds']);

    // 📌 Disputes
    Route::post('escrows/{escrow}/disputes', [DisputeController::class, 'store']);
    Route::post('disputes/{dispute}/resolve', [DisputeController::class, 'resolve']);

    // 📌 Chat Messages
    Route::get('escrows/{escrow}/messages', [ChatController::class, 'index']);
    Route::post('escrows/{escrow}/messages', [ChatController::class, 'sendMessage']);

    // 📌 User Details
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
