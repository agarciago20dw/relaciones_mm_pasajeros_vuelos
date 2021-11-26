<?php

use App\Http\Controllers\ControladorPasajero;
use App\Http\Controllers\ControladorRelacion;
use App\Http\Controllers\ControladorVuelo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ControladorRelacion::class, 'mostrar'])->name('relacion_mostrar');

Route::post('/', [ControladorRelacion::class, 'asignar'])->name('relacion_asignar');

Route::delete('/{pasajero_id}/{vuelo_id}', [ControladorRelacion::class, 'eliminar'])->name('relacion_eliminar');

Route::get('/pasajeros/crear', [ControladorPasajero::class, 'insertarFormulario'])->name('pasajero_crear');

Route::post('/pasajeros/crear', [ControladorPasajero::class, 'insertar'])->name('pasajero_crear');

Route::get('/pasajeros/mostrar', [ControladorPasajero::class, 'mostrar'])->name('pasajero_mostrar');

Route::get('/vuelos/crear', [ControladorVuelo::class, 'insertarFormulario'])->name('vuelo_crear');

Route::post('/vuelos/crear', [ControladorVuelo::class, 'insertar'])->name('vuelo_crear');

Route::get('/vuelos/mostrar', [ControladorVuelo::class, 'mostrar'])->name('vuelo_mostrar');
