<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kosts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kost');
            $table->text('alamat');
            $table->integer('no_tlp');
            $table->integer('harga');
            $table->enum('jenis_kost', ['Pria', 'Wanita']);
            $table->string('kost_pict')->default('img/images.png');
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
        Schema::dropIfExists('kosts');
    }
}
