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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id('ID_PROYECTO');
            $table->string('NOMBRE_PROYECTO');
            $table->string('CODIGO_PROYECTO');
            $table->string('DIRECCION'); // Dirección del edificio
            $table->string('POBLACION')->nullable();
            $table->integer('N_EDIFICIOS')->nullable();
            $table->decimal('LONG', 8, 6)->nullable();
            $table->decimal('LAT', 8, 6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
