@extends('layouts/main')

@section('title', 'Pengaduan Aspirasi Masyarakat')

@section('content')
@include('sweetalert::alert')
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
        <hr>
        <p class="lead">Sampaikan laporan Anda langsung disini</p>
      </div>
    </div>
    <!-- akhir jumbotron -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 form-panel">
                <div class="container" style="background-color: white; margin-top: 30px;">
                    <h4 style="text-align: center; background-color: #CF000F; color: white; padding-top: 10px; padding-bottom: 10px; margin-bottom: 30px;">Sampaikan Laporan Anda</h4> 
                        <form action="{{ route('simpan-data') }}" method="post" enctype="multipart/form-data">
 	                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input name="nik" type="text" class="form-control" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Laporan/Aspirasi</label>
                            <select name="jenis_aspirasi" class="custom-select">
							 <option selected>Jenis Laporan</option>
							 <option value="Kesehatan">Kesehatan</option>
							 <option value="Fasilitas Publik">Fasilitas Publik</option>
							 <option value="Keamanan">Keamanan</option>
						  </select>
                        </div>
                        <div class="form-group">
                            <label for="">Laporan/Aspirasi Anda</label>
                            <input name="aspirasi" type="text" class="form-control" placeholder="Laporan/Aspirasi">
                        </div>    
                        <div class="form-group">
                            <label for="">Lokasi Kejadian</label>
                            <input type="text" name="lokasi" class="form-control" placeholder="Lokasi">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Foto</label>
                            <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <button type="submit" style="margin-bottom:15px;" class="btn btn-primary form-control">Kirim</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
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

