<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
  protected $fillable = ['nomor_kontainer', 'pengirim', 'nama', 'tanggal_terima', 'keterangan', 'rekanan_id'];

  public function Rekanan(){
    return $this->belongsTo('App\Rekanan');
  }

  public function getUUIDAttribute(){
    return encrypt($this->id);
  }
}
