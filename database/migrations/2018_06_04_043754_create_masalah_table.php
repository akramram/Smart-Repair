<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasalahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('masalah', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('deskripsi');
          $table->string('nama_komponen');
          $table->integer('harga');
          $table->string('imagePath');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('masalah');
    }
}
