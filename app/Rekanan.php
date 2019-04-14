<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekanan extends Model
{
  protected $fillable = ['nama', 'alamat', 'nomor_telepon', 'email', 'penanggung_jawab', 'telepon_penanggungjawab'];

  public function getUUIDAttribute(){
    return encrypt($this->id);
  }
}
