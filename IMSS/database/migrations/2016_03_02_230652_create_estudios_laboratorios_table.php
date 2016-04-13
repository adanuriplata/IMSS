<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiosLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios_laboratorios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_datos_generales')->unsigned();
            $table->foreign('id_datos_generales')->references('id')->on('datos_generales');
            $table->float('hemoglobina');
            $table->float('hematrocitos');
            $table->float('leucocitos');
            $table->float('glucosa');
            $table->float('urea');
            $table->float('acido-urico');
            $table->float('creatinina');
            $table->float('proteinas-totales');
            $table->float('albumina');
            $table->float('colesterol');
            $table->float('trigliceridos');
            $table->float('bun');
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
        Schema::drop('estudios_laboratorios');
    }
}
