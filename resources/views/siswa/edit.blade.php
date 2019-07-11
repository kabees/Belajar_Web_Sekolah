<title>SMKN1BWI</title>
	
	
 @include('items.navigation')

  <!-- Plugin CSS -->
  <link href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{asset('css/creative.min.css')}}" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{asset('css/creative.min.css')}}" rel="stylesheet">
   <header class="masthead">
    <div class="container">
      <div class="row h-10 align-items-center ">
        <div class="col-lg-10 align-self-end">
          <h2 class="text-uppercase text-white font-weight-bold">EDIT DATA SISWA SMKN 1 BANYUWANGI</h2>
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-1">2019-2020</p>
         	<div class="row">
			<div class="col-lg-8">
			<form action="/siswa/{{$siswa->id}}/update" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label class="text-white-75" for="exampleInputEmail1">Nama Depan</label>
					<input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
				</div>
				<div class="form-group">
					<label class="text-white-75" for="exampleInputEmail1">Nama Belakang</label>
					<input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
				</div>

				<div class="form-group">
					<label class="text-white-75" for="exampleFormControlSelect1">Jenis Kelamin</label>
					<select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					<option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
					<option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
					</select>
				</div>
				<div class="form-group">
					<label class="text-white-75" for="exampleInputEmail1">Agama</label>
					<input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">
				</div>
				<div class="form-group">
					<label class="text-white-75" for="exampleFormControlTextarea1">Alamat</label>
					<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
				</div>
				<button type="submit" class="btn btn-warning">Update</button>
				</form>
   		    </div>
        </div>
		</div>
      </div>
    </div>
  </header>

 @include('items.navigation')

		
	@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
		@endif
		