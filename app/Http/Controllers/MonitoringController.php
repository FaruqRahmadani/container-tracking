<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use HCrypt;

class MonitoringController extends Controller
{
  public function index(){
    $barang = Barang::doesntHave('StatusBarang')->orderBy('tanggal_terima')->get();
    return view('monitoring.index', compact('barang'));
  }

  public function update($id, Request $request){
    $id = HCrypt::decrypt($id);
    $barang = Barang::findOrFail($id);
    $request->request->add(['status' => 1]);
    $barang->StatusBarang()->create($request->all());
    return redirect()->route('monitoring')->with(['alert' => true, 'type' => 'success', 'title' => 'Berhasil', 'message' => 'Barang Proses Kirim']);
  }
}
