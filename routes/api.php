<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubNoteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/note',[NoteController::class, 'index']);
Route::post('/note',[NoteController::class, 'store']);
Route::get('/note/{id}',[NoteController::class, 'show']);
Route::patch('/note/{id}',[NoteController::class, 'update']);
Route::delete('/note/{id}',[NoteController::class, 'destroy']);

Route::get('/user',[UserController::class, 'index']);
Route::post('/user',[UserController::class, 'store']);
Route::get('/user/{id}',[UserController::class, 'show']);
Route::patch('/user/{id}',[UserController::class, 'update']);
Route::delete('/user/{id}',[UserController::class, 'destroy']);

Route::get('/subnote',[SubNoteController::class, 'index']);
Route::post('/subnote',[SubNoteController::class, 'store']);
Route::get('/subnote/{id}',[SubNoteController::class, 'show']);
Route::patch('/subnote/{id}',[SubNoteController::class, 'update']);
Route::delete('/subnote/{id}',[SubNoteController::class, 'destroy']);