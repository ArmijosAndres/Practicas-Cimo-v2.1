<?php

namespace App\Http\Controllers\Empleos;

use App\Http\Controllers\Controller;
use App\Models\Empleo;
use Illuminate\Http\Request;

class EmpleoController extends Controller
{
    /**
     * Muestra el listado público de empleos
     */
    public function index()
    {
        $empleos = Empleo::where('activo', true)
            ->latest()
            ->paginate(12);

        return view('empleos.index', compact('empleos'));
    }

    /**
     * Muestra un empleo específico
     */
    public function show($id)
    {
        $empleo = Empleo::where('activo', true)->findOrFail($id);
        return view('empleos.show', compact('empleo'));
    }

    /**
     * Panel de administración
     */
    public function admin()
    {
        $empleos = Empleo::latest()->paginate(10);
        return view('empleos.admin', compact('empleos'));
    }

    /**
     * Formulario de creación
     */
    public function create()
    {
        return view('empleos.create');
    }

    /**
     * Guardar nuevo empleo
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'empresa' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'salario' => 'nullable|string|max:100',
            'tipo_contrato' => 'nullable|string|max:100',
            'activo' => 'boolean',
        ]);

        Empleo::create($validated);

        return redirect()->route('admin.empleos.index')
            ->with('success', 'Empleo creado exitosamente');
    }

    /**
     * Formulario de edición
     */
    public function edit($id)
    {
        $empleo = Empleo::findOrFail($id);
        return view('empleos.edit', compact('empleo'));
    }

    /**
     * Actualizar empleo
     */
    public function update(Request $request, $id)
    {
        $empleo = Empleo::findOrFail($id);

        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'empresa' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'salario' => 'nullable|string|max:100',
            'tipo_contrato' => 'nullable|string|max:100',
            'activo' => 'boolean',
        ]);

        $empleo->update($validated);

        return redirect()->route('admin.empleos.index')
            ->with('success', 'Empleo actualizado exitosamente');
    }

    /**
     * Eliminar empleo
     */
    public function destroy($id)
    {
        $empleo = Empleo::findOrFail($id);
        $empleo->delete();

        return redirect()->route('admin.empleos.index')
            ->with('success', 'Empleo eliminado exitosamente');
    }
}
