<?php

use App\Http\Controllers\Api\SlangController as SlangControllerAPI;
use App\Http\Controllers\Api\AuthController as AuthControllerAPI; 

use Illuminate\Support\Facades\Route;


Route::get('/slangs', [SlangControllerAPI::class, 'index']);
Route::post('/slangs', [SlangControllerAPI::class, 'store']);
Route::get('/slangs/{id}', [SlangControllerAPI::class, 'show']);
Route::put('/slangs/{id}', [SlangControllerAPI::class, 'update']);
Route::delete('/slangs/{id}', [SlangControllerAPI::class, 'destroy']);

Route::patch('/slangs/{id}/approve', [SlangControllerAPI::class, 'approve']);
Route::get('/slangs/search', [SlangControllerAPI::class, 'search']);


Route::post('/register', [AuthControllerAPI::class, 'register']);
Route::post('/login', [AuthControllerAPI::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthControllerAPI::class, 'logout']);
    Route::get('/profile', [AuthControllerAPI::class, 'profile']);
});
