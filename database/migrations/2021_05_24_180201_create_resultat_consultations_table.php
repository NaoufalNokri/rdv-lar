<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultatConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultat_consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_consultations')->unsigned();
            $table->foreign('id_consultations')->references('id')->on('consultations');

            $table->double('temperature');
            $table->double('tension');
            $table->double('poids');
            $table->date('date_resultat');
            $table->string('alergie');


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
        Schema::dropIfExists('resultat_consultations');
    }
}
