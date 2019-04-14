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
}
