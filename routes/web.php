<?php

use App\Http\Controllers\Organization\AuthenticateController;
use App\Http\Controllers\Organization\RegisterController;
use Illuminate\Support\Facades\Route;

Route::prefix('organization')->group(function () {
    Route::get('/signin', [AuthenticateController::class, 'index'])->name('organization.login');
    Route::post('/session', [AuthenticateController::class, 'authenticate'])->name('organization.session');

    Route::get('/signup', [RegisterController::class, 'index'])->name('organization.register');
    Route::post('/signup/create', [RegisterController::class, 'create'])->name('organization.register.create');
});
