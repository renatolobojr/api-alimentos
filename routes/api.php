<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AlimentoController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// List alimentos
Route::get('alimentos', [AlimentoController::class, 'index']);

// List single alimento
Route::get('alimentos/{id}', [AlimentoController::class, 'show']);

// Create new alimento
Route::post('alimentos', [AlimentoController::class, 'store']);

// Update alimento
Route::put('alimentos/{id}', [AlimentoController::class, 'update']);

// Delete alimento
Route::delete('alimentos/{id}', [AlimentoController::class,'destroy']);