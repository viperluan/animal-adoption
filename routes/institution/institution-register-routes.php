<?php

use App\Http\Controllers\Institution\InstitutionRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/institution/register', [InstitutionRegisterController::class, 'create'])->middleware('guest:web,institution');
Route::post('/institution/register', [InstitutionRegisterController::class, 'store'])->middleware('guest:web,institution');
