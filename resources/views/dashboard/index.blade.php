@extends('layouts.app')
@section('page-title', 'Dashboard')
@section('content')
<div class="row">
	<div class="col-xl-4 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Barang</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">{{$barang->count()}}</div>
					</div>
					<div class="col-auto">
						<i class="fas fa fa-archive fa-2x text-primary"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Barang Terkirim</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">{{$barang->whereHas('StatusBarang', function($query){
							$query->where('status', 1);
						})->count()}}</div>
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
						<div class="h5 mb-0 font-weight-bold text-gray-800">{{$barang->doesntHave('StatusBarang')->count()}}</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-exclamation-triangle fa-2x text-danger"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">

	{{-- <div class="col-xl-8 col-lg-7">
		<div class="card shadow mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Statistik Barang</h6>
				<div class="dropdown no-arrow">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
					aria-expanded="false">
					<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
					<div class="dropdown-header">Dropdown Header:</div>
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="chart-area">
				<canvas id="myAreaChart"></canvas>
			</div>
		</div>
	</div> --}}
	{{-- <div class="col-xl-4 col-lg-5">
		<div class="card shadow mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Presentase Status Barang</h6>
			</div>
			<div class="card-body">
				<div class="chart-pie pt-4 pb-2">
					<canvas id="myPieChart"></canvas>
				</div>
				<div class="mt-4 text-center small">
					<span class="mr-2">
						<i class="fas fa-circle text-danger"></i> Belum Terkirim
					</span>
					<span class="mr-2">
						<i class="fas fa-circle text-success"></i> Terkirim
					</span>
				</div>
			</div>
		</div>
	</div> --}}
</div>
@endsection
