<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticia extends Model
{
    use SoftDeletes;

    protected $table = 'noticias';
    
    protected $fillable = [
        'titulo',
        'contenido',
        'imagen',
        'autor',
        'publicado',
        'destacado',
        'fecha_publicacion'
    ];

    protected $casts = [
        'publicado' => 'boolean',
        'destacado' => 'boolean',
        'fecha_publicacion' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Scope para noticias publicadas
    public function scopePublicadas($query)
    {
        return $query->where('publicado', true);
    }

    // Scope para noticias destacadas
    public function scopeDestacadas($query)
    {
        return $query->where('destacado', true);
    }
}
