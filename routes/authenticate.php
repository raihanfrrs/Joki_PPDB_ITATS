<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

Route::controller(LayoutController::class)->group(function () {
    Route::get('/', 'index')->name('/');
});

Route::middleware('guest')->group(function () {
    Route::controller(GuestController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
    });

    Route::controller(RegisterController::class)->group(function () {
        Route::get('sign-up', 'index')->name('signup');
    });

    Route::controller(LoginController::class)->group(function () {
        Route::get('sign-in', 'index')->name('signin');
        Route::post('sign-in/{level}', 'store')->name('signin.store');
    });
});

Route::middleware('auth')->group(function () {
    Route::controller(LogoutController::class)->group(function () {
        Route::get('sign-out', 'index')->name('signout');
    });
});
