<?php


use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\CategoryProductApiController;
use App\Http\Controllers\Api\ProductApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResources([
    'categories'=>CategoryApiController::class,
    'products'=>ProductApiController::class,
    'categories.products'=>CategoryProductApiController::class,
]);