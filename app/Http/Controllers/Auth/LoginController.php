<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Muestra el formulario de login
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Procesa el login
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'El correo es obligatorio',
            'email.email' => 'Ingrese un correo válido',
            'password.required' => 'La contraseña es obligatoria',
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('inicio'))
                ->with('success', '¡Bienvenido de vuelta, ' . Auth::user()->nombre . '!');
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    /**
     * Muestra el formulario de registro
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    /**
     * Procesa el registro
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'email' => 'required|email|unique:usuarios,email|max:100',
            'telefono' => 'nullable|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'apellido.required' => 'El apellido es obligatorio',
            'email.required' => 'El correo es obligatorio',
            'email.unique' => 'Este correo ya está registrado',
            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden',
        ]);

        $usuario = User::create([
            'nombre' => $validated['nombre'],
            'apellido' => $validated['apellido'],
            'email' => $validated['email'],
            'telefono' => $validated['telefono'] ?? null,
            'password' => Hash::make($validated['password']),
            'rol' => 'usuario', // Rol por defecto
            'activo' => true,
        ]);

        // Autenticar automáticamente
        Auth::login($usuario);

        return redirect()->route('inicio')
            ->with('success', '¡Cuenta creada exitosamente! Bienvenido, ' . $usuario->nombre . '!');
    }

    /**
     * Cierra la sesión
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('inicio')
            ->with('success', 'Sesión cerrada exitosamente');
    }
}