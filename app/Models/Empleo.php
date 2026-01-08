<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleo extends Model
{
    use SoftDeletes;

    protected $table = 'empleos';
    
    protected $fillable = [
        'titulo',
        'descripcion',
        'empresa',
        'ubicacion',
        'salario',
        'tipo_contrato',
        'area',
        'experiencia_requerida',
        'fecha_limite',
        'activo',
        'requisitos',
        'beneficios'
    ];

    protected $casts = [
        'activo' => 'boolean',
        'fecha_limite' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relación con aplicaciones
    public function aplicaciones()
    {
        return $this->hasMany(Aplicacion::class);
    }

    // Scope para empleos activos
    public function scopeActivos($query)
    {
        return $query->where('activo', true);
    }

    // Scope para empleos vigentes
    public function scopeVigentes($query)
    {
        return $query->where('fecha_limite', '>=', now())
                    ->orWhereNull('fecha_limite');
    }
}
