<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;

Route::group(['middleware' => ['cekUserLogin:admin']], function () {
    Route::controller(MasterController::class)->group(function () {
        Route::get('master-student', 'student_index')->name('master.student');
        Route::patch('master-student/{student}', 'student_update')->name('master.student.update');

        Route::get('master-principle', 'principle_index')->name('master.principle');
        Route::patch('master-principle/{principle}', 'principle_update')->name('master.principle.update');
    });
});
