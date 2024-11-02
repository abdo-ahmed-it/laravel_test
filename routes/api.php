<?php

use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::get('/notes', [NoteController::class, 'index']);
//Route::post('/notes', [NoteController::class, 'store']);
//Route::get('/notes/{id}', [NoteController::class, 'show']);
//Route::post('/notes/{id}', [NoteController::class, 'update']);
//Route::delete('/notes/{id}', [NoteController::class, 'delete']);
Route::apiResource('notes', NoteController::class);

