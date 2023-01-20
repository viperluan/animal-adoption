<?php

use App\Http\Controllers\SignInController;
use Illuminate\Support\Facades\Route;

Route::get('/signin', [SignInController::class, 'create'])->name('signin');
Route::post('/signin', [SignInController::class, 'store']);
