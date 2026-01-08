<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrusel extends Model
{
    protected $table = 'carrusel';
    
    protected $fillable = [
        'imagen',
        'titulo',
        'descripcion',
        'enlace',
        'orden',
        'activo'
    ];

    protected $casts = [
        'activo' => 'boolean',
        'orden' => 'integer',
    ];

    // Scope para imágenes activas
    public function scopeActivas($query)
    {
        return $query->where('activo', true)->orderBy('orden');
    }
}
