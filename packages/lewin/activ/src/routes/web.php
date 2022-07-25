<?php

use Illuminate\Support\Facades\Route;
use Lewin\Activ\Controllers\ActivController;
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

Route::get('/', ActivController::class);
Route::post('/user', ActivController::class);
Route::get('page/{page_number}', ActivController::class);