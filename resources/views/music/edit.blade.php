<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a  class="navbar-brand">Jadwal Travel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


</nav>

	<div class="container">
		<h1>Edit Jadwal</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
			@endif
		<div class="row">
			<div class="col-lg-12">
				
				<form action="/jadwal/{{$jadwal->id}}/update" method="POST">
				        	{{csrf_field()}}
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama</label>
							    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Mahasiswa" value="{{$jadwal->nama}}">
							  </div>

							  <div class="form-group">
							    <label for="exampleInputEmail1">jumlah</label>
							    <input name="jumlah" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jumlah" value="{{$jadwal->jumlah}}">
							  </div>
							  

							<div class="form-group">
							  	<label for="exampleFormControlSelect1">Tujuan</label>
							  	<select name="tujuan" class="form-control" id="exampleFormControlSelect1">

							  	<option value="BWI - MLG">BWI - MLG</option>
							  	<option value="MLG - BWI">MLG - BWI</option>
							  	<option value="BWI - SBY">BWI - SBY</option>
							  	<option value="SBY - BWI">SBY - BWI</option>
							  	<option value="BWI - DPS">BWI - DPS</option>
							  	<option value="DPS - BWI">DPS - BWI</option>
							  </select>
							</div>


							  <label for="exampleInputEmail1">Tgl Berangkat</label>
							    <input name="tgl_berangkat" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tgl Berangkat">
							  </div>


			 <button type="submit" class="btn btn-info">Perbarui</button>
			 
				        </form>
				    </div>
								
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
