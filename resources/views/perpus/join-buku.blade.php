<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="{{asset('admin-themes/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!------ Include the above in your HEAD tag ---------->

    <title>Admin Buku</title>
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
			Book Location
		</div>
		<div class="panel-body">

            <br>
			<table cellspacing="0" cellpadding="10" class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th style="text-align: center;">ID</th>
                        <th style="text-align: center;">Seri Buku</th>
                        <th style="text-align: center;">Judul Buku</th>
                        <th style="text-align: center;">Edisi</th>
                        <th style="text-align: center;">Nama Kategori</th>
                        <th style="text-align: center;">Nama Rak</th>
                        <th style="text-align: center;">Kode Rak</th>
                        <th style="text-align: center;">Nomor Rak</th>
                        <th style="text-align: center;">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_buku as $row)
                    <tr>
                        <td style="text-align: center;">{{$row->id}}</td>
                        <td style="text-align: center;">{{$row->judul_seri}}</td>
                        <td>{{$row->judul}}</td>
                        <td style="text-align: center;">{{$row->edisi}}</td>
                        <td style="text-align: center;">{{$row->nama_kategori}}</td>
                        <td style="text-align: center;">{{$row->nama_lokasi}}</td>
                        <td style="text-align: center;">{{$row->kode_lokasi}}</td>
                        <td style="text-align: center;">{{$row->nomor_lokasi}}</td>
                        <td>
                            <a href="/buku/edit/{{$row->id}}" style="text-decoration: none;">
                                <button type="button" class="btn btn-success" style="font-weight: bold">Edit</button>
                            </a>
                            <a href="/buku/delete/{{$row->id}}"  style="text-decoration: none;">
                                <button type="button" class="btn btn-danger" style="font-weight: bold">Delete</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table> <br>
            <div align="center">
            {{ $data_buku -> appends(Request::all()) -> links() }}
            </div>
            <br>
            <a href="{{url('buku/create')}}">
                <button type="button" class="btn btn-primary btn-lg btn-block">Create Book</button>
            </a>
            <br>
            <a href="{{url('buku')}}">
                <button type="button" class="btn btn-secondary btn-lg btn-block">Book Manager</button>
            </a>
		</div>
	</div>
</div>
    <footer class="pull-left footer">
        <p class="col-md-12">
            <hr class="divider">
            Copyright &COPY; 2020
        </p>
    </footer>
</div>
</body>
</html>
