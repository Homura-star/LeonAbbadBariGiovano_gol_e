<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ObatController;

Route::get('/', [ObatController::class, 'index']);
