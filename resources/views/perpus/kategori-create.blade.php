<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Create</title>
    <style>
    body{
        font-family: sans-serif;
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
<h1 align="center"> Kategori Create </h1>
<br>
<form method="POST" action="{{url('kategori/save')}}">
@csrf
        <table width="60%" border="0" align="center" cellspacing="15">
            <tr>
                <td>Nama Kategori</td>
                <td><p><input type="text" name="nama_kategori" placeholder="masukkan nama kategori" class="form-control"></p></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><p><input type="text" name="keterangan" placeholder="tambahkan keterangan" class="form-control"></p></td>
            </tr>
            <tr>
                <td>Slug</td>
                <td><p><input type="text" name="slug" placeholder="masukkan slug" class="form-control"></p></td>
            </tr>
            <tr>
                <td>Gambar Sampul Buku</td>
                <td><p><input type="file" accept="image/*" name="gambar_sampul"></p></td>
            </tr>
            <tr>
                <td>Rak ID</td>
                <td>
                    <select name="rak_id" id="rak_id" class="form-control">

                        @foreach ($data_rak as $row)
                        <option value={{$row->id}}>{{$row->nama_lokasi}}</option>
                        @endforeach
                </td>

            </tr>
            <tr>
                <td></td>
                <td><p><input type="submit" value="Save"></p></td>
            </tr>
        </table>
    </form>
</body>
</html>
