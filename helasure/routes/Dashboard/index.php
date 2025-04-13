<?php

    use Inertia\Inertia;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\EscrowController;
    use App\Http\Controllers\Dashboard\DashboardController;
    use App\Http\Controllers\Dashboard\TransactionsController;


    Route::middleware('auth')->group(function () {
        //dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        //Escrow
        Route::get('/dashboard/escrow', [EscrowController::class, 'index'])->name('dashboard.escrows.index');
//        Route::get('/dashboard/escrow', [EscrowController::class, 'create'])->name('dashboard.escrows.index');
        Route::get('/dashboard/escrows/create', [EscrowController::class, 'create'])->name('dashboard.escrows.create');
        Route::post('/dashboard/escrows', [EscrowController::class, 'store'])->name('dashboard.escrows.store');

        //Profile
        Route::get('/dashboard/profile', fn() => Inertia::render('Profile/index'))->name('dashboard.profile.index');
        Route::put('/dashboard/profile/profile/update/{user}', [UserController::class, 'updateUserProfile'])->name('dashboard.profile.update.profile');
        Route::put('/dashboard/profile/password/update/{user}', [UserController::class, 'updateUserPassword'])->name('dashboard.profile.update.password');
        Route::delete('/dashboard/profile/password/delete/{user}', [UserController::class, 'deleteUserAccount'])->name('dashboard.profile.delete');

        //Transactions
        Route::get('/dashboard/transactions', [TransactionsController::class, 'index'])->name('dashboard.transactions.index');

        //Wallet
        Route::get('/dashboard/wallet', [TransactionsController::class, 'index'])->name('dashboard.wallet.index');




    });
