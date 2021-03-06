@extends('layouts.app')
@section('page-title', 'Data Barang')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<div class="m-0 font-weight-bold text-primary text-right">
			<a href="{{ route('barangCreate') }}" class="btn btn-primary btn-icon-split btn-sm">
				<span class="icon text-white-50">
					<i class="fas fa-plus"></i>
				</span>
				<span class="text">Tambah Data</span>
			</a>
		</div>
	</div>
	<div class="card-body">
		<form class="mb-3" method="post" target="_blank" action="{{ route('barangCetak') }}">
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
							<td class="aksi">
								<a href="{!! route('barangEdit', $value->uuid) !!}" class="btn btn-labeled btn-secondary btn-xs"><i class="fa fa-edit"></i> ubah</a>
								<form action="{!! route('barangDelete', $value->uuid) !!}" method="post">
									{{ method_field('delete') }}
									@csrf
									<button type="submit" class="btn btn-labeled btn-danger btn-xs btn-delete">
										<i class="fa fa-trash"></i> hapus</a>
									</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
