<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CopyTraderController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/transactions/deposits', [TransactionController::class, 'deposits'])->name('transactions.deposits');
    Route::get('/transactions/withdrawal', [TransactionController::class, 'withdrawal'])->name('transactions.withdrawal');

    Route::get('/expert/traders', [CopyTraderController::class, 'traders'])->name('expertTrader');

});
