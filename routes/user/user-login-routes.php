<?php

use App\Http\Controllers\User\UserLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/user/login', [UserLoginController::class, 'create'])->middleware('guest');
Route::post('/user/login', [UserLoginController::class, 'store'])->middleware('guest');
Route::post('/user/logout', [UserLoginController::class, 'logout']);
