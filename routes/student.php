<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['cekUserLogin:student']], function () {
    Route::controller(RegistrationController::class)->group(function () {
        Route::get('registration', 'index')->name('registration');
    });

    Route::controller(PaymentController::class)->group(function () {
        Route::get('payment', 'index')->name('payment');
    });
});
