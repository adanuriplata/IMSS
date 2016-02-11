<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_datos_generales')->unsigned();
            $table->foreign('id_datos_generales')->references('id')->on('datos_generales');
            $table->boolean('bajo_peso');
            $table->boolean('sobrepeso');
            $table->boolean('desnutricion');
            $table->boolean('obesidad');
            $table->boolean('hipertension');
            $table->boolean('diabetes');
            $table->boolean('cardiopatias');
            $table->boolean('nefropatias');
            $table->boolean('cancer');
            $table->boolean('gastritis');
            $table->boolean('colitis');
            $table->boolean('alcoholismo');
            $table->boolean('tabaquismo');
            $table->text('alergias');
            $table->text('medicamentos');
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
        Schema::drop('antecedentes');
    }
}
