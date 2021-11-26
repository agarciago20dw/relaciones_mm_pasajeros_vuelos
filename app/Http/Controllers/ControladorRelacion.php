<?php

namespace App\Http\Controllers;

use App\Models\Pasajero;
use App\Models\Vuelo;
use Illuminate\Http\Request;

class ControladorRelacion extends Controller
{
    function mostrar() {
        $pasajeros = Pasajero::all();
        $vuelos = Vuelo::all();

        return view('formulario_relaciones')->with('pasajeros', $pasajeros)->with('vuelos', $vuelos);
    }

    function asignar(Request $request) {
        $pasajero = Pasajero::find($request->pasajeros);
        $vuelo = Vuelo::find($request->vuelos);

        $pasajero->vuelos()->attach($vuelo->id, ['num_reserva' => $request->num_reservas]);
        // $pasajero->pivot->num_reserva = $request->num_reservas;

        return redirect('/');
    }

    function eliminar($pasajero_id, $vuelo_id) {
        $pasajero = Pasajero::find($pasajero_id);
        $pasajero->vuelos()->detach($vuelo_id);

        return redirect('/');
    }
}
