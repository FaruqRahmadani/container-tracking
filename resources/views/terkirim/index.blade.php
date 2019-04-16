@extends('layouts.app')
@section('page-title', 'Data Monitoring')
@section('content')
<div class="card shadow mb-4">
	<div class="card-body">
		<form class="mb-3" method="post" target="_blank" action="">
			@csrf
			<div class="form-row align-items-center">
				<div class="col-auto">
					<label class="sr-only">Tanggal Awal</label>
					<input type="date" class="form-control mb-2" value="{{now()->toDateString()}}" name="tanggal_awal">
				</div>
				<div class="col-auto">
					<label class="sr-only">Tanggal Akhir</label>
					<input type="date" class="form-control mb-2" value="{{now()->toDateString()}}" name="tanggal_akhir">
				</div>
				<div class="col-auto">
					<button type="submit" class="btn btn-primary mb-2"><i class="fa fa-print"></i> Cetak</button>
				</div>
			</div>
		</form>
		<div class="table-responsive">
			<table class="table table-bordered dataTable" id="" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>#</th>
						<th>Nomor Kontainer</th>
						<th>Tanggal Terima</th>
						<th>Nama Barang</th>
						<th>Pengirim</th>
						<th>Penerima</th>
						<th>Keterangan Barang</th>
						<th>Tanggal Terkirim</th>
						<th>Keterangan Pengiriman</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($barang as $value)
						<tr>
							<td class="penomoran">{{$loop->iteration}}</td>
							<td class="text-center">{{$value->nomor_kontainer}}</td>
							<td>{{HDate::formatDate($value->tanggal_terima)}}</td>
							<td>{{$value->nama}}</td>
							<td>{{$value->pengirim}}</td>
							<td>{{$value->Rekanan->nama}}</td>
							<td>{!! nl2br($value->keterangan) !!}</td>
							<td>{{HDate::formatDate($value->StatusBarang->last()->tanggal)}}</td>
							<td>{!! nl2br($value->StatusBarang->last()->keterangan) !!}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
