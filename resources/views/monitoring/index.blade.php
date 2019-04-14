@extends('layouts.app')
@section('page-title', 'Data Monitoring')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<div class="m-0">
			<span class="nowrap"><i class="fa fa-circle mr-2 text-danger"></i> Belum Terkirim</span>
		</div>
	</div>
	<div class="card-body">
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
					@for ($i = 1; $i < 15; $i++) <tr>
						<td class="penomoran">
							{{$i}}
							<br>
							{{-- status terkirim --}}
							<i class="fa fa-circle text-danger">
						</td>
						<td class="text-center">
							XX-{{$i}}
						</td>
						<td>
							01/01/2019
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
						<td class="text-center">
							99
						</td>
						<td class="aksi">
							<a href="#" class="btn btn-labeled btn-primary btn-xs" data-toggle="modal" data-target="#modalKirim"><i class="fa fa-paper-plane"></i> Kirim</a>
						</td>
					</tr>
					@endfor
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
				<form action="">
					<div class="form-group">
            <label for="">Tanggal Dikirm</label>
            <input type="date" name="tanggal" class="form-control">
					</div>
					<div class="form-group">
            <button class="btn btn-primary" type="submit">Simpan</button>
          </div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>
@endsection
