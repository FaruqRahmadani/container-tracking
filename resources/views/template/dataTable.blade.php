@extends('layouts.app')
@section('page-title', 'Tables')
@section('page-explaination')
DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.
@endsection
@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered dataTable" id="" width="100%" cellspacing="0">
        <thead>
					<tr>
						<th>#</th>
						<th>Position</th>
						<th>Office</th>
						<th>Age</th>
						<th>Start date</th>
						<th class="aksi">Aksi</th>
					</tr>
				</thead>
				{{-- <tfoot>
					<tr>
						<th>#</th>
						<th>Position</th>
						<th>Office</th>
						<th>Age</th>
						<th>Start date</th>
						<th class="aksi">Aksi</th>
					</tr>
				</tfoot> --}}
				<tbody>
					@for ($i = 1; $i < 15; $i++) <tr>
						<td class="penomoran">{{$i}}</td>
						<td>System Architect</td>
						<td>Edinburgh</td>
						<td>61</td>
						<td>2011/04/25</td>
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
