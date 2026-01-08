<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Carrusel;
use App\Models\Empleo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Muestra la página de inicio
     */
    public function index()
    {
        // Obtener las últimas 6 noticias publicadas
        $noticias = Noticia::where('publicado', true)
            ->latest()
            ->take(6)
            ->get();

        // Obtener las últimas 4 vacantes activas
        $aplicaciones = Empleo::where('activo', true)
            ->latest()
            ->take(4)
            ->get();

        // Obtener imágenes del carrusel activas
        $imagenesCarrusel = Carrusel::where('activo', true)
            ->orderBy('orden')
            ->get();

        return view('inicio', compact('noticias', 'aplicaciones', 'imagenesCarrusel'));
    }
}