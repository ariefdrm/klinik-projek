<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth'])->group(function () {
//     Route::resource("pasien", PasienController::class);
// });


Route::resource("pasien", PasienController::class)->middleware(AdminMiddleware::class);
Route::resource("dosen", DosenController::class);

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/hello', function () {
    return 'hello';
});
