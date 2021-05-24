<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_patients')->unsigned();
            $table->foreign('id_patients')->references('id')->on('patients');
            $table->integer('id_doctors')->unsigned();
            $table->foreign('id_doctors')->references('id')->on('doctors');

            $table->date('date_consultation');
            $table->string('symptome');
            $table->time('heure_debut');
            $table->text('description');

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
        Schema::dropIfExists('consultations');
    }
}
