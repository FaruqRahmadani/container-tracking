@extends('layouts.app')
@section('page-title', 'Data Rekanan')
@section('content')
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="m-0 font-weight-bold text-primary text-right">
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
						@foreach ($rekanan as $value)
							<tr>
								<td class="penomoran">{{$loop->iteration}}</td>
								<td>{{$value->nama}}</td>
								<td>{{$value->alamat}}</td>
								<td>
									<small>{{$value->nomor_telepon}}</small>
								</td>
								<td>
									{{$value->email}}
								</td>
								<td>
									{{$value->penanggung_jawab}}
									<br>
									<small>{{$value->telepon_penanggungjawab}}</small>
								</td>
								<td class="aksi">
									<a href="{!! route('rekananEdit', $value->uuid) !!}" class="btn btn-labeled btn-secondary btn-xs"><i class="fa fa-edit"></i> ubah</a>
									<form action="{!! route('rekananDelete', $value->uuid) !!}" method="post">
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
