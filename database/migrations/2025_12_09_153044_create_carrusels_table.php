<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('carrusel', function (Blueprint $table) {
            $table->id();
            $table->string('imagen');
            $table->string('titulo')->nullable();
            $table->string('descripcion', 500)->nullable();
            $table->string('enlace')->nullable();
            $table->integer('orden')->default(0);
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carrusel');
    }
};