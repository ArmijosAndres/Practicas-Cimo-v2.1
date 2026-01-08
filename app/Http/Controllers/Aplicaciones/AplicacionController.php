<?php

namespace App\Http\Controllers\Aplicaciones;

use App\Http\Controllers\Controller;
use App\Models\Aplicacion;
use App\Models\Empleo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AplicacionController extends Controller
{
    /**
     * Guarda una nueva aplicación a empleo
     */
    public function store(Request $request, $empleoId)
    {
        $empleo = Empleo::findOrFail($empleoId);

        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'curriculum' => 'required|file|mimes:pdf,doc,docx|max:5120',
            'carta_presentacion' => 'nullable|string|max:2000',
        ]);

        // Procesar CV
        if ($request->hasFile('curriculum')) {
            $cv = $request->file('curriculum');
            $nombreCV = time() . '_' . Str::slug($validated['nombre'] . '_' . $validated['apellido']) . '.' . $cv->getClientOriginalExtension();
            $cv->move(public_path('uploads/cv'), $nombreCV);
            $validated['curriculum'] = $nombreCV;
        }

        $validated['empleo_id'] = $empleoId;
        $validated['estado'] = 'pendiente';

        Aplicacion::create($validated);

        return back()->with('success', '¡Aplicación enviada exitosamente!');
    }

    /**
     * Panel de administración de aplicaciones
     */
    public function admin()
    {
        $aplicaciones = Aplicacion::with('empleo')
            ->latest()
            ->paginate(15);

        return view('aplicaciones.admin', compact('aplicaciones'));
    }

    /**
     * Cambiar estado de aplicación
     */
    public function cambiarEstado(Request $request, $id)
    {
        $aplicacion = Aplicacion::findOrFail($id);

        $validated = $request->validate([
            'estado' => 'required|in:pendiente,revisado,aceptado,rechazado',
        ]);

        $aplicacion->update($validated);

        return back()->with('success', 'Estado actualizado exitosamente');
    }

    /**
     * Eliminar aplicación
     */
    public function destroy($id)
    {
        $aplicacion = Aplicacion::findOrFail($id);

        // Eliminar CV
        if ($aplicacion->curriculum && file_exists(public_path('uploads/cv/' . $aplicacion->curriculum))) {
            unlink(public_path('uploads/cv/' . $aplicacion->curriculum));
        }

        $aplicacion->delete();

        return back()->with('success', 'Aplicación eliminada exitosamente');
    }
}
