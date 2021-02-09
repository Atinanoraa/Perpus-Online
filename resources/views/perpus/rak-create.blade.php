<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rak-create</title>

    <!-- css -->
    <style>
    </style>
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
<!-- tabel tambah data -->
    <div class="col-md-10 content">
        <center><font size="5">Tambah Data Rak Penyimpanan</font></center>
        <hr>
        <form method="POST" action="{{url('rak/save')}}">
		@csrf
		<div style="padding:0px 250px 0px;">
            <label class="form-label">Nama Lokasi</label>
            <input type="text" class="form-control" name="nama_lokasi" style="width:100%; margin:0px 0px 20px;">
        </div>
		<div style="padding:0px 250px 0px;">
            <label class="form-label">Kode Lokasi</label>
            <input type="text" class="form-control" name="kode_lokasi" style="width:100%; margin:0px 0px 20px;">
        </div>
		<div style="padding:0px 250px 0px;">
            <label class="form-label">Nomor Lokasi</label>
            <input type="text" class="form-control" name="nomor_lokasi" style="width:100%; margin:0px 0px 20px;">
        </div>
       
        <div style="padding:0px 250px 0px;">
        <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
        </div>
    </form>
	
</body>
</html>