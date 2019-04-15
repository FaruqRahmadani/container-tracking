<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekanan;
use HCrypt;
use PDF;

class RekananController extends Controller
{
  public function index(){
    $rekanan = Rekanan::all();
    return view('rekanan.index', compact('rekanan'));
  }

  public function create(){
    return view('rekanan.create');
  }

  public function store(Request $request){
    $rekanan = Rekanan::create($request->all());
    return redirect()->route('rekanan')->with(['alert' => true, 'type' => 'success', 'title' => 'Berhasil', 'message' => 'Data Berhasil Ditambahkan']);
  }

  public function edit($id){
    $id = HCrypt::decrypt($id);
    $rekanan = Rekanan::findOrFail($id);
    return view('rekanan.edit', compact('rekanan'));
  }

  public function update($id, Request $request){
    $id = HCrypt::decrypt($id);
    $rekanan = Rekanan::findOrFail($id);
    $rekanan->update($request->all());
    return redirect()->route('rekanan')->with(['alert' => true, 'type' => 'success', 'title' => 'Berhasil', 'message' => 'Data Berhasil Diubah']);
  }

  public function delete($id){
    $id = HCrypt::decrypt($id);
    $rekanan = Rekanan::findOrFail($id);
    $rekanan->delete();
    return redirect()->route('rekanan')->with(['alert' => true, 'type' => 'success', 'title' => 'Berhasil', 'message' => 'Data Berhasil Dihapus']);
	}
	public function generatePDF(){
		$rekanan = Rekanan::all();
		$pdf = PDF::loadview('rekanan.print', compact('rekanan'));
		$pdf->setPaper('A4', 'landscape');
    return $pdf->stream("data_rekanan.pdf");
  }
}
