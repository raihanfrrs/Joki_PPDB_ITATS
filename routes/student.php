<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentProfileController;
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
        Route::delete('payment/destroy/{media}', 'destroy')->name('payment.destroy');
    });

    Route::controller(StudentProfileController::class)->group(function () {
        Route::get('student/profile', 'profile_index')->name('student.profile');
        Route::patch('student/profile', 'profile_update')->name('student.profile.update');

        Route::get('student/settings', 'setting_index')->name('student.settings');
        Route::post('student/settings', 'setting_update')->name('student.settings.update');
    });
});
