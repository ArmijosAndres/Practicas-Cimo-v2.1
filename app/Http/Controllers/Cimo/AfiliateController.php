<?php

namespace App\Http\Controllers\Cimo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AfiliateController extends Controller
{
    /**
     * Muestra el formulario para subir comprobante de pago
     */
    public function pagar()
    {
        return view('cimo.afiliate.pagar');
    }

    /**
     * Procesa el comprobante de pago
     */
    public function procesarPago(Request $request)
    {
        // Validar datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'comprobante' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120', // 5MB max
        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'nombre.max' => 'El nombre no puede superar los 255 caracteres',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'Ingrese un correo electrónico válido',
            'telefono.required' => 'El teléfono es obligatorio',
            'comprobante.required' => 'Debe subir el comprobante de pago',
            'comprobante.mimes' => 'El comprobante debe ser una imagen (JPG, PNG) o PDF',
            'comprobante.max' => 'El archivo no debe superar los 5MB',
        ]);

        // Procesar archivo
        if ($request->hasFile('comprobante')) {
            $file = $request->file('comprobante');
            
            // Generar nombre único para el archivo
            $nombreArchivo = time() . '_' . Str::slug($validated['nombre']) . '.' . $file->getClientOriginalExtension();
            
            // Guardar en carpeta public/uploads/comprobantes
            $rutaArchivo = $file->move(public_path('uploads/comprobantes'), $nombreArchivo);
            
            $validated['comprobante_ruta'] = 'uploads/comprobantes/' . $nombreArchivo;
        }

        // OPCIÓN 1: Guardar en base de datos (si creas modelo Afiliacion)
        /*
        \App\Models\Afiliacion::create([
            'nombre' => $validated['nombre'],
            'email' => $validated['email'],
            'telefono' => $validated['telefono'],
            'comprobante' => $validated['comprobante_ruta'],
            'estado' => 'pendiente',
        ]);
        */

        // OPCIÓN 2: Enviar por email (requiere configurar MAIL en .env)
        /*
        Mail::to('afiliaciones@cimo.com.ec')->send(new ComprobanteRecibido($validated));
        */

        // OPCIÓN 3: Solo mostrar mensaje de éxito (temporal)
        // Guardar datos en sesión para mostrar en la vista de confirmación
        session()->flash('datos', [
            'nombre' => $validated['nombre'],
            'email' => $validated['email'],
            'telefono' => $validated['telefono'],
        ]);
        
        session()->flash('email', $validated['email']);

        // Redirigir a página de confirmación
        return redirect()->route('cimo.afiliate.confirmacion')
            ->with('success', '¡Comprobante enviado exitosamente! Revisaremos tu información pronto.');
    }

    /**
     * Muestra la página de confirmación
     */
    public function confirmacion()
    {
        return view('cimo.afiliate.procesar-pago');
    }
}