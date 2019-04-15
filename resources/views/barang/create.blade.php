@extends('layouts.app')
@section('page-title', 'Tambah Data Barang')
@section('content')
<div class="row">
  <div class="col-xl-12 col-lg-12 col-sm-12">
    <div class="card shadow mb-4">
      <div class="card-body">
        <form action="{!! route('barangStore') !!}" method="post">
          @csrf
					<div class="form-group row">
            <label class="col-sm-2 col-form-label">Nomor Kontainer</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nomor_kontainer" placeholder="nomor kontainer" required>
            </div>
					</div>
					<div class="form-group row">
            <label class="col-sm-2 col-form-label">Pengirim</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="pengirim" placeholder="pengirim" required>
            </div>
					</div>
					<hr>
					<div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" placeholder="nama barang" required>
            </div>
					</div>
					<div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Terima</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="tanggal_terima" value="{{now()->toDateString()}}" required>
            </div>
					</div>
					<div class="form-group row">
            <label class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
							<textarea name="keterangan" class="form-control" rows="3" required></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Penerima</label>
            <div class="col-sm-10">
              <select class="form-control select2" name="rekanan_id" required>
                <option value="">Pilih</option>
                @foreach ($rekanan as $value)
                  <option value="{{$value->id}}">{{$value->nama}}</option>
                @endforeach
              </select>
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
