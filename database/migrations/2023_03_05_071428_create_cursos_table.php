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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('id_curso')->AUTO_INCREMENT;
            $table->string('nom_curso');

            $table->unsignedBigInteger('id_kit')->nullable; 
            $table->foreign('id_kit') 
            ->nullable()
            ->references('id_kit') 
            ->on('kits') 
            ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
