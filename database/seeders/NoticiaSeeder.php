<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Noticia;
use Carbon\Carbon;

class NoticiaSeeder extends Seeder
{
    public function run()
    {
        // Limpiar tabla
        Noticia::truncate();

        $noticias = [
            [
                'titulo' => 'CIMO celebra su aniversario con gran evento institucional',
                'contenido' => 'El Colegio de Ingenieros Mecánicos de El Oro celebró su aniversario con un evento que reunió a profesionales de toda la provincia. Durante la ceremonia se reconoció la labor de ingenieros destacados y se presentaron proyectos innovadores para el desarrollo de la región.',
                'autor' => 'Directiva CIMO',
                'publicado' => true,
                'destacado' => true,
                'fecha_publicacion' => Carbon::now()->subDays(2),
            ],
            [
                'titulo' => 'Nueva capacitación en energías renovables',
                'contenido' => 'Se anuncia un programa de capacitación especializado en energías renovables y sostenibilidad. El curso está dirigido a ingenieros mecánicos que deseen actualizarse en las tecnologías más recientes del sector energético.',
                'autor' => 'Comisión de Capacitación',
                'publicado' => true,
                'destacado' => true,
                'fecha_publicacion' => Carbon::now()->subDays(5),
            ],
            [
                'titulo' => 'Convenio firmado con la Universidad Técnica de Machala',
                'contenido' => 'CIMO firma un importante convenio de cooperación con la Universidad Técnica de Machala para fomentar la investigación y el desarrollo profesional de estudiantes de Ingeniería Mecánica.',
                'autor' => 'Presidencia CIMO',
                'publicado' => true,
                'destacado' => false,
                'fecha_publicacion' => Carbon::now()->subDays(7),
            ],
            [
                'titulo' => 'Seminario: Industria 4.0 y transformación digital',
                'contenido' => 'Exitoso seminario sobre Industria 4.0 donde expertos nacionales e internacionales compartieron sus conocimientos sobre la transformación digital en el sector industrial.',
                'autor' => 'Comité Técnico',
                'publicado' => true,
                'destacado' => false,
                'fecha_publicacion' => Carbon::now()->subDays(10),
            ],
            [
                'titulo' => 'CIMO participa en feria de innovación tecnológica',
                'contenido' => 'Representantes del colegio participaron en la feria de innovación tecnológica presentando proyectos desarrollados por ingenieros mecánicos de la provincia.',
                'autor' => 'Relaciones Públicas',
                'publicado' => true,
                'destacado' => false,
                'fecha_publicacion' => Carbon::now()->subDays(15),
            ],
            [
                'titulo' => 'Programa de mentoring para nuevos profesionales',
                'contenido' => 'Se lanza el programa de mentoring que conectará a ingenieros experimentados con recién graduados para facilitar su inserción laboral y desarrollo profesional.',
                'autor' => 'Comisión de Desarrollo',
                'publicado' => true,
                'destacado' => false,
                'fecha_publicacion' => Carbon::now()->subDays(20),
            ],
        ];

        foreach ($noticias as $noticia) {
            Noticia::create($noticia);
        }

        $this->command->info('✅ ' . count($noticias) . ' noticias creadas exitosamente');
    }
}
