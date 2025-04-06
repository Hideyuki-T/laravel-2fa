<?php

use App\Http\Controllers\TwoFactorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('2fa')->group(function () {
    Route::get('/setup', [TwoFactorController::class, 'showSetUpForm']);
    Route::get('/', [TwoFactorController::class, 'showOtpForm']);
    Route::post('/', [TwoFactorController::class, 'verifyOtp']);
});
