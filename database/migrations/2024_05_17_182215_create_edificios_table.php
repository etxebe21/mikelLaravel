<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdificiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edificios', function (Blueprint $table) {
            $table->id('ID_EDIFICIO');
            $table->foreignId('ID_PROYECTO')->nullable();
            $table->foreign('ID_PROYECTO')->references('ID_PROYECTO')->on('proyectos');
            $table->string('NOMBRE'); // Nombre del edificio
            $table->string('DIRECCION'); // Dirección del edificio
            $table->string('POBLACION')->nullable();
            $table->integer('N_VIVIENDAS')->nullable();
            $table->decimal('LONG', 8, 6)->nullable();
            $table->decimal('LAT', 8, 6)->nullable();
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edificios');
    }
}
