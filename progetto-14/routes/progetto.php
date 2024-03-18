<?php

use App\Http\Controllers\AttivitaController;
use App\Http\Controllers\ProgettoController;
use Illuminate\Support\Facades\Route;

Route::resource('/projects', ProgettoController::class) ->middleware(['auth', 'verified']);
Route::resource('/activities', AttivitaController::class)->middleware(['auth', 'verified']);