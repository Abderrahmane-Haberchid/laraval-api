<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;

Route::middleware("auth:sanctum")->apiResource('article', ArticleController::class);

Route::post('login', [\App\Http\Controllers\Api\AuthController::class, 'login'])
    ->name('login');
Route::post('register', [\App\Http\Controllers\Api\AuthController::class, 'register'])
    ->name('register');    

