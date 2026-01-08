<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('capacitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('instructor')->nullable();
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_fin');
            $table->integer('duracion_horas')->nullable();
            $table->enum('modalidad', ['presencial', 'virtual', 'hibrida'])->default('presencial');
            $table->decimal('precio', 10, 2)->default(0);
            $table->integer('cupos_disponibles')->default(0);
            $table->string('imagen')->nullable();
            $table->text('requisitos')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('capacitaciones');
    }
};