<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/v1/admin/login',[UserAuthController::class,"login"]);
Route::post('/v1/admin/register',[UserAuthController::class,"register"]);
Route::post('/v1/admin/logout',[UserAuthController::class,"logout"]) -> middleware('auth:sanctum');