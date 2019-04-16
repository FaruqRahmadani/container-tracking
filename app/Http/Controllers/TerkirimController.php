<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class TerkirimController extends Controller
{
  public function index(){
    $barang = Barang::whereHas('StatusBarang', function($query){
      $query->where('status', 1);
    })->get();
    return view('terkirim.index', compact('barang'));
  }
}
