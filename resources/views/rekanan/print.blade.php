<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Data Laporan Rekanan</title>
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
			text-align: center;
		}
	</style>
</head>
<body>
	<span class="title">LAPORAN DATA REKANAN</span>
	<hr>
	<br>
	<table width="100%" border="1" cellspacing="0">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama Rekanan</th>
				<th>Alamat</th>
				<th>Nomor Telepon</th>
				<th>Email</th>
				<th>Penanggung Jawab / Nomor Telepon</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($rekanan as $value)
			<tr>
				<td class="penomoran">{{$loop->iteration}}</td>
				<td>{{$value->nama}}</td>
				<td>{!!nl2br($value->alamat)!!}</td>
				<td>
					{{$value->nomor_telepon}}
				</td>
				<td>
					{{$value->email}}
				</td>
				<td>
					{{$value->penanggung_jawab}}
					<br>
					<small>{{$value->telepon_penanggungjawab}}</small>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>
