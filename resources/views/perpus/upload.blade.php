<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD GAMBAR</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="row">
		<div class="container">
			<h2 class="text-center my-5">SILAHKAN UPLOAD FOTO KAMU</h2>

			<div class="col-lg-8 mx-auto my-5">

				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
					@csrf

					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>

					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>

					<input type="submit" value="Upload" class="btn btn-primary">
                </form>
                <form  enctype="multipart/form-data">
					@csrf
                <h4 class="my-5">Data Foto</h4>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>File</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						@foreach($gambar as $g)
						<tr>
							<td><img width="150px" src="{{asset('data_file/'.$g->file)}}" alt="image"></td>
							<td>{{$g->keterangan}}</td>
						</tr>
						@endforeach
					</tbody>
                </table>
                </form>
			</div>
		</div>
	</div>
</body>
</html>
