@extends('layouts/main')

@section('title', 'Pengaduan Aspirasi Masyarakat')

@section('content')
@include('sweetalert::alert')
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Cari laporan/aspirasi</h1>
        <br>
        <form action="{{ route('cari-data') }}" method="post">
 	    {{ csrf_field() }}
		  <div class="form-group">
		    <input type="text" name="cari" class="form-control" placeholder="Cari laporan/aspirasi">
		  </div>
		  <center><button type="submit" class="btn btn-primary">Cari</button></center>
		</form>
      </div>
    </div>
    <!-- akhir jumbotron -->
    @isset($data)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 form-panel">
                <div class="container" style="background-color: white; margin-top: 30px; margin-bottom: 5px;">
                	@foreach($data as $item)
                    <div class="card">
					  <div class="card-header" style="font-weight: bold; font-size: 20px;">
					    {{ $item-> jenis_aspirasi }}
					  </div>
					  <div class="card-body">
                        <div class="row">
                            <div class="col">
                              <p>Nik: {{ $item-> nik }}<br>
                           Lokasi: {{ $item-> lokasi }}<br>
                           Status: {{ $item-> status }}<br>
                        </p>
                            </div>
                            <div class="col">
                              <a href="{{ asset('img/'. $item->photo) }}" target="_blank" rel="noopener noreferrer"><img style="height: 100px; width: 200px;" src="{{ asset('img/'. $item->photo) }}"></a>
                            </div>
                        </div>
			            <p style="text-align: justify; margin-top: 30px;">Laporan/Aspirasi: {{ $item-> aspirasi }}</p>
					    
					  </div>
					</div>
					<br>
					@endforeach
                </div>
            </div>
        </div>
    </div>
    @endisset
    <br>
    <br>
    <br>
    <br>
    
    <!-- ini footer -->
    <footer class="page-footer font-small blue" style="background-color: #3d3c37;">
       <div class="footer-copyright text-center py-3" style="color: white;">© 2021 Copyright | built by.
          <a href="http://instgram.com/mirryusuf">Muhamad Amir Rudin Yusup</a>
       </div>
    </footer>


@endsection

