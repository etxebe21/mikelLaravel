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
        Schema::create('viviendas', function (Blueprint $table) {
            $table->id('ID_VIVIENDA');
            $table->foreignId('ID_EDIFICIO')->nullable();
            $table->foreign('ID_EDIFICIO')->references('ID_EDIFICIO')->on('edificios');
            $table->string('CODIGO_VIVIENDA');
            $table->string('PISO'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viviendas');
    }
};
