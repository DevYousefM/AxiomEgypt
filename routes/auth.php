<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix("dashboard")->name("dashboard.")->group(
    function () {
        Route::get('login', [AuthController::class, 'create'])
            ->name('login');
        Route::post('login', [AuthController::class, 'store']);

        Route::middleware('checkAdmin')->group(function () {
            Route::post('logout', [AuthController::class, 'destroy'])
                ->name('logout');
        });
    }
);
