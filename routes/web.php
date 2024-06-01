<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuenoController;
use App\Http\Controllers\MascotaController;

Route::resource('duenos', DuenoController::class);
Route::resource('mascotas', MascotaController::class);
Route::get('/', function () {
    return view('welcome');
});
