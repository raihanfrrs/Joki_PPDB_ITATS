<?php

use App\Http\Controllers\PrincipleReportingController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['cekUserLogin:principle']], function () {
    Route::controller(PrincipleReportingController::class)->group(function () {
        Route::get('principle/reporting-student', 'student_index')->name('principle.reporting.student');
    });
});
