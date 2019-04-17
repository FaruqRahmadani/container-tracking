<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('barangs', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('nomor_kontainer');
      $table->string('pengirim');
      $table->string('nama');
      $table->date('tanggal_terima');
      $table->text('keterangan');
      $table->integer('rekanan_id');
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
    Schema::dropIfExists('barangs');
  }
}
