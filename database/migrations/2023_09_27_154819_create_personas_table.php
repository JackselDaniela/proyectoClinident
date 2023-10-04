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
            $table->string('ocupacion',255);
            $table->string('foto',255);
            
            
            $table->unsignedBigInteger('generos_id')->nullable();
            $table->unsignedBigInteger('especialidads_id')->nullable();
            
            
            $table->foreign('generos_id')->references('id')->on('generos')->onDelete('cascade');
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
        Schema::dropIfExists('personas');
    }
}
