<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Kategori List</title>
    <style>
    body{
        font-family: sans-serif;
    }
    .table{
        border: 2px solid #000000;
        width: 65%;
    }
    tr:nth-clild(even){
        background-color:grey;
    }
    </style>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="{{asset('admin-themes/style.css')}}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

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
			<a class="navbar-brand" href="/">
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
					<li class="active"><a href="/kategori"><span class="glyphicon glyphicon-tags"></span> Kategori</a></li>
					<li><a href="/buku"><span class="glyphicon glyphicon-book"></span> Buku</a></li>
					<li><a href="/rak"><span class="glyphicon glyphicon-file"></span> Rak Penyimpanan</a></li>
					<li><a href="/user"><span class="glyphicon glyphicon-user"></span> User</a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>

<div class="col-md-10 content" align="center">
    <h1>DAFTAR KATEGORI</h1><br>

<form class="d-flex" action="{{url('kategori')}}" method="GET">
    <table class="table" cellspacing="3">
    <thead>
        <tr>
            <td>Search :</td>
            <td>Urutan Berdasarkan :</td>
            <td>Urutan :</td>
            <td></td>
        </tr>
    </thead>

    <tr>
        <td>
        <input type="text" placeholder="Search" class="form-control" aria-label="Search" name="search">
        </td>

        <td>
        <select class="form-select-sm form-control" aria-label="form-select-sm example" name="ordering">
        <option value="">Urutan Berdasarkan</option>
        <option value="nama_kategori" name="nama_kategori">Nama</option>
        <option value="keterangan" name="keterangan">Keterangan</option>
        <option value="slug" name="slug">Slug</option>
        <option value="rak_id" name="rak_id">Rak ID</option>
        </select>
        </td>

        <td>
        <select class="form-select-sm form-control" aria-label="form-select-sm example" name="urutan">
        <option value="">Urutan</option>
        <option value="asc" name="asc">Ascending</option>
        <option value="desc" name="desc">Descending</option>
        </select>
        </td>

        <td>
        <button class="btn btn-success btn-sm form-control" type="submit" name="filter" value="1">Filter</button>
        </td>
    </tr>
    </table>
</form>

<table class="table table-striped">
    <thead>
    <th>No</th>
    <th>Nama Kategori</th>
    <th>Keterangan</th>
    <th>Slug</th>
    <th>Gambar Sampul</th>
    <th>Rak ID</th>
    <th>Kode Lokasi</th>
    <th>Nama Lokasi</th>
    <th>Aksi</th>
    </thead>

    @foreach ($data_kategori as $row)
    <tr>
    <td>{{$row->id}}</td>
    <td>{{$row->nama_kategori}}</td>
    <td>{{$row->keterangan}}</td>
    <td>{{$row->slug}}</td>
    <td>{{$row->gambar_sampul}}</td>
    <td>{{$row->rak_id}}</td>
    <td>{{$row->kode_lokasi}}</td>
    <td>{{$row->nama_lokasi}}</td>
    <td>
    <a href="/kategori/edit/{{$row->id}}"><button class="btn btn-warning btn-sm">Edit</button>
    <a href="/kategori/delete/{{$row->id}}"><button class="btn btn-danger btn-sm">Delete</button>
    </td>
    </tr>
    @endforeach
</table>

    {{$data_kategori->appends(Request::all())->links()}}
    <div align="center">
    <a href="/kategori/create"><button type="button" class="btn btn-primary">Tambahkan Kategori Baru</button></a>
    </div>
</body>
</html>
