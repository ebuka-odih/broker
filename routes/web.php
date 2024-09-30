<?php

use App\Http\Controllers\TradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('index');

Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('trade/{id}', [TradeController::class, 'trade'])->name('trade');
    Route::post('place/trade', [TradeController::class, 'placeTrade'])->name('placeTrade');
    Route::get('close/trade/{id}', [TradeController::class, 'closeTrade'])->name('closeTrade');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
