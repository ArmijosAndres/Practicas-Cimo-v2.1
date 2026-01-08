<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('empleos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->text('descripcion');
            $table->string('empresa', 255);
            $table->string('ubicacion', 255);
            $table->string('salario', 100)->nullable();
            $table->string('tipo_contrato', 100)->nullable();
            $table->string('area', 100)->nullable();
            $table->string('experiencia_requerida', 100)->nullable();
            $table->text('requisitos')->nullable();
            $table->text('beneficios')->nullable();
            $table->date('fecha_limite')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleos');
    }
};