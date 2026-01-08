<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carrusel;

class CarruselSeeder extends Seeder
{
    public function run()
    {
        // Limpiar tabla
        Carrusel::truncate();

        $imagenes = [
            [
                'imagen' => 'slide1.jpg',
                'titulo' => 'Bienvenidos a CIMO',
                'descripcion' => 'Colegio de Ingenieros Mecánicos de El Oro',
                'orden' => 1,
                'activo' => true,
            ],
            [
                'imagen' => 'slide2.jpg',
                'titulo' => 'Capacitaciones Profesionales',
                'descripcion' => 'Mantente actualizado con nuestros cursos',
                'orden' => 2,
                'activo' => true,
            ],
            [
                'imagen' => 'slide3.jpg',
                'titulo' => 'Únete a CIMO',
                'descripcion' => 'Forma parte de nuestra comunidad profesional',
                'orden' => 3,
                'activo' => true,
            ],
        ];

        foreach ($imagenes as $imagen) {
            Carrusel::create($imagen);
        }

        $this->command->info('✅ ' . count($imagenes) . ' imágenes de carrusel creadas');
        $this->command->warn('⚠️  Recuerda agregar las imágenes reales en public/uploads/carrusel/');
    }
}
