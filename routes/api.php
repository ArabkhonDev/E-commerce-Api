<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\CategoryProductApiController;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\FavoriteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('favorites', FavoriteController::class );
});

Route::apiResources([
    'categories'=>CategoryApiController::class,
    'categories.products'=>CategoryProductApiController::class,
    // 'favorites'=> FavoriteController::class,
    'products'=>ProductApiController::class,
]);

Route::post('login', [AuthController::class,'login']);
Route::post('logout', [AuthController::class,'logout'])->middleware('auth:sanctum');
Route::get('register', [AuthController::class,'resgiter']);
Route::get('user', [AuthController::class,'user'])->middleware('auth:sanctum');