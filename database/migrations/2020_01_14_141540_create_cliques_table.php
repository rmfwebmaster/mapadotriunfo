<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCliquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliques', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('lead_id');
            $table->foreign('lead_id')->references('id')->on('leads');

            $table->unsignedInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');

            $table->unsignedInteger('cliques');

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
        Schema::dropIfExists('cliques');
    }
}
