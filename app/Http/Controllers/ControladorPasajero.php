<?php

namespace App\Http\Controllers;

use App\Models\Pasajero;
use Database\Seeders\PasajerosSeeder;
use Illuminate\Http\Request;

class ControladorPasajero extends Controller
{
    function insertarFormulario() {
        return view('pasajero_crear');
    }

    function insertar(Request $request) {
        $pasajero = new Pasajero;
        $pasajero->nombre = $request->nombre;
        $pasajero->dni = $request->dni;
        $pasajero->edad = $request->edad;

        $pasajero->save();
        return redirect('/pasajero/mostrar');
    }

    function mostrar() {
        $pasajeros = Pasajero::all();
        return view('pasajeros_mostrar')->with('pasajeros', $pasajeros);
    }
}
