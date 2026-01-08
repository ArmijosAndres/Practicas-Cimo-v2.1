<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->enum('rol', ['admin', 'editor', 'usuario'])->default('usuario');
            $table->boolean('activo')->default(true);
            $table->string('telefono', 20)->nullable();
            $table->string('foto')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        // Insertar usuario admin inicial
        DB::table('usuarios')->insert([
            'nombre' => 'Administrador',
            'apellido' => 'CIMO',
            'email' => 'admin@cimo.com.ec',
            'password' => Hash::make('admin123'),
            'rol' => 'admin',
            'activo' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};