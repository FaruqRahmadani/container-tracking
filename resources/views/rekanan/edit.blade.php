@extends('layouts.app')
@section('page-title', 'Ubah Data Rekanan')
@section('content')
<div class="row">
  <div class="col-xl-12 col-lg-12 col-sm-12">
    <div class="card shadow mb-4">
      <div class="card-body">
        <form action="{!! route('rekananUpdate', $rekanan->uuid) !!}" method="post">
          {{ method_field('put') }}
          @csrf
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Rekanan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" value="{{$rekanan->nama}}" placeholder="nama rekanan" required>
            </div>
					</div>
					<div class="form-group row">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
							<textarea name="alamat" class="form-control" rows="3" required>{{$rekanan->alamat}}</textarea>
            </div>
					</div>
					<div class="form-group row">
            <label class="col-sm-2 col-form-label">Nomor Telepon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nomor_telepon" value="{{$rekanan->nomor_telepon}}" placeholder="nomor telepon" required>
            </div>
					</div>
					<div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" value="{{$rekanan->email}}" placeholder="alamat email" required>
            </div>
					</div>
					<hr>
					<div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Penanggung Jawab</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="penanggung_jawab" value="{{$rekanan->penanggung_jawab}}" placeholder="nama penanggung jawab" required>
            </div>
					</div>
					<div class="form-group row">
            <label class="col-sm-2 col-form-label">Nomor Telepon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="telepon_penanggungjawab" value="{{$rekanan->telepon_penanggungjawab}}" placeholder="nomor telepon penanggung jawab" required>
            </div>
					</div>
					<div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
							<button class="btn btn-primary" type="submit">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
