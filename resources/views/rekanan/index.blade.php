@extends('layouts.app')
@section('page-title', 'Data Rekanan')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<div class="m-0 font-weight-bold text-primary text-right">
			<a href="" class="btn btn-success btn-icon-split btn-sm">
				<span class="icon text-white-50">
					<i class="fas fa-print"></i>
				</span>
				<span class="text">Cetak</span>
			</a>
			<a href="{{ route('rekananCreate') }}" class="btn btn-primary btn-icon-split btn-sm">
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
						<th>Nama Rekanan</th>
						<th>Alamat</th>
						<th>Nomor Telepon</th>
						<th>Email</th>
						<th>Penanggung Jawab / Nomor Telepon</th>
						<th class="aksi">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@for ($i = 1; $i < 15; $i++) <tr>
						<td class="penomoran">{{$i}}</td>
						<td>Lorem, ipsum dolor.</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, tenetur.</td>
						<td>
							Lorem, ipsum dolor.
							<br>
							<small>+62 999 9999 9999</small>
						</td>
						<td>
							+62 999 9999 9999
						</td>
						<td>
							mail@mail.com
						</td>
						<td class="aksi">
							<a href="#" class="btn btn-labeled btn-primary btn-xs"><i class="fa fa-info-circle"></i> info</a>
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
