<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    // IMPORTANTE: Especificar el nombre de la tabla
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password',
        'rol',
        'activo',
        'telefono',
        'foto',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'activo' => 'boolean',
        ];
    }

    // Roles
    const ROL_ADMIN = 'admin';
    const ROL_EDITOR = 'editor';
    const ROL_USUARIO = 'usuario';

    public function esAdmin()
    {
        return $this->rol === self::ROL_ADMIN;
    }

    public function esEditor()
    {
        return $this->rol === self::ROL_EDITOR;
    }

    public function scopeActivos($query)
    {
        return $query->where('activo', true);
    }
}