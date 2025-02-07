<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\YajraDatatablesController;
use Illuminate\Support\Facades\Route;

Route::controller(YajraDatatablesController::class)->group(function () {
    Route::get('listStudentsTable', 'student');
    Route::get('listPrinciplesTable', 'principle');
    Route::get('listStudentReportTable', 'student_report');
    Route::get('listVerificationRegistrationTable', 'verification_registration');
    Route::get('listPaymentsTable', 'payment');
});

Route::controller(AjaxController::class)->group(function () {});
