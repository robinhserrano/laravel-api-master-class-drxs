<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Models\Ticket;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);