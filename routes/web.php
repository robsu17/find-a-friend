<?php

use App\Http\Controllers\Organization\AuthenticateController;
use App\Http\Controllers\Organization\RegisterController;
use App\Http\Controllers\Pet\CreatePetController;
use App\Http\Controllers\Pet\SearchPetsController;
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
    Route::get('/', [CreatePetController::class, 'index'])->name('organization.index');

    Route::get('/logout', [AuthenticateController::class, 'logout'])->name('organization.index.logout');

    Route::post('/pet/create', [CreatePetController::class, 'create'])->name('organization.index.create.pet');
});

Route::get('/', [SearchPetsController::class, 'index'])->name('pets.index');

Route::get('/search', [SearchPetsController::class, 'search'])->name('pets.search');
