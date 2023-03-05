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
        Schema::create('curso_grupo', function (Blueprint $table) {
            $table->unsignedBigInteger('id_grupo');
      $table->foreign('id_grupo')
        ->references('id_grupo')        
        ->on('grupos')
        ->onDelete('cascade');

      $table->unsignedBigInteger('id_curso');
      $table->foreign('id_curso')
        ->references('id_curso')
        ->on('cursos')
        ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso_grupo');
    }
};
