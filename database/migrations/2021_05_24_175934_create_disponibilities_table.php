<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisponibilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibilities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_doctors')->unsigned();
            $table->foreign('id_doctors')->references('id')->on('doctors');

            $table->date('dispo');
            $table->time('heure_debut');
            $table->time('heure_fin');
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
        Schema::dropIfExists('disponibilities');
    }
}
