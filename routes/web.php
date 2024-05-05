<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/tasks', [TaskController::class, 'index'] );
Route::post('/tasks', [TaskController::class, 'store'] );
Route::get('/tasks/{task}/complete', [TaskController::class, 'complete'] );
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'] );
