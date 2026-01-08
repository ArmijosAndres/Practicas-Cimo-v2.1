<?php

namespace App\Http\Controllers\Contacto;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Procesa el formulario de contacto
     */
    public function enviar(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string|max:2000',
        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'Ingrese un correo válido',
            'asunto.required' => 'El asunto es obligatorio',
            'mensaje.required' => 'El mensaje es obligatorio',
            'mensaje.max' => 'El mensaje no puede superar los 2000 caracteres',
        ]);

        // OPCIÓN 1: Guardar en BD (si creas el modelo Contacto)
        // Contacto::create($validated);

        // OPCIÓN 2: Enviar email
        // Mail::to('contacto@cimo.com.ec')->send(new ContactoMail($validated));

        // OPCIÓN 3: Solo mensaje (temporal)
        return back()->with('success', '¡Gracias por contactarnos! Te responderemos pronto.');
    }
}
