<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DepensesLabelBudget extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depenses_label_budget', function (Blueprint $table) {

            $table->timestamps();
            $table->unsignedBigInteger('depense_id');
            $table->foreign('depense_id')->references('id')->on('depenses')->onDelete('cascade');

            $table->unsignedBigInteger('label_budget_id');
            $table->foreign('label_budget_id')->references('id')->on('label_budgets')->onDelete('cascade');

            $table->primary(['depense_id','label_budget_id']);
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
