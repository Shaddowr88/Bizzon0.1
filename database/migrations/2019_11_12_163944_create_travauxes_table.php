<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravauxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travaux', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lieu');
            $table->string('date');


            $table->unsignedBigInteger('batiment_id');
            $table->foreign('batiment_id')->references('id')->on('batiments')->onDelete('cascade');

             $table->unsignedBigInteger('appartement_id');
             $table->foreign('appartement_id')->references('id')->on('appartements')->onDelete('cascade');

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
        Schema::dropIfExists('travaux');
    }
}
