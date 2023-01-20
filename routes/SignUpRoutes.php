<?php

use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('signup', [SignUpController::class, 'create']);
Route::post('signup', [SignUpController::class, 'store']);
