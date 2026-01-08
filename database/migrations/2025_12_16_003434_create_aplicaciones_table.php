<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('aplicaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empleo_id')->constrained('empleos')->onDelete('cascade');
            $table->string('nombre', 255);
            $table->string('apellido', 255);
            $table->string('email', 255);
            $table->string('telefono', 50);
            $table->string('curriculum');
            $table->text('carta_presentacion')->nullable();
            $table->enum('estado', ['pendiente', 'revisado', 'aceptado', 'rechazado'])->default('pendiente');
            $table->timestamp('fecha_aplicacion')->useCurrent();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aplicaciones');
    }
};
