<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_datos_generales')->unsigned();
            $table->foreign('id_datos_generales')->references('id')->on('datos_generales');
            $table->float('peso');
            $table->float('peso_habitual');
            $table->float('estatura');
            $table->float('cintura');
            $table->float('cadera');
            $table->float('circunferencia');
            $table->boolean('ejercicio');
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
        Schema::drop('historials');
    }
}
