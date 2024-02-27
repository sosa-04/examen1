<?php

use App\Http\Controllers\TipoasientoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VuelosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/tiposasientos', [TipoasientoController::class, 'index'])->name('mostrar.tipoasientos');

Route::get('/vuelos', [VuelosController::class, 'index'])->name('mostrar.vuelos');

Route::get('/tiposasientos/agregar', [TipoasientoController::class, 'agregar'])->name('agregar.tipoasientos');