<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->command->info('🌱 Iniciando seeders...');
        $this->command->newLine();

        $this->call([
            UsuarioSeeder::class,
            NoticiaSeeder::class,
            EmpleoSeeder::class,
            CarruselSeeder::class,
        ]);

        $this->command->newLine();
        $this->command->info('🎉 ¡Todos los seeders ejecutados exitosamente!');
        $this->command->newLine();
        $this->command->table(
            ['Usuario', 'Email', 'Contraseña'],
            [
                ['Admin', 'admin@cimo.com.ec', 'admin123'],
                ['Editor', 'editor@cimo.com.ec', 'editor123'],
                ['Usuario', 'juan@ejemplo.com', 'usuario123'],
            ]
        );
    }
}