<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class DashboardController extends Controller
{
  public function index(){
    $barang = new Barang;
    return view('dashboard.index', compact('barang'));
  }
}
