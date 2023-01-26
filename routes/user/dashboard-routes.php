<?php

use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/user/dashboard', [UserDashboardController::class, 'create'])->middleware(['auth:web', 'verified']);
