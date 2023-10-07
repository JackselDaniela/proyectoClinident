<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroTratamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_tratamientos', function (Blueprint $table) {
            $table->id();
            
            $table->string('nom_tratamiento',255);
            $table->string('costo_tratamiento',100);
            $table->string('codigo_tratamiento',100);
            $table->string('fecha_añadido',100);

            $table->unsignedBigInteger('estatuses_id')->nullable();
            $table->unsignedBigInteger('especialidads_id')->nullable();
            $table->foreign('estatuses_id')->references('id')->on('estatuses')->onDelete('cascade');
            $table->foreign('especialidads_id')->references('id')->on('especialidads')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_tratamientos');
    }
}
