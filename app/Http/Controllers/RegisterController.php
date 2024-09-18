<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'tipo_usuario' => 'required|in:1,2', // Asegúrate de que el valor sea uno de los permitidos
        ]);
    
        // Crear el nuevo usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo_usuario' => $request->tipo_usuario, // Agregar el tipo de usuario
        ]);
    
        // Iniciar sesión del usuario
        Auth::login($user);
    
        // Redirigir a la página de inicio
        return redirect('/home');
    }
    

    public function editar($id)
    {
        $usuario = User::findOrFail($id);
        return view('editarUsuario', compact('usuario'));
    }

    public function actualizar(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
            'tipo_usuario' => 'required|in:1,2',
        ]);

        $usuario = User::findOrFail($id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->tipo_usuario = $request->tipo_usuario;
        $usuario->save();

        return redirect()->route('lista-usuarios')->with('success', 'Usuario actualizado exitosamente.');
    }
}
