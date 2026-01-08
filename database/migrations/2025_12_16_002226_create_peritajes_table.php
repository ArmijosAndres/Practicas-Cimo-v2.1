<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('peritajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('especialidad');
            $table->string('ubicacion');
            $table->string('telefono', 20);
            $table->string('correo');
            $table->text('descripcion');
            $table->string('archivo')->nullable();
            $table->enum('estado', ['pendiente', 'contactado', 'aprobado', 'rechazado'])->default('pendiente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peritajes');
    }
};