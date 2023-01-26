<?php

use App\Http\Controllers\Email\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::get('/email/verify', [VerifyEmailController::class, 'create'])->middleware(['auth:web,institution'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'update'])->middleware(['auth:web,institution', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', [VerifyEmailController::class, 'store'])->middleware(['auth:web,institution', 'throttle:6,1'])->name('verification.send');
