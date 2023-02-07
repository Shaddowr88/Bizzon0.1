<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('tarif');
            $table->unsignedBigInteger('copro_id');
            $table->foreign('copro_id')
                ->references('id')
                ->on('copros')
                ->onDelete('cascade');

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
        Schema::dropIfExists('watters');
    }
}
