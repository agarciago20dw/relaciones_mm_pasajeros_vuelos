<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class ControladorUsuario extends Controller
{
    function crear (Request $request) {
        $usuario = new User;
        $usuario->name = $request->nombre;
        $usuario->surname = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);

        $usuario->save();
        event(new Registered($usuario));
        auth()->login($usuario);

        return redirect('/');
    }

    function entrar (Request $request) {
        if (!auth()->attempt(request(['email', 'password']), false)) {
            return redirect()->to(route('relacion_mostrar'));
        }
        return back()->withErrors(['message' => 'email o contraseña incorrectos']);
    }

    function salir () {
        auth()->logout();
        return redirect('/');
    }
}
