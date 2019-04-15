<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekanan;
use App\Barang;
use HCrypt;

class BarangController extends Controller
{
  public function index(){
    $barang = Barang::all();
    return view('barang.index', compact('barang'));
  }

  public function create(){
    $rekanan = Rekanan::all();
    return view('barang.create', compact('rekanan'));
  }

  public function store(Request $request){
    $barang = Barang::create($request->all());
    return redirect()->route('barang')->with(['alert' => true, 'type' => 'success', 'title' => 'Berhasil', 'message' => 'Data Berhasil Ditambahkan']);
  }

  public function edit($id){
    $id = HCrypt::decrypt($id);
    $barang = Barang::findOrFail($id);
    $rekanan = Rekanan::all();
    return view('barang.edit', compact('rekanan', 'barang'));
  }

  public function update($id, Request $request){
    $id = HCrypt::decrypt($id);
    $barang = Barang::findOrFail($id);
    $barang->update($request->all());
    return redirect()->route('barang')->with(['alert' => true, 'type' => 'success', 'title' => 'Berhasil', 'message' => 'Data Berhasil Diubah']);
  }

  public function delete($id){
    $id = HCrypt::decrypt($id);
    $barang = Barang::findOrFail($id);
    $barang->delete();
    return redirect()->route('barang')->with(['alert' => true, 'type' => 'success', 'title' => 'Berhasil', 'message' => 'Data Berhasil Dihapus']);
  }
}
