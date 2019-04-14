@extends('layouts.app')
@section('page-title', 'Dashboard')
@section('content')
<div class="row">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Barang</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">40000</div>
          </div>
          <div class="col-auto">
            <i class="fas fa fa-archive fa-2x text-primary"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Barang Terkirim</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">215000</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-check-circle fa-2x text-success"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Barang Belum Terkirim</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">10000</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-exclamation-triangle fa-2x text-danger"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
