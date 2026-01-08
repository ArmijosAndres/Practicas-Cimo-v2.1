<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aplicacion extends Model
{
    protected $table = 'aplicaciones';
    
    protected $fillable = [
        'empleo_id',
        'nombre',
        'apellido',
        'email',
        'telefono',
        'curriculum',
        'carta_presentacion',
        'estado',
        'fecha_aplicacion'
    ];

    protected $casts = [
        'fecha_aplicacion' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relación con empleo
    public function empleo()
    {
        return $this->belongsTo(Empleo::class);
    }

    // Estados posibles
    const ESTADO_PENDIENTE = 'pendiente';
    const ESTADO_REVISADO = 'revisado';
    const ESTADO_ACEPTADO = 'aceptado';
    const ESTADO_RECHAZADO = 'rechazado';

    // Scope por estado
    public function scopePorEstado($query, $estado)
    {
        return $query->where('estado', $estado);
    }

    // Scope pendientes
    public function scopePendientes($query)
    {
        return $query->where('estado', self::ESTADO_PENDIENTE);
    }
}
