<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/suma/{num1}/{num2}', [PostController::class, 'suma']);
Route::get('/mult/{num1}/{num2}', [PostController::class, 'multiplicacion']);