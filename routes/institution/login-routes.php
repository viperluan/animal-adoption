<?php

use App\Http\Controllers\Institution\InstitutionLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/institution/login', [InstitutionLoginController::class, 'create'])->middleware('guest:web,institution')->name('institution.login');
Route::post('/institution/login', [InstitutionLoginController::class, 'store'])->middleware('guest:web,institution');
Route::post('/institution/logout', [InstitutionLoginController::class, 'logout'])->middleware(['auth:institution']);
