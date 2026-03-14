<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('projects', ProjectController::class);
    Route::apiResource('tasks', TaskController::class);

    Route::post('/comments', [CommentController::class, 'store']);
    Route::get('/tasks/{id}/comments', [CommentController::class, 'index']);
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);

    Route::get('/user', fn(Request $request) => $request->user());

    Route::post('/logout', [AuthController::class, 'logout']);

});
