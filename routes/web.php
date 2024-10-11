<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\ContactoController;

Route::get('/', [HomeController::class, 'home_index'])->name('home_index');

Route::get('/sobre-nosotros', [RutasController::class, 'rutas_sobre_nosotros'])->name('rutas_sobre_nosotros');
Route::get('/servicios', [RutasController::class, 'rutas_servicios'])->name('rutas_servicios');
Route::get('/terminos-y-condiciones', [RutasController::class, 'rutas_terminos_y_condiciones'])->name('rutas_terminos_y_condiciones');
Route::get('/politica-de-privacidad', [RutasController::class, 'rutas_politica_de_privacidad'])->name('rutas_politica_de_privacidad');