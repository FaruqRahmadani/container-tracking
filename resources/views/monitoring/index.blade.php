@extends('layouts.app')
@section('page-title', 'Data Monitoring')
@section('content')
<div class="card shadow mb-4">
	<div class="card-body">
		<form class="mb-3" method="post" target="_blank" action="{{ route('monitoringCetak') }}">
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
						<th>Keterangan</th>
						<th>Umur Barang</th>
						<th class="aksi">Aksi</th>
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
						<td class="text-center">{{ $value->umur }}</td>
						<td class="aksi">
							<a href="{!! route('monitoringUpdate', $value->uuid) !!}" class="btn btn-labeled btn-primary btn-xs modalKirim" data-toggle="modal" data-target="#modalKirim"><i class="fa fa-paper-plane"></i> Kirim</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="modal fade" id="modalKirim" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Form Barang Dikirim</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="post">
					@csrf
					{{method_field('put')}}
					<div class="form-group">
						<label>Tanggal Dikirm</label>
						<input type="date" name="tanggal" value="{{now()->toDateString()}}" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea name="keterangan" rows="2" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
