<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validar datos
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        try {
            // Crear nuevo usuario
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            // Redirigir al usuario a alguna página después de registrarse
            return redirect('/login')->with('success', '¡Registro exitoso! Por favor inicie sesión.');
        } catch (\Exception $e) {
            // Si hay algún error, redirigir al usuario de vuelta al formulario de registro con un mensaje de error
            return back()->withInput()->withErrors(['error' => 'Se produjo un error al intentar registrar el usuario. Por favor, inténtelo de nuevo más tarde.']);
        }
    }
}
