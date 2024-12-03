<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermekController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('termeks')->group(function () {
    Route::get('/', [TermekController::class, 'index']);
    Route::get('/{id}', [TermekController::class, 'show']);
    Route::post('/', [TermekController::class, 'store']);
    Route::put('/{id}', [TermekController::class, 'update']);
    Route::delete('/{id}', [TermekController::class, 'destroy']);
});
