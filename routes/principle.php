<?php

use App\Http\Controllers\PrincipleProfileController;
use App\Http\Controllers\PrincipleReportingController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['cekUserLogin:principle']], function () {
    Route::controller(PrincipleReportingController::class)->group(function () {
        Route::get('principle/reporting-student', 'student_index')->name('principle.reporting.student');
    });

    Route::controller(PrincipleProfileController::class)->group(function () {
        Route::get('principle/settings', 'setting_index')->name('principle.settings');
        Route::patch('principle/settings', 'setting_update')->name('principle.settings.update');
    });
});
