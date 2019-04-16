<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusBarang extends Model
{
  protected $fillable = ['status', 'tanggal', 'keterangan', 'barang_id'];
}
