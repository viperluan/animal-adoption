<?php

use App\Http\Controllers\Institution\InstitutionDashboardAddressController;
use App\Http\Controllers\Institution\InstitutionDashboardAdoptionsController;
use App\Http\Controllers\Institution\InstitutionDashboardAnimalsController;
use App\Http\Controllers\Institution\InstitutionDashboardController;
use App\Http\Controllers\Institution\InstitutionDashboardInfoController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:institution', 'verified'])->group(function () {
    Route::get('/institution/dashboard', [InstitutionDashboardController::class, 'create']);
    Route::get('/institution/dashboard/info', [InstitutionDashboardInfoController::class, 'create']);
    Route::get('/institution/dashboard/address', [InstitutionDashboardAddressController::class, 'create']);
    Route::get('/institution/dashboard/adoptions', [InstitutionDashboardAdoptionsController::class, 'create']);
    Route::get('/institution/dashboard/animals', [InstitutionDashboardAnimalsController::class, 'create']);
});
