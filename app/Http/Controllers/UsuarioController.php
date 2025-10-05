<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    // Método para mostrar el formulario
    public function mostrarFormulario()
    {
        return view('registro');
    }

    // Método para guardar usuario
    public function guardarUsuario(Request $request)
    {
        // Validar datos del formulario
        $request->validate([
            'nombre' => 'required|max:50',
            'email' => 'required|email|max:50|unique:usuarios,correo',
            'password' => 'required|min:6',
        ]);

        // Crear nuevo usuario
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->email;
        $usuario->password = bcrypt($request->password); // encripta contraseña
        $usuario->save();

        // Redirigir con mensaje de éxito
        return redirect('/registro')->with('success', '¡Registro exitoso!');
    }
}
