<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Data Laporan Terkirim</title>
	<style>
		body{
			font-family: Arial, Helvetica, sans-serif;
		}
		table {
			vertical-align: top;
			font-size: 0.8em;
		}
		th{
			text-align: center;
		}
		td {
			padding: 5px;
		}
		td:first-child{
			text-align: center;
		}
		.title{
			font-size: 1.2em;
			font-weight: bold;
		}
		.sub-title{
			font-size: 0.9em;
			font-weight: bold;
		}
		td:nth-child(2), td:nth-child(3){
			white-space: nowrap;
			text-align: center;
		}
	</style>
</head>
<body>
	<span class="title">LAPORAN DATA BARANG TERKIRIM</span>
	<hr>
	<span class="sub-title">Priode {{HDate::formatDate($request->tanggal_awal)}} s.d {{HDate::formatDate($request->tanggal_akhir)}}</span>
	<br>
	<br>
	<table width="100%" border="1" cellspacing="0">
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
				<td>{{$loop->iteration}}</td>
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
</body>
</html>
