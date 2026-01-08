<?php

namespace App\Http\Controllers\Peritaje;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PeritajeController extends Controller
{
    /**
     * Procesa el registro de peritaje
     */
    public function registrar(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'especialidad' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|email|max:255',
            'descripcion' => 'required|string|max:2000',
            'archivo' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:5120',
        ]);

        // Procesar archivo si existe
        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $nombreArchivo = time() . '_' . Str::slug($validated['nombre']) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/peritajes'), $nombreArchivo);
            $validated['archivo'] = $nombreArchivo;
        }

        // OPCIÓN: Guardar en BD (si creas el modelo Peritaje)
        // Peritaje::create($validated);

        return back()->with('success', '¡Registro exitoso! Nos pondremos en contacto contigo pronto.');
    }
}