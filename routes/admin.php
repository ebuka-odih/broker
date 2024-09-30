<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CopyTraderController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\TradePairController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\TradeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('user/security/', [AdminController::class, 'security'])->name('security');
    Route::post('change/password', [AdminController::class, 'resetPassword'])->name('resetPassword');

    Route::get('/users', [UserController::class, 'users'])->name('user.index');
    Route::delete('delete/user/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');


    Route::get('/transactions/deposits', [TransactionController::class, 'deposits'])->name('transactions.deposits');
    Route::get('/transactions/withdrawal', [TransactionController::class, 'withdrawal'])->name('transactions.withdrawal');

    Route::resource('/copy-trader', CopyTraderController::class);
    Route::resource('/payment-method', PaymentMethodController::class);
    Route::resource('/package', PackageController::class);
    Route::resource('/trade-pair', TradePairController::class);
    Route::resource('/trade', TradeController::class);

});