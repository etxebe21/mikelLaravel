<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validar datos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Intentar autenticar al usuario
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Autenticación exitosa
            return redirect()->intended('/home'); // Redirigir a la URL previa o una URL predeterminada
        }
    
        // Autenticación fallida
        return back()->withInput()->withErrors(['error' => 'Credenciales incorrectas.']);
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function getUsuarios(){
        $usuarios= DB::table('users')              
            ->get();
        return $usuarios;
    }

    public function deleteUsuario($id)
    {
        
        DB::table('users')->where('id', $id)->delete();

        return redirect()->route('lista-usuarios')->with('success', 'El y sus datos relacionados han sido eliminados exitosamente.');
    }
}

