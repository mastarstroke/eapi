<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CartController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/products', ProductsController::class);

Route::group(['prefix'=>'products'],function(){
    Route::apiResource('/{product}/reviews', ReviewController::class);
});