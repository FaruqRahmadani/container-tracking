<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusBarangsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('status_barangs', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->tinyInteger('status')->default(0);
      $table->date('tanggal');
      $table->text('keterangan');
      $table->integer('barang_id');
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
    Schema::dropIfExists('status_barangs');
  }
}
