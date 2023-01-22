<?php

use App\Http\Controllers\Institution\InstitutionDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/institution/dashboard', [InstitutionDashboardController::class, 'create'])->middleware(['auth:institution', 'verified']);
