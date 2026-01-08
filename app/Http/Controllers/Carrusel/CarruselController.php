<?php

namespace App\Http\Controllers\Carrusel;

use App\Http\Controllers\Controller;
use App\Models\Carrusel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarruselController extends Controller
{
    /**
     * Panel de administración
     */
    public function index()
    {
        $imagenes = Carrusel::orderBy('orden')->get();
        return view('carrusel.index', compact('imagenes'));
    }

    /**
     * Formulario de creación
     */
    public function create()
    {
        return view('carrusel.create');
    }

    /**
     * Guardar nueva imagen
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'titulo' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string|max:500',
            'orden' => 'nullable|integer|min:0',
            'activo' => 'boolean',
        ]);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_carrusel.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('uploads/carrusel'), $nombreImagen);
            $validated['imagen'] = $nombreImagen;
        }

        // Si no se especifica orden, poner al final
        if (!isset($validated['orden'])) {
            $validated['orden'] = Carrusel::max('orden') + 1;
        }

        Carrusel::create($validated);

        return redirect()->route('admin.carrusel.index')
            ->with('success', 'Imagen agregada exitosamente');
    }

    /**
     * Formulario de edición
     */
    public function edit($id)
    {
        $carrusel = Carrusel::findOrFail($id);
        return view('carrusel.edit', compact('carrusel'));
    }

    /**
     * Actualizar imagen
     */
    public function update(Request $request, $id)
    {
        $carrusel = Carrusel::findOrFail($id);

        $validated = $request->validate([
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'titulo' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string|max:500',
            'orden' => 'nullable|integer|min:0',
            'activo' => 'boolean',
        ]);

        if ($request->hasFile('imagen')) {
            // Eliminar imagen anterior
            if ($carrusel->imagen && file_exists(public_path('uploads/carrusel/' . $carrusel->imagen))) {
                unlink(public_path('uploads/carrusel/' . $carrusel->imagen));
            }

            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_carrusel.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('uploads/carrusel'), $nombreImagen);
            $validated['imagen'] = $nombreImagen;
        }

        $carrusel->update($validated);

        return redirect()->route('admin.carrusel.index')
            ->with('success', 'Imagen actualizada exitosamente');
    }

    /**
     * Eliminar imagen
     */
    public function destroy($id)
    {
        $carrusel = Carrusel::findOrFail($id);

        if ($carrusel->imagen && file_exists(public_path('uploads/carrusel/' . $carrusel->imagen))) {
            unlink(public_path('uploads/carrusel/' . $carrusel->imagen));
        }

        $carrusel->delete();

        return redirect()->route('admin.carrusel.index')
            ->with('success', 'Imagen eliminada exitosamente');
    }
}
