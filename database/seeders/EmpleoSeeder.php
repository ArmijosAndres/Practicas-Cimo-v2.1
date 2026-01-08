<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleo;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EmpleoSeeder extends Seeder
{
    public function run()
    {
        // Deshabilitar restricciones de foreign keys temporalmente
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // Limpiar tablas relacionadas primero
        \App\Models\Aplicacion::truncate();
        \App\Models\Empleo::truncate();
        
        // Habilitar restricciones de nuevo
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $empleos = [
            [
                'titulo' => 'Ingeniero Mecánico Senior',
                'descripcion' => 'Empresa líder en el sector industrial busca Ingeniero Mecánico con amplia experiencia en diseño y mantenimiento de sistemas industriales. Será responsable de supervisar proyectos de ingeniería y liderar equipos técnicos.',
                'empresa' => 'Industrias del Pacífico S.A.',
                'ubicacion' => 'Machala, El Oro',
                'salario' => '$1,800 - $2,500',
                'tipo_contrato' => 'Tiempo completo',
                'area' => 'Manufactura',
                'experiencia_requerida' => '5+ años',
                'requisitos' => "- Título de Ingeniero Mecánico\n- 5 años de experiencia mínima\n- Conocimientos en AutoCAD y SolidWorks\n- Experiencia en gestión de proyectos\n- Inglés intermedio",
                'beneficios' => "- Seguro médico privado\n- Bonos por desempeño\n- Capacitación continua\n- Ambiente laboral profesional",
                'fecha_limite' => Carbon::now()->addDays(30),
                'activo' => true,
            ],
            [
                'titulo' => 'Ingeniero de Mantenimiento',
                'descripcion' => 'Buscamos Ingeniero Mecánico para el área de mantenimiento preventivo y correctivo de maquinaria industrial. Deberá planificar y ejecutar programas de mantenimiento.',
                'empresa' => 'AgroExport S.A.',
                'ubicacion' => 'Santa Rosa, El Oro',
                'salario' => '$1,200 - $1,600',
                'tipo_contrato' => 'Tiempo completo',
                'area' => 'Mantenimiento',
                'experiencia_requerida' => '2-3 años',
                'requisitos' => "- Título de Ingeniero Mecánico\n- Experiencia en mantenimiento industrial\n- Conocimientos de mecánica de fluidos\n- Disponibilidad para trabajar en turnos rotativos",
                'beneficios' => "- Seguro de salud\n- Alimentación\n- Transporte\n- Bonificaciones",
                'fecha_limite' => Carbon::now()->addDays(25),
                'activo' => true,
            ],
            [
                'titulo' => 'Ingeniero de Diseño CAD',
                'descripcion' => 'Empresa de diseño y fabricación requiere Ingeniero Mecánico especializado en diseño asistido por computadora para desarrollo de productos industriales.',
                'empresa' => 'TecnoDesign Ltda.',
                'ubicacion' => 'Machala, El Oro',
                'salario' => '$1,400 - $1,800',
                'tipo_contrato' => 'Tiempo completo',
                'area' => 'Diseño',
                'experiencia_requerida' => '2+ años',
                'requisitos' => "- Título de Ingeniero Mecánico\n- Dominio avanzado de AutoCAD y SolidWorks\n- Experiencia en diseño de componentes mecánicos\n- Conocimientos de análisis FEA (deseable)",
                'beneficios' => "- Horario flexible\n- Capacitaciones técnicas\n- Bonos por proyectos\n- Ambiente innovador",
                'fecha_limite' => Carbon::now()->addDays(20),
                'activo' => true,
            ],
            [
                'titulo' => 'Supervisor de Producción',
                'descripcion' => 'Se requiere Ingeniero Mecánico para supervisar procesos de producción, controlar calidad y optimizar operaciones en planta industrial.',
                'empresa' => 'Metalúrgica del Oro S.A.',
                'ubicacion' => 'Pasaje, El Oro',
                'salario' => '$1,600 - $2,000',
                'tipo_contrato' => 'Tiempo completo',
                'area' => 'Producción',
                'experiencia_requerida' => '3+ años',
                'requisitos' => "- Título de Ingeniero Mecánico\n- Experiencia en supervisión de personal\n- Conocimientos de Lean Manufacturing\n- Habilidades de liderazgo\n- Disponibilidad inmediata",
                'beneficios' => "- Seguro médico familiar\n- Utilidades\n- Capacitaciones en gestión\n- Crecimiento profesional",
                'fecha_limite' => Carbon::now()->addDays(15),
                'activo' => true,
            ],
            [
                'titulo' => 'Ingeniero Junior - Proyectos',
                'descripcion' => 'Oportunidad para recién graduados o con poca experiencia. Apoyo en desarrollo de proyectos de ingeniería mecánica bajo supervisión de ingenieros senior.',
                'empresa' => 'Consultoría Técnica CIMO',
                'ubicacion' => 'Machala, El Oro',
                'salario' => '$800 - $1,000',
                'tipo_contrato' => 'Medio tiempo',
                'area' => 'Consultoría',
                'experiencia_requerida' => 'Recién graduado',
                'requisitos' => "- Título de Ingeniero Mecánico (o por graduarse)\n- Conocimientos básicos de CAD\n- Proactividad y ganas de aprender\n- Trabajo en equipo",
                'beneficios' => "- Experiencia profesional\n- Mentoría de expertos\n- Horario flexible\n- Posibilidad de contratación permanente",
                'fecha_limite' => Carbon::now()->addDays(45),
                'activo' => true,
            ],
        ];

        foreach ($empleos as $empleo) {
            \App\Models\Empleo::create($empleo);
        }

        $this->command->info('✅ ' . count($empleos) . ' empleos creados exitosamente');
    }
}
