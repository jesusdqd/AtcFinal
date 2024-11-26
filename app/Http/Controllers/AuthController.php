<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    // Mostrar formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesar el inicio de sesión
    public function login(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string',
            'contrasena' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        $user = User::where('name', $request->usuario)->first();

        if ($user && Hash::check($request->contrasena, $user->password)) {
            // Iniciar sesión
            auth()->login($user);
            return redirect()->route('home');
        }

        // Si el login falla
        return back()->withErrors(['error' => 'Usuario o contraseña incorrectos']);
    }

    // Mostrar formulario de registro
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Procesar el registro
    public function register(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string|unique:users,usuario|max:255',
            'email' => 'required|email|unique:users,email',
            'contrasena' => 'required|confirmed|min:4',
        ]);
    
        $user = User::create([
            'name' => $request->name ?? '',
            'usuario' => $request->usuario,
            'email' => $request->email,
            'password' => bcrypt($request->contrasena),
        ]);
    
        // Autenticación opcional
        auth()->login($user);
    
        return redirect()->route('home')->with('success', 'Registro exitoso');
    }
}
