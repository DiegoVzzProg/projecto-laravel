<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/umm/login', [LoginController::class, 'index']);
