<?php

use App\Http\Controllers\User\UserRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/user/register', [UserRegisterController::class, 'create'])->middleware('guest:web,institution');
Route::post('/user/register', [UserRegisterController::class, 'store'])->middleware('guest:web,institution');
