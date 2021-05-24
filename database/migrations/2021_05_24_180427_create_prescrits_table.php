<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescritsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescrits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_resultat_consultations')->unsigned();
            $table->foreign('id_resultat_consultations')->references('id')->on('resultat_consultations');

            $table->string('nom');
            $table->integer('num_dossier');
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
        Schema::dropIfExists('prescrits');
    }
}
