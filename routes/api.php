<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('tasks', [TasksController::class, 'index']);
Route::post('tasks', [TasksController::class, 'store']);
Route::get('tasks/{task}', [TasksController::class, 'show']);
Route::patch('tasks/{task}', [TasksController::class, 'update']);
Route::delete('tasks/{task}', [TasksController::class, 'destroy']);
