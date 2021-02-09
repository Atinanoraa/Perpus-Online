<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rak-list</title>
</head>
<body>
<!-- Navbar -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="{{asset('admin-themes/style.css')}}" rel="stylesheet">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
			MENU
			</button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				Administrator
			</a>
		</div>

    </nav>
    <div class="container-fluid main-container">
  		<div class="col-md-2 sidebar">
  			<div class="row">
	<!-- uncomment code for absolute positioning tweek see top comment in css -->
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">
					<li><a href="/"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
					<li><a href="/kategori"><span class="glyphicon glyphicon-tags"></span> Kategori</a></li>
					<li><a href="/buku"><span class="glyphicon glyphicon-book"></span> Buku</a></li>
					<li  class="active"><a href="/rak"><span class="glyphicon glyphicon-file"></span> Rak Penyimpanan</a></li>
					<li><a href="/user"><span class="glyphicon glyphicon-user"></span> User</a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>
</div>

<!-- table rak penyimpanan -->
<div class="container">
<div class="col-md-10 content">
<center><font size="5">Data Rak Penyimpanan Buku</font></center>
<hr>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a href="/rak/create"><button class="btn btn-primary me-md-2" type="button">Tambah Data</button></a>
</div>
<!--Search-->
<form action="{{url('rak')}}">
        <div class="row mb-3">
		<br>
			<div class="col-sm-2">
		        <div class="form-group">
		            <select name="ordering" class="form-control">
		                <option value="">Berdasarkan</option>
		                <option value="nama_lokasi">Nama Lokasi</option>
		                <option value="kode_lokasi">Kode Lokasi</option>
						<option value="nomor_lokasi">Nomor Lokasi</option>
		            </select>
		        </div>
			</div>
			<div class="col-sm-2">
		        <div class="form-group">
		            <select name="urutan" class="form-control">
		                <option value="">Urutan</option>
		                <option value="asc">ASC</option>
		                <option value="desc">DESC</option>
		            </select>
		        </div>
		    </div>
		    <div class="col-sm-3">
		        <div class="form-group">
		            <input type="text" placeholder="Search" name="search" class="form-control" value="">
		        </div>
		    </div>
		    <div class="col-sm-3">
		        <div class="form-group">
				<button class="btn btn-warning" type="submit" name="filter" value='1'>Filter</button>
		        </div>
		    </div>
		</div>
	</form>
<div class="table-responsive">
    <table class="table table-striped jambo_table bulk_action">
    <thead>
    <tr>
    <th>id</th>
    <th>Nama Lokasi</th>
    <th>Kode Lokasi</th>
    <th>Nomor Lokasi</th>
    <th>Aksi</th>
    <tr>
    </thead>
	@foreach($data_rak as $rak)
    <tr>
    <td>{{$rak->id}}</td>
    <td>{{$rak->nama_lokasi}}</td>
    <td>{{$rak->kode_lokasi}}</td>
    <td>{{$rak->nomor_lokasi}}</td>
    <td>
    <a href="/rak/edit/{{$rak->id}}"><button type="submit" class="btn btn-success btn-sm">Edit</button></a>
    <a href="/rak/delete/{{$rak->id}}"><button type="submit" class="btn btn-danger btn-sm">Delete</button></a>
    </td>
    </tr>
	@endforeach
	</table>
	<div align="center">
	{{$data_rak->appends(Request::all())->links()}}
	</div>
	</div>
    </div>
    </div>
</body>
</html>
