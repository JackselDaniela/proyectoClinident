<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('doc_identidad',255);
            $table->string('nombre',255);
            $table->string('apellido',255);
            $table->string('fecha_nacimiento',255);
            $table->string('genero',255);
            $table->string('foto',255);

            $table->unsignedBigInteger('dato_ubicacions_id')->nullable();
            $table->foreign('dato_ubicacions_id')->references('id')->on('dato_ubicacions')->onDelete('cascade');

            $table->unsignedBigInteger('tipo_personas_id');
            $table->foreign('tipo_personas_id')->references('id')->on('tipo_personas')->onDelete('cascade');
            
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
        Schema::dropIfExists('personas');
    }
}
