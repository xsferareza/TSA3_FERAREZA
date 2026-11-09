<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'welcome']);
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/profile', [TaskController::class, 'profile']);
Route::get('/about', [TaskController::class, 'about']);
