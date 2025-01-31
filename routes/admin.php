<?php

use App\Http\Controllers\AdminVerificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;

Route::group(['middleware' => ['cekUserLogin:admin']], function () {
    Route::controller(MasterController::class)->group(function () {
        Route::get('master-student', 'student_index')->name('master.student');
        Route::get('master-student/{student}/edit', 'student_edit')->name('master.student.edit');
        Route::patch('master-student/{student}', 'student_update')->name('master.student.update');

        Route::get('master-principle', 'principle_index')->name('master.principle');
        Route::get('master-principle/add', 'principle_create')->name('master.principle.create');
        Route::post('master-principle', 'principle_store')->name('master.principle.store');
        Route::get('master-principle/{principle}/edit', 'principle_edit')->name('master.principle.edit');
        Route::patch('master-principle/{principle}', 'principle_update')->name('master.principle.update');
    });

    Route::controller(AdminVerificationController::class)->group(function () {
        Route::get('verification/registration', 'registration_index')->name('verification.registration');

        Route::get('verification/payment', 'payment_index')->name('verification.payment');
    });
});
