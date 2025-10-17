<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::resource("pasien", PasienController::class);
Route::resource("dosen", DosenController::class);

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/hello', function () {
    return 'hello';
});
