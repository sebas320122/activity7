<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario')->AUTO_INCREMENT;
            $table->string('nombre');
            $table->string('email');
            $table->string('codigo');
            $table->string('rol');

            $table->unsignedBigInteger('id_grupo')->nullable(); 
            $table->foreign('id_grupo') 
            ->nullable()
            ->references('id_grupo') 
            ->on('grupos') 
            ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
