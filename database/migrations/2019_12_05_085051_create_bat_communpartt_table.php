<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatCommunparttTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batiment_partie', function (Blueprint $table) {

                $table->unsignedBigInteger('partie_id');
                $table->foreign('partie_id')->references('id')->on('parties')->onDelete('cascade');

               $table->unsignedBigInteger('batiment_id');
                $table->foreign('batiment_id')->references('id')->on('batiments')->onDelete('cascade');

                $table->primary(['partie_id', 'batiment_id']);

                Schema::enableForeignKeyConstraints();

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
        Schema::dropIfExists('batiment_partie');
    }
}
