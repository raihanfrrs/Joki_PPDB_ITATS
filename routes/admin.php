<?php

use App\Http\Controllers\AdminReportingController;
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
        Route::patch('verification-registration/{registration}', 'registration_update')->name('verification.registration.update');
        Route::get('verification/registration/{registration}', 'registration_show')->name('verification.registration.show');

        Route::get('verification/payment', 'payment_index')->name('verification.payment');
        Route::patch('verification-payment/{payment}', 'payment_update')->name('verification.payment.update');
        Route::get('verification/payment/{payment}', 'payment_show')->name('verification.payment.show');
    });

    Route::controller(AdminReportingController::class)->group(function () {
        Route::get('reporting/student-passed', 'student_passed_index')->name('reporting.student.passed');
        Route::get('reporting/student-passed/{student}', 'student_passed_show')->name('reporting.student.passed.show');

        Route::get('reporting/student-candidate', 'student_candidate_index')->name('reporting.student.candidate');
        Route::get('reporting/student-candidate/{student}', 'student_candidate_show')->name('reporting.student.candidate.show');
    });
});
