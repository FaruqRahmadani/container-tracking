<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Barang extends Model
{
  protected $fillable = ['nomor_kontainer', 'pengirim', 'nama', 'tanggal_terima', 'keterangan', 'rekanan_id'];

  public function Rekanan(){
    return $this->belongsTo('App\Rekanan');
  }

  public function getUUIDAttribute(){
    return encrypt($this->id);
  }

  public function getUmurAttribute(){
    $umur = Carbon::create($this->tanggal_terima)->diffInDays(now());
    return $umur;
  }

  public function StatusBarang(){
    return $this->hasMany('App\StatusBarang');
  }
}
