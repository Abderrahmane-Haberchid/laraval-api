<?php

Route::get('/articles', [App\Http\Controllers\Api\ArticleController::class, 'index']);
Route::get('/articles/{id}', [App\Http\Controllers\Api\ArticleController::class, 'show']);
Route::post('/articles', [App\Http\Controllers\Api\ArticleController::class, 'store']);
Route::put('/articles/{id}', [App\Http\Controllers\Api\ArticleController::class, 'update']);
Route::delete('/articles/{id}', [App\Http\Controllers\Api\ArticleController::class, 'delete']);
