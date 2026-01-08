<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    protected $table = 'capacitaciones';
    
    protected $fillable = [
        'titulo',
        'descripcion',
        'instructor',
        'fecha_inicio',
        'fecha_fin',
        'duracion_horas',
        'modalidad',
        'precio',
        'cupos_disponibles',
        'imagen',
        'activo',
        'requisitos'
    ];

    protected $casts = [
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
        'activo' => 'boolean',
        'precio' => 'decimal:2',
        'cupos_disponibles' => 'integer',
        'duracion_horas' => 'integer'
    ];

    // Modalidades
    const MODALIDAD_PRESENCIAL = 'presencial';
    const MODALIDAD_VIRTUAL = 'virtual';
    const MODALIDAD_HIBRIDA = 'hibrida';

    // Scope para capacitaciones activas
    public function scopeActivas($query)
    {
        return $query->where('activo', true);
    }

    // Scope para capacitaciones próximas
    public function scopeProximas($query)
    {
        return $query->where('fecha_inicio', '>=', now());
    }

    // Verificar si tiene cupos disponibles
    public function tieneCupos()
    {
        return $this->cupos_disponibles > 0;
    }
}
