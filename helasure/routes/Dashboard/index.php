<?php

    use App\Http\Controllers\Dashboard\DashboardController;
    use App\Http\Controllers\Dashboard\TransactionsController;
    use App\Http\Controllers\EscrowController;
    use Illuminate\Support\Facades\Route;
    use Inertia\Inertia;


    Route::middleware('auth')->group(function () {
        //dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        //Transactions
        Route::get('/transactions', [TransactionsController::class, 'index'])->name('Transactions');


        Route::get('/profile', fn() => Inertia::render('Profile/index'))->name('profile');

        Route::get('/escrows/create', [EscrowController::class, 'create'])->name('escrows.create');
        Route::post('/escrows', [EscrowController::class, 'store'])->name('escrows.store');


    });
