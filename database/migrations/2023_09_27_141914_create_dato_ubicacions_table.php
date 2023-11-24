<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatoUbicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dato_ubicacions', function (Blueprint $table) {
            $table->id();
            $table->string('estado',100);
            $table->string('municipio',100);
            $table->string('ciudad',100);
            $table->string('parroquia',100);
            $table->string('direccion',100);
            $table->string('telefono',100);
            $table->string('correo',100);
            
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
        Schema::dropIfExists('dato_ubicacions');
    }
}
