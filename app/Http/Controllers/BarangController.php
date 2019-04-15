<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekanan;
use App\Barang;

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
}
