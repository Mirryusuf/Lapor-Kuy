@extends('layouts.admin')

@section('content')
@include('sweetalert::alert')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <h1>
          Data Aspirasi
        </h1>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="container bg-white">
        @if($datanya->status === 'Proses')
        <div class="box">
          <div class="box-header with-border">
            <br>
            <div class="row">
              <div class="col-sm-4">
                <a href="{{ asset('img/'. $datanya->photo) }}" target="_blank" rel="noopener noreferrer">
                <img style="height: 200px; width: 330px;" src="{{ asset('img/'. $datanya->photo) }}"></a>        
              </div>
              <div class="col-sm-8">
                <p style="text-align: justify;">NIK: {{ $datanya->nik }}</p>  
                <p style="text-align: justify;">Jenis Aspirasi: {{ $datanya->jenis_aspirasi }}</p>  
                <p style="text-align: justify;">Lokasi: {{ $datanya->lokasi }}</p>  
                <p style="text-align: justify;">Status: {{ $datanya->status }}</p> 
                <p style="text-align: justify;">Aspirasi: {{ $datanya->aspirasi }}</p>   
              </div>
            </div>
            <br>
          </div>
          <div class="box-body">
            <br>
            
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a class="btn btn-outline-secondary" href="/dashboard">Back</a>
            <form action="{{ route('update', $datanya->id) }}" method="POST" class="mx-1 float-right ">
                @method('PUT')
                @csrf
                          <button type="submit" class="btn btn-outline-primary">
                              Kerjakan
                          </button>
              </form>
          </div>
          <!-- /.box-footer-->
          <br>
        </div>
      <!-- /.box -->
      @elseif($datanya->status === 'Selesai')
        <div class="box">
          <div class="box-header with-border">
            <br>
            <div class="row">
              <div class="col-sm-4">
                <a href="{{ asset('img/'. $datanya->photo) }}" target="_blank" rel="noopener noreferrer">
                <img style="height: 200px; width: 330px;" src="{{ asset('img/'. $datanya->photo) }}"></a>        
              </div>
              <div class="col-sm-8">
                <p style="text-align: justify;">NIK: {{ $datanya->nik }}</p>  
                <p style="text-align: justify;">Jenis Aspirasi: {{ $datanya->jenis_aspirasi }}</p>  
                <p style="text-align: justify;">Lokasi: {{ $datanya->lokasi }}</p>  
                <p style="text-align: justify;">Status: {{ $datanya->status }}</p> 
                <p style="text-align: justify;">Aspirasi: {{ $datanya->aspirasi }}</p>   
              </div>
            </div>
            <br>
          </div>
          <div class="box-body">
            <br>
            
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a class="btn btn-outline-secondary" href="/dashboard">Back</a>
            <form action="{{ route('destroy', $datanya->id) }}" method="POST" class="mx-1 float-right ">
              @csrf
                <button type="submit" class="btn btn-outline-danger">Hapus</button>
            </form>
          </div>
          <!-- /.box-footer-->
          <br>
        </div>
      @endif
    </div>
    </section>
    <br>
    <!-- /.content -->
    @endsection