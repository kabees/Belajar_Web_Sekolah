<!DOCTYPE html>
<html>
<head>
	<title>Jadwal Keberangkatan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<table class="navbar navbar-expand-lg navbar-light bg-info">
  <td><a class="navbar-brand">JADWAL TRAVEL</a></td>
   <td><a class="navbar-brand" href="{{ url('/home') }}"><h5>Home</h5></a></td>
</table>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       
      </li>
    
      
    </ul>
    
  </div>
</nav>
	<div class="container">
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
			@endif
		<lp-div class="rows">
			<div class="col-3">
				<h2>JADWAL TRAVEL</h2>
			</div>
			
			<table class="table table-success table-bordered">
				<tr>
					<th class="text-center">Judul Lagu</th>
					<th class="text-center">Genre</th>
					<th class="text-center">Copyright</th>
					<th class="text-center">Pencipta</th>
					<th class="text-center">Stok</th>
					<th class="text-center">Action</th>

				</tr>
				@Foreach($data_music as $music)
				<tr>
					<td>{{$music->judul_lagu}}</td>
					<td>{{$music->genre}}</td>
					<td>{{$music->copyright}}</td>
					<td>{{$music->pencipta}}</td>
					<td>{{$music->stok}}</td>
					<td>
					<a href="/music/{{$music->id}}/edit" class="btn btn-info btn-sm">UBAH
					<a href="/music/{{$music->id}}/delete" class="btn btn-danger btn-sm">HAPUS
					</td></a></a>

				</tr>
				@endforeach 
			</table>
			<div class="rows">
			<div class="col-3">
				<h5>TAMBAH JADWAL TRAVEL</h5>
			</div>

				      <div class="modal-body">
				        <form action="/music/create" method="POST">
				        	{{csrf_field()}}
							 <div class="form-group">
							    <label for="exampleInputEmail1">Judul Lagu</label>
							    <input name="judul_lagu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Travel">
							  </div>
							 <div class="form-group">
							  	<label for="exampleFormControlSelect1">Genre</label>
							  	<select name="genre" class="form-control" id="exampleFormControlSelect1">

							  	<option value="Rock">Rock</option>
							  	<option value="Pop">Pop</option>
							  	<option value="Jazz">Jazz</option>
							  	<option value="Dangdut">Dangdut</option>
							  </select>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Copyright</label>
								<input name="copyright" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jumlah Penumpang">
							</div>
							<div>
							  <label for="exampleInputEmail1">Pencipta</label>
							    <input name="pencipta" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tgl Berangkat">
							</div>
							<div>
								<label for="exampleInputEmail1">Stok</label>
								<input name="stok" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jumlah Penumpang">
							</div>


							   
							
				      </div>
				      <div class="modal-footer">
				        <button type="submit" class="btn btn-primary">Tambah</button>
				        </form>
				      </div>
				    </lp-div>
				  </div>
				</div>
			</div>



	</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
