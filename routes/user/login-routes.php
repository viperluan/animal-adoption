<?php

use App\Http\Controllers\User\UserLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/user/login', [UserLoginController::class, 'create'])->middleware('guest:web,institution')->name('user.login');
Route::post('/user/login', [UserLoginController::class, 'store'])->middleware('guest:web,institution');
Route::post('/user/logout', [UserLoginController::class, 'logout'])->middleware('auth:web');
