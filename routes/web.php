<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Contacto\ContactoController;
use App\Http\Controllers\Peritaje\PeritajeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Noticias\NoticiaController;
use App\Http\Controllers\Empleos\EmpleoController;
use App\Http\Controllers\Aplicaciones\AplicacionController;
use App\Http\Controllers\Carrusel\CarruselController;
use App\Http\Controllers\Usuarios\UsuarioController;
use App\Http\Controllers\Cimo\AfiliateController;

/*
|--------------------------------------------------------------------------
| Web Routes - CIMO
|--------------------------------------------------------------------------
*/

// ============================================
// PÁGINA DE INICIO
// ============================================
Route::get('/', [HomeController::class, 'index'])->name('inicio');

// ============================================
// AUTENTICACIÓN
// ============================================
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


// REGISTRO (agregar estas líneas)
Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ============================================
// CIMO - PÁGINAS INSTITUCIONALES
// ============================================
Route::prefix('cimo')->name('cimo.')->group(function () {
    
    // Información general
    Route::get('/quienes_somos', function () {
        return view('cimo.quienes_somos');
    })->name('quienes_somos');
    
    Route::get('/mision', function () {
        return view('cimo.mision');
    })->name('mision');
    
    Route::get('/vision', function () {
        return view('cimo.vision');
    })->name('vision');
    
    // Afiliación
    Route::prefix('afiliate')->name('afiliate.')->group(function () {
        Route::get('/beneficios', function () {
            return view('cimo.afiliate.beneficios');
        })->name('beneficios');
        
        Route::get('/requisitos', function () {
            return view('cimo.afiliate.requisitos');
        })->name('requisitos');
        
        Route::get('/pagar', [AfiliateController::class, 'pagar'])->name('pagar');
        Route::post('/pagar', [AfiliateController::class, 'procesarPago'])->name('procesar-pago');
        Route::get('/confirmacion', [AfiliateController::class, 'confirmacion'])->name('confirmacion');
    });
});

// ============================================
// NOTICIAS (Público)
// ============================================
Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('/noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticias.show');

// ============================================
// EMPLEOS (Público)
// ============================================
Route::get('/empleos', [EmpleoController::class, 'index'])->name('empleos.index');
Route::get('/empleos/{empleo}', [EmpleoController::class, 'show'])->name('empleos.show');

// Aplicar a empleo
Route::post('/empleos/{empleo}/aplicar', [AplicacionController::class, 'store'])->name('empleos.aplicar');

// ============================================
// CONTACTO
// ============================================
Route::get('/contacto', function () {
    return view('contacto.contacto');
})->name('contacto');
Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('contacto.enviar');

// ============================================
// PERITAJES
// ============================================
Route::get('/peritajes', function () {
    return view('peritajes.peritajes');
})->name('peritajes');
Route::post('/peritajes/registrar', [PeritajeController::class, 'registrar'])->name('peritajes.registrar');

// ============================================
// NEWSLETTER
// ============================================
Route::post('/newsletter/subscribe', function () {
    return back()->with('success', '¡Suscripción exitosa!');
})->name('newsletter.subscribe');

// ============================================
// SOCIOS (Perfiles públicos)
// ============================================
Route::get('/socios/{id}', function ($id) {
    return view('socios.perfil', compact('id'));
})->name('socios.perfil');

// ============================================
// CONVENIOS
// ============================================
Route::get('/convenios', function () {
    return view('convenios.convenios');
})->name('convenios');

// ============================================
// CAPACITACIONES
// ============================================
Route::get('/capacitaciones', function () {
    return view('capacitaciones.capacitaciones');
})->name('capacitaciones.index');

// ============================================
// RUTAS DE ADMINISTRACIÓN (Protegidas con auth)
// ============================================
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard Admin (opcional)
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    // ============================================
    // ADMINISTRACIÓN DE NOTICIAS
    // ============================================
    Route::prefix('noticias')->name('noticias.')->group(function () {
        Route::get('/', [NoticiaController::class, 'admin'])->name('index');
        Route::get('/crear', [NoticiaController::class, 'create'])->name('create');
        Route::post('/', [NoticiaController::class, 'store'])->name('store');
        Route::get('/{noticia}/editar', [NoticiaController::class, 'edit'])->name('edit');
        Route::put('/{noticia}', [NoticiaController::class, 'update'])->name('update');
        Route::delete('/{noticia}', [NoticiaController::class, 'destroy'])->name('destroy');
    });
    
    // ============================================
    // ADMINISTRACIÓN DE EMPLEOS
    // ============================================
    Route::prefix('empleos')->name('empleos.')->group(function () {
        Route::get('/', [EmpleoController::class, 'admin'])->name('index');
        Route::get('/crear', [EmpleoController::class, 'create'])->name('create');
        Route::post('/', [EmpleoController::class, 'store'])->name('store');
        Route::get('/{empleo}/editar', [EmpleoController::class, 'edit'])->name('edit');
        Route::put('/{empleo}', [EmpleoController::class, 'update'])->name('update');
        Route::delete('/{empleo}', [EmpleoController::class, 'destroy'])->name('destroy');
    });
    
    // ============================================
    // ADMINISTRACIÓN DE APLICACIONES
    // ============================================
    Route::prefix('aplicaciones')->name('aplicaciones.')->group(function () {
        Route::get('/', [AplicacionController::class, 'admin'])->name('index');
        Route::put('/{aplicacion}/estado', [AplicacionController::class, 'cambiarEstado'])->name('estado');
        Route::delete('/{aplicacion}', [AplicacionController::class, 'destroy'])->name('destroy');
    });
    
    // ============================================
    // ADMINISTRACIÓN DE CARRUSEL
    // ============================================
    Route::resource('carrusel', CarruselController::class)->except(['show']);
    
    // ============================================
    // ADMINISTRACIÓN DE USUARIOS
    // ============================================
    Route::resource('usuarios', UsuarioController::class)->except(['show']);
});