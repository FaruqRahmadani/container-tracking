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
		<div class="table-responsive">
			<table class="table table-bordered dataTable" id="" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>#</th>
						<th>Nomor Kontainer</th>
						<th>Nama Barang</th>
						<th>Pengirim</th>
						<th>Penerima</th>
						<th>Keterangan</th>
						<th class="aksi">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@for ($i = 1; $i < 15; $i++) <tr>
						<td class="penomoran">{{$i}}</td>
						<td class="text-center">
							XX-{{$i}}
						</td>
						<td>
							Lorem, ipsum dolor.
						</td>
						<td>
							nama pengirim
						</td>
						<td>
							nama rekanan
						</td>
						<td>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, eaque!
						</td>
						<td class="aksi">
							<a href="#" class="btn btn-labeled btn-secondary btn-xs"><i class="fa fa-edit"></i> ubah</a>
							<a href="#" class="btn btn-labeled btn-danger btn-xs"><i class="fa fa-trash"></i> hapus</a>
						</td>
					</tr>
					@endfor
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
