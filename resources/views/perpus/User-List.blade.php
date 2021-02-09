<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        tr:nth-child(even){
          background-color: aqua;
        }
        td{
          text-align: center;
        }
        .table{
          border: 1px solid black;
        }
        .thead{
          color: aliceblue;
          background-color: darkslategrey;
        }

      </style>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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

    <ul class="list-group">
        <h1 class="text-center font-weight-bold">DATA MEMBER</h1>
        <div class="container">

            <table class="table" cellspacing="3">
                    <tr>
                    <td>
                    <form class="d-flex" action="{{url('user')}}">
                    <input type="search" placeholder="Search" class="form-control" aria-label="Search" name="search">
                    </td>

                    <td>
                    <select class="form-select-sm form-control" aria-label=".form-select-sm example" name="ordering">
                    <option value="">Urutan Berdasarkan</option>
                    <option value="nama_member" name="nama_member">Nama Member</option>
                    <option value="tgl_lahir" name="tgl_lahir">Tanggal Lahir</option>
                    </select>
                    </td>

                    <td>
                    <select class="form-select-sm form-control" aria-label=".form-select-sm example" name="urutan">
                    <option value="">Urutan</option>
                    <option value="asc" name="asc">Ascending</option>
                    <option value="desc" name="desc">Descending</option>
                    </select>
                    </td>

                    <td>
                    <button class="btn btn-success " type="submit" name="filter" value="1">Filter</button>
                    <a class="btn btn-success " type="button" name="tambah" href="{{('user/create')}}">Tambah Data</a>
                    </td>

                    </tr>
                </table>

          <?php
            $data_user = DB::select('select * from member')
          ?>

          <table class="table table-bordered mt-3">
              <div></div>
            <tr class="thead">
              <td>NO</td>
              <td>NAMA</td>
              <td>EMAIL</td>
              <td>NO TELEPON</td>
              <td>TANGGAL LAHIR</td>
              <td>ALAMAT</td>
              <td>JENIS KELAMIN</td>
              <td>FOTO</td>
              <td>ACTION</td>
            </tr>
            @foreach ($data_user as $row )
            <tr>
              <td >{{$row->id}}</td>
              <td >{{$row->nama_member}}</td>
              <td >{{$row->email_member}}</td>
              <td >{{$row->no_telp}}</td>
              <td >{{$row->tgl_lahir}}</td>
              <td >{{$row->alamat}}</td>
              <td >{{$row->jk}}</td>
              <td>{{$row->foto}}</td>
              <td>
                <a href="/user/edit/{{$row->id}}" class="btn btn-primary">Edit</a>
                <a href="/user/delete/{{$row->id}}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach

          </table>
      </div>




</div>
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
