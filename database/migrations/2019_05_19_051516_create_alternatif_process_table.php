<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternatifProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatif_procces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_kost1');
            $table->foreign('id_kost1')->references('id')->on('kosts')->onDelete('cascade');
            $table->unsignedBigInteger('id_kost2');
            $table->foreign('id_kost2')->references('id')->on('kosts')->onDelete('cascade');
            $table->unsignedBigInteger('id_criteria');
            $table->foreign('id_criteria')->references('id')->on('criterias')->onDelete('cascade');
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
        Schema::dropIfExists('alternatif_process');
    }
}
