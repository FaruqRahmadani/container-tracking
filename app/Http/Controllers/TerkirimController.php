<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use PDF;

class TerkirimController extends Controller
{
  public function index(){
    $barang = Barang::whereHas('StatusBarang', function($query){
      $query->where('status', 1);
    })->get();
    return view('terkirim.index', compact('barang'));
	}
	public function generatePDF(Request $request){
		$barang = Barang::whereBetween('tanggal_terima',[$request->tanggal_awal, $request->tanggal_akhir])->whereHas('StatusBarang', function($query){
      $query->where('status', 1);
    })->get();
		$pdf = PDF::loadview('terkirim.print', compact('request', 'barang'));
		$pdf->setPaper('A4', 'landscape');
    return $pdf->stream("data_terkirim.pdf");
	}
}
