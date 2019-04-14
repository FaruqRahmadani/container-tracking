<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekanansTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('rekanans', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('nama');
      $table->text('alamat');
      $table->string('nomor_telepon');
      $table->string('email');
      $table->string('penanggung_jawab');
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
    Schema::dropIfExists('rekanans');
  }
}
