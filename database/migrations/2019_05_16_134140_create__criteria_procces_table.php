<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriteriaProccesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteria_procces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_criteria1');
            $table->foreign('id_criteria1')->references('id')->on('criterias')->onDelete('cascade');
            $table->unsignedBigInteger('id_criteria2');
            $table->foreign('id_criteria2')->references('id')->on('criterias')->onDelete('cascade');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->double('hasil');

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
        Schema::dropIfExists('_criteria_procces');
    }
}
