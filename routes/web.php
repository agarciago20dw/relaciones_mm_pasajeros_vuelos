<?php

use App\Http\Controllers\ControladorPasajero;
use App\Http\Controllers\ControladorRelacion;
use App\Http\Controllers\ControladorUsuario;
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

Route::get('/', function() {
    return view('inicio');
});

Route::post('/usuario/crear', [ControladorUsuario::class, 'crear'])->name('usuario_crear');

Route::post('/usuario/entrar', [ControladorUsuario::class, 'entrar'])->name('usuario_entrar');

Route::get('/usuario/salir', [ControladorUsuario::class, 'salir'])->name('usuario_salir');

Route::get('/mostrar', [ControladorRelacion::class, 'mostrar'])->name('relacion_mostrar')->middleware('auth');

Route::post('/asignar', [ControladorRelacion::class, 'asignar'])->name('relacion_asignar')->middleware('auth');

Route::delete('/{pasajero_id}/{vuelo_id}', [ControladorRelacion::class, 'eliminar'])->name('relacion_eliminar')->middleware('auth');

Route::get('/pasajeros/crear', [ControladorPasajero::class, 'insertarFormulario'])->name('pasajero_crear')->middleware('auth');

Route::post('/pasajeros/crear', [ControladorPasajero::class, 'insertar'])->name('pasajero_crear')->middleware('auth');

Route::get('/pasajeros/mostrar', [ControladorPasajero::class, 'mostrar'])->name('pasajero_mostrar')->middleware('auth');

Route::get('/vuelos/crear', [ControladorVuelo::class, 'insertarFormulario'])->name('vuelo_crear')->middleware('auth');

Route::post('/vuelos/crear', [ControladorVuelo::class, 'insertar'])->name('vuelo_crear')->middleware('auth');

Route::get('/vuelos/mostrar', [ControladorVuelo::class, 'mostrar'])->name('vuelo_mostrar')->middleware('auth');
