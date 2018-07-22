<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pemesanan', function (Blueprint $table) {
          $table->integer('id_pemesanan');
          $table->integer('id_user');
          $table->integer('id_merek');
          $table->integer('id_tipe');
          $table->integer('id_masalah');
          $table->timestamps();
          $table->integer('total_harga_komponen');
          $table->integer('total_harga_jasa');
          $table->integer('harga_pengiriman');
          $table->integer('total_harga');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}
