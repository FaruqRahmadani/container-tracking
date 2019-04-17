<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use HCrypt;
use PDF;

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

	public function generatePDF(Request $request){
		$barang = Barang::whereBetween('tanggal_terima',[$request->tanggal_awal, $request->tanggal_akhir])->doesntHave('StatusBarang')->orderBy('tanggal_terima')->get();
		$pdf = PDF::loadview('monitoring.print', compact('request', 'barang'));
		$pdf->setPaper('A4', 'landscape');
    return $pdf->stream("data_monitoring.pdf");
	}
}
