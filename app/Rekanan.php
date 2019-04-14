<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rekanan extends Model
{
  use SoftDeletes;

  protected $fillable = ['nama', 'alamat', 'nomor_telepon', 'email', 'penanggung_jawab', 'telepon_penanggungjawab'];

  public function getUUIDAttribute(){
    return encrypt($this->id);
  }
}
