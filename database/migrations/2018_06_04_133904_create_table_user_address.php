<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_address', function (Blueprint $table) {
          $table->integer('id_user');
          $table->timestamps();
          $table->string('nama_penerima');
          $table->string('nomor_hp');
          $table->string('alamat');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('user_address');
    }
}
