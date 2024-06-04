<?php

use App\Http\Controllers\Organization\AuthenticateController;
use App\Http\Controllers\Organization\IndexController;
use App\Http\Controllers\Organization\RegisterController;
use App\Models\Organization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('organization')->middleware('guest')->group(function () {
    Route::get('/signin', [AuthenticateController::class, 'index'])
        ->name('organization.login');

    Route::post('/session', [AuthenticateController::class, 'authenticate'])
        ->name('organization.session');

    Route::get('/signup', [RegisterController::class, 'index'])
        ->name('organization.register');

    Route::post('/signup/create', [RegisterController::class, 'create'])
        ->name('organization.register.create');
});

Route::prefix('organization')->middleware('auth')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('organization.index');

    Route::get('/logout', [IndexController::class, 'logout'])->name('organization.index.logout');
});
