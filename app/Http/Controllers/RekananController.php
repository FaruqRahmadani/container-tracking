<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekanan;

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
    return redirect()->route('rekananIndex')->with(['alert' => true, 'type' => 'success', 'title' => 'Berhasil', 'message' => 'Data Berhasil Ditambahkan']);
  }
}
