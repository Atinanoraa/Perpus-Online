<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
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
					<li><a href="/kategori"><span class="glyphicon glyphicon-tags"></span> Kategori</a></li>
					<li><a href="/buku"><span class="glyphicon glyphicon-book"></span> Buku</a></li>
					<li><a href="/rak"><span class="glyphicon glyphicon-file"></span> Rak Penyimpanan</a></li>
					<li class="active"><a href="/user"><span class="glyphicon glyphicon-user"></span> User</a></li>

				</ul>
            </div>
            <!-- /.navbar-collapse -->
		</nav>

	</div>
</div>
    </div>
  		<div class="col-md-10 content">
  			  <div class="panel panel-default">
	<div class="panel-heading">
		FORM DATA ANGGOTA
	</div>
	<div class="panel-body">

<!DOCTYPE html>
<html>
<head>
	<title>Website Kartu Pelajar</title>
	<!-- gambar title -->
	<link rel="icon" type="image/png" href="assets/img/logoTs.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

	<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-body">
        <form method="post" action="{{url('user/update/'.$data_user->id)}}">
            @csrf
	    	<div class="form-group">
	    		<label>Nama</label>
	    		<input type="text" name="nama_member" value="{{$data_user->nama_member}}" class="form-control" placeholder="Masukkan Nama" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Email</label>
	    		<input type="email_member" name="email_member" value="{{$data_user->email_member}}" class="form-control" placeholder="Masukkan Email" required>
            </div>
            <div class="form-group">
	    		<label>No Telepon</label>
	    		<input type="text" name="no_telp" value="{{$data_user->no_telp}}" class="form-control" placeholder="Masukkan No Telepon" required>
            </div>
            <div class="form-group">
	    		<label>Tanggal Lahir</label>
	    		<input type="date" name="tgl_lahir" value="{{$data_user->tgl_lahir}}" class="form-control" placeholder="Masukkan Tanggal Lahir" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Alamat</label>
	    		<input type="text" name="alamat" value="{{$data_user->alamat}}" class="form-control" placeholder="Masukkan Alamat" required>
            </div>
            <div>
                <label>Jenis Kelamin</label><br>
                <input type="radio" id="jk" name="jk" value="Perempuan" @if($data_user->jk="Perempuan") checked @endif> Perempuan <br>
                <input type="radio" id="jk" name="jk" value="Laki-Laki" @if($data_user->jk=="Laki-Laki") checked @endif> Laki-Laki <br><br>
            </div>
            <div>
                <label>Foto</label>
                <input type="file" name="foto" value="{{$data_user->foto}} accept="image/*"/> <br>
            </div>
	    	<button type="submit" class="btn btn-success" name="simpan">Submit</button>
	    	<button type="reset" class="btn btn-danger" name="reset">Clear</button>
	    </form>
	  </div>
	</div>
	<!-- Penutup Card Form -->


</div>

</body>
</html>
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
