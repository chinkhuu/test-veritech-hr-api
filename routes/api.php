<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/employees', [\App\Http\Controllers\EmployeeController::class, 'index']);
Route::get('/employees/{id}', [\App\Http\Controllers\EmployeeController::class, 'show']);
