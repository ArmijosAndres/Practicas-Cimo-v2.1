<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        // Limpiar tabla
        User::truncate();

        // Usuario Admin
        User::create([
            'nombre' => 'Administrador',
            'apellido' => 'CIMO',
            'email' => 'admin@cimo.com.ec',
            'password' => Hash::make('admin123'),
            'rol' => 'admin',
            'activo' => true,
            'telefono' => '0987654321',
        ]);

        // Usuario Editor
        User::create([
            'nombre' => 'Editor',
            'apellido' => 'CIMO',
            'email' => 'editor@cimo.com.ec',
            'password' => Hash::make('editor123'),
            'rol' => 'editor',
            'activo' => true,
            'telefono' => '0987654322',
        ]);

        // Usuario Normal
        User::create([
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'email' => 'juan@ejemplo.com',
            'password' => Hash::make('usuario123'),
            'rol' => 'usuario',
            'activo' => true,
            'telefono' => '0987654323',
        ]);

        $this->command->info('✅ 3 usuarios creados exitosamente');
    }
}
