<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTeleponPenanggungjawabToRekanansTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('rekanans', function (Blueprint $table) {
      $table->string('telepon_penanggungjawab')->after('penanggung_jawab');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('rekanans', function (Blueprint $table) {
      $table->dropColumn('telepon_penanggungjawab');
    });
  }
}
