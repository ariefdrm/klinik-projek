<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\PolyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource("pasien", PasienController::class);
Route::apiResource('polies', PolyController::class);
