<!DOCTYPE html>
<html>
<head>
	<title>Suprevisi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Supervisi</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>Materi</th>
                <th>Mapel</th>
                <th>Rombel</th>
                <th>Author</th>
                <th>Deskripsi</th>
			</tr>
		</thead>
		<tbody>

			@foreach($supervisis as $supervisi)
			<tr>
                <td>{{ $supervisi->materi }}</td>
                <td>{{ $supervisi->mapel }}</td>
                <td>{{ $supervisi->rombel }}</td>
                <td>{{ $supervisi->author }}</td>
                <td>{{ $supervisi->deskripsi }}</td>
            </tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>