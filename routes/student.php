<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['cekUserLogin:student']], function () {
    Route::controller(RegistrationController::class)->group(function () {
        Route::get('registration', 'index')->name('registration');
        Route::post('registration/{student}', 'store')->name('registration.store');
        Route::patch('registration/{student}', 'update')->name('registration.update');
        Route::put('registration/{student}/resubmit', 'resubmit')->name('registration.resubmit');
        Route::post('registration/{student}', 'store')->name('registration.store');
    });

    Route::controller(PaymentController::class)->group(function () {
        Route::get('payment', 'index')->name('payment');
        Route::post('payment', 'store')->name('payment.store');
        Route::get('payment/{media}', 'edit')->name('payment.edit');
        Route::post('payment/{media}', 'update')->name('payment.update');
        Route::post('payment/destroy', 'destroy')->name('payment.destroy');
    });
});
