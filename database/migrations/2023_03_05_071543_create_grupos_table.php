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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id('id_grupo')->AUTO_INCREMENT;
            $table->string('nom_grupo');
            
            $table->unsignedBigInteger('id_curso')->nullable; 
            $table->foreign('id_curso') 
            ->nullable()
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
        Schema::dropIfExists('grupos');
    }
};
