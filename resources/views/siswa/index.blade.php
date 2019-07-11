<title>SMKN1BWI</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Plugin CSS -->
<link href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

<!-- Theme CSS - Includes Bootstrap -->
<link href="{{asset('css/creative.min.css')}}" rel="stylesheet">

<header class="masthead">
	@if(session('sukses'))
	<div class="alert alert-success" role="alert">
	{{session('sukses')}}
	</div>
@endif
 <div class="container">
   <div class="row h-10 align-items-center ">
     <div class="col-lg-10 align-self-end">
       <h1 class="text-uppercase text-white font-weight-bold">DATA SISWA SMKN 1 BANYUWANGI</h1>
     </div>
			<div class="col-6">
				<button type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
				  Tambah Data Siswa
				</button>
						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>

						      <div class="modal-body">
						        <form action="/siswa/create" method="POST">
						        	{{csrf_field()}}
									  <div class="form-group">
									    <label for="exampleInputEmail1" >Nama Depan</label>
									    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">

									  </div>

									   <div class="form-group">
									    <label for="exampleInputEmail1">Nama Belakang</label>
									    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
									  </div>

									  <div class="form-group">
										<label for="exampleInputEmail1">Tanggal Lahir</label>
										<input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tanggal lahir">
									  </div>

									  <div class="form-group">
									    <label for="exampleInputEmail1">Tempat Lahir</label>
									    <input name="tempat_lahir" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir">
									  </div>
									  <div class="form-group">
									    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
									    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
									      <option value="L">Laki-Laki</option>
									      <option value="P">Perempuan</option>
									    </select>
									  </div>

									  <div class="form-group">
									    <label for="exampleInputEmail1">Agama</label>
									    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
									  </div>

									  <div class="form-group">
									    <label for="exampleFormControlTextarea1">Alamat</label>
									    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									  </div>
									   <div class="form-group">
										<label for="exampleInputEmail1">No HP</label>
										<input name="no_hp" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="no hp">
									  </div>

									  
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-primary" >Submit</button>

						      </form>
						      </div>
						    </div>
						  </div>
						</div>
			</div>
			
			<table class="table table-bordered table-hover">
				<thead class="thead-dark">
				<tr>
					<th scope="col"> NAMA DEPAN</th>
					<th scope="col"> NAMA BELAKANG</th>
					<th scope="col"> TANGGAL LAHIR</th>
					<th scope="col"> TEMPAT LAHIR</th>
					<th> JENIS KELAMIN</th>
					<th> AGAMA</th>
					<th> ALAMAT</th>
					<th> NO HP </th>
					<th> AKSI </th>
				</tr>
				</thead>
				@foreach($data_siswa as $siswa)
				<tr>
					<td>{{$siswa->nama_depan}}</td>
					<td>{{$siswa->nama_belakang}}</td>
					<td>{{$siswa->tanggal_lahir}}</td>
					<td>{{$siswa->tempat_lahir}}</td>
					<td>{{$siswa->jenis_kelamin}}</td>
					<td>{{$siswa->agama}}</td>
					<td>{{$siswa->alamat}}</td>
					<td>{{$siswa->no_hp}}</td>
					<td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-outline-warning btn-sm">Edit</a>
					<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-outline-danger btn-sm">Hapus</a></td>
				</tr>
				@endforeach
			</table>

		</div>
	</div>
</div>
</div>
</div>
</header>
		
 @include('items.navigation')

		

