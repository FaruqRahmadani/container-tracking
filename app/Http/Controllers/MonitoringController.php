<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class MonitoringController extends Controller
{
  public function index(){
    $barang = Barang::orderBy('tanggal_terima')->get();
    return view('monitoring.index', compact('barang'));
  }
}
