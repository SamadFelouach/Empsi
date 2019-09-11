<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre','150');
            $table->string('element');
            $table->string('professeur');
            $table->string('date_seance');
            $table->string('heure_debut');
            $table->string('heure_fin');
            $table->string('sommaire');
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
        Schema::dropIfExists('modules');
    }
}
