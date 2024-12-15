<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/posts/{post_id}/comments', [App\Http\Controllers\CommentController::class, 'index']);
Route::post('/comments', [App\Http\Controllers\CommentController::class, 'store']);
