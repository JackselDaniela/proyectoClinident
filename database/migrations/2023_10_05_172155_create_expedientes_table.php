<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            $table->boolean('alergia_penicilina',255);
            $table->string('desc_alergia_p',255);
            $table->boolean('alergia_medicamento',255);
            $table->string('desc_alergia_m',255);
            $table->boolean('trat_actual',255);
            $table->string('desc_trat_actual',255);
            $table->boolean('gravidez',255);
            $table->string('desc_gravidez',255);
            $table->boolean('hemorragia',255);
            $table->string('desc_hemorragia',255);
            $table->boolean('desmayos',255);
            $table->string('desc_desmayos',255);
            $table->boolean('asma',255);
            $table->string('desc_asma',255);
            $table->boolean('diabetes',255);
            $table->string('desc_diabetes',255);
            $table->boolean('hipertension',255);
            $table->string('desc_hipertension',255);
            $table->boolean('epilepsia',255);
            $table->string('desc_epilepsia',255);
            $table->boolean('cancer_actual',255);
            $table->string('desc_cancer_actual',255);
            $table->boolean('cancer_pasado',255);
            $table->string('desc_cancer_pasado',255);
            $table->boolean('vih',255);
            $table->string('desc_vih',255);
            $table->boolean('inmunodeficiente',255);
            $table->string('desc_inmunodeficiente',255);
            $table->boolean('fumador',255);
            $table->string('desc_fumador',255);



            $table->unsignedBigInteger('personas_id')->nullable();
            
            
            $table->foreign('personas_id')->references('id')->on('personas')->onDelete('cascade');

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
        Schema::dropIfExists('expedientes');
    }
}
