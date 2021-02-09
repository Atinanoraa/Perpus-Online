<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="{{asset('admin-themes/style.css')}}" rel="stylesheet">
	<!------ Include the above in your HEAD tag ---------->

	<title>Admin Dashboard</title>
</head>
<body>

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
					<li><a href="/kategori"><span class="glyphicon glyphicon-tags"></span> Kategori</a></li>
					<li class="active"><a href="/buku"><span class="glyphicon glyphicon-book"></span> Buku</a></li>
					<li><a href="/rak"><span class="glyphicon glyphicon-file"></span> Rak Penyimpanan</a></li>
					<li><a href="/user"><span class="glyphicon glyphicon-user"></span> User</a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>
<div class="col-md-10 content">
	<div class="panel panel-default">
		<div class="panel-heading">
			Create Data Buku
		</div>
		<div class="panel-body">
			<form action="{{url('buku/save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <p>
                    <label>Seri Buku</label><br>
                    <input type="text" name="seri" class="form-control"><br>
                </p>
                <p>
                    <label>Judul Buku</label><br>
                    <input type="text" name="judul" class="form-control"><br>
                </p>
                <p>
                    <label>Edisi</label><br>
                    <input type="text" name="edisi" class="form-control"><br>
                </p>
                <p>
                    <label>Slug</label><br>
                    <input type="text" name="slug" class="form-control"><br>
                </p>
				<p>
                    <label class="input-group-text">Gambar Sampul</label><br>
                    <input type="file" accept="image/*" name="gambar_sampul" class="form-control-file"><br>
				</p>
                <p>
                    <label>Kategori</label><br>
					<select name="kategori"  class="form-control">
					@foreach($data_kategori as $row)
					<option value="{{$row->id}}">{{$row->nama_kategori}}</option>
					@endforeach
					</select><br>
                </p>
                <p>
                    <label>Rak</label><br>
                    <select name="rak" class="form-control">
					@foreach($data_rak as $rak)
					<option value="{{$rak->id}}">{{$rak->nama_lokasi}}</option>
					@endforeach
					</select>
					<br>
                </p>
                <p>
                    <input type="submit" name="tombol-add" value="Simpan" class="btn btn-primary">
                </p>
            </form>
		</div>
	</div>
</div>
<footer class="pull-left footer">
	<p class="col-md-12">
		<hr class="divider">
		Copyright &COPY; 2020</a>
	</p>
</footer>
</div>

</body>
</html>
