<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekanan extends Model
{
  protected $fillable = ['nama', 'alamat', 'nomor_telepon', 'email', 'penanggung_jawab'];
}
