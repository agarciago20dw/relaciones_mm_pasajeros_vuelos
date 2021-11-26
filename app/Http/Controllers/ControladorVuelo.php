<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class ControladorVuelo extends Controller
{
    function insertarFormulario() {
        return view('vuelo_crear');
    }

    function insertar(Request $request) {
        $vuelo = new Vuelo;
        $vuelo->nombre = $request->nombre;
        $vuelo->origen = $request->origen;
        $vuelo->destino = $request->destino;

        $vuelo->save();
        return redirect('/vuelo/mostrar');
    }

    function mostrar() {
        $vuelos = Vuelo::all();
        return view('vuelos_mostrar')->with('vuelos', $vuelos);
    }
}
