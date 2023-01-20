<?php

use Illuminate\Support\Facades\Route;

include "SignInRoutes.php";
include "SignUpRoutes.php";
include "DashboardRoutes.php";

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/dashboard');
});
