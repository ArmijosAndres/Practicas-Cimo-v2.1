<?php

namespace App\Http\Controllers\Noticias;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NoticiaController extends Controller
{
    /**
     * Muestra el listado público de noticias
     */
    public function index()
    {
        $noticias = Noticia::where('publicado', true)
            ->latest()
            ->paginate(9);

        return view('noticias.index', compact('noticias'));
    }

    /**
     * Muestra una noticia específica
     */
    public function show($id)
    {
        $noticia = Noticia::where('publicado', true)->findOrFail($id);
        
        // Noticias relacionadas
        $relacionadas = Noticia::where('publicado', true)
            ->where('id', '!=', $id)
            ->latest()
            ->take(3)
            ->get();

        return view('noticias.show', compact('noticia', 'relacionadas'));
    }

    /**
     * Muestra el panel de administración de noticias
     */
    public function admin()
    {
        $noticias = Noticia::latest()->paginate(10);
        return view('noticias.admin', compact('noticias'));
    }

    /**
     * Muestra el formulario para crear noticia
     */
    public function create()
    {
        return view('noticias.create');
    }

    /**
     * Guarda una nueva noticia
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'autor' => 'nullable|string|max:255',
            'publicado' => 'boolean',
            'destacado' => 'boolean',
        ]);

        // Procesar imagen
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_' . Str::slug($validated['titulo']) . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('uploads/noticias'), $nombreImagen);
            $validated['imagen'] = $nombreImagen;
        }

        Noticia::create($validated);

        return redirect()->route('admin.noticias.index')
            ->with('success', 'Noticia creada exitosamente');
    }

    /**
     * Muestra el formulario para editar noticia
     */
    public function edit($id)
    {
        $noticia = Noticia::findOrFail($id);
        return view('noticias.edit', compact('noticia'));
    }

    /**
     * Actualiza una noticia
     */
    public function update(Request $request, $id)
    {
        $noticia = Noticia::findOrFail($id);

        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'autor' => 'nullable|string|max:255',
            'publicado' => 'boolean',
            'destacado' => 'boolean',
        ]);

        // Procesar nueva imagen si se sube
        if ($request->hasFile('imagen')) {
            // Eliminar imagen anterior
            if ($noticia->imagen && file_exists(public_path('uploads/noticias/' . $noticia->imagen))) {
                unlink(public_path('uploads/noticias/' . $noticia->imagen));
            }

            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_' . Str::slug($validated['titulo']) . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('uploads/noticias'), $nombreImagen);
            $validated['imagen'] = $nombreImagen;
        }

        $noticia->update($validated);

        return redirect()->route('admin.noticias.index')
            ->with('success', 'Noticia actualizada exitosamente');
    }

    /**
     * Elimina una noticia
     */
    public function destroy($id)
    {
        $noticia = Noticia::findOrFail($id);

        // Eliminar imagen si existe
        if ($noticia->imagen && file_exists(public_path('uploads/noticias/' . $noticia->imagen))) {
            unlink(public_path('uploads/noticias/' . $noticia->imagen));
        }

        $noticia->delete();

        return redirect()->route('admin.noticias.index')
            ->with('success', 'Noticia eliminada exitosamente');
    }
}
