<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->text('contenido');
            $table->string('imagen')->nullable();
            $table->string('autor', 100)->nullable();
            $table->boolean('publicado')->default(false);
            $table->boolean('destacado')->default(false);
            $table->timestamp('fecha_publicacion')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('noticias');
    }
};