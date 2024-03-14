<?php

use App\Http\Controllers\ProgettoController;
use Illuminate\Support\Facades\Route;

Route::resource('/all', ProgettoController::class);