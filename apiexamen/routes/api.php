<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/students', [ApiController::class, 'index']);
Route::post('/student', [ApiController::class, 'store']);
Route::get('/students/{id}', [ApiController::class, 'find']);
Route::put('/students/{id}', [ApiController::class, 'put']);
Route::delete('/students/{id}', [ApiController::class, 'delete']);


