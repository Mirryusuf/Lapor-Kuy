@extends('layouts.admin')

@section('content')
@include('sweetalert::alert')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            @include('sweetalert::alert')
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Photo</th>
                    <th>Nik</th>
                    <th>Jenis Aspirasi</th>
                    <th>Lokasi</th>
                    <th>Status</th>
                    <th>Di Buat</th>
                    <th>Menu</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($datauser as $item)
                    <tr>
                      <td><a href="{{ asset('img/'. $item->photo) }}" target="_blank" rel="noopener noreferrer"><img style="height: 50px; width: 50px;" src="{{ asset('img/'. $item->photo) }}"></a></td>
                      <td>{{ $item-> nik }}</td>
                      <td>{{ $item-> jenis_aspirasi }}</td>
                      <td>{{ $item-> lokasi }}</td>
                      <td>{{ $item-> status }}</td>
                      <td>{{ $item-> created_at }}</td>
                      <td  style="text-align: center;"><a href="{{ url('edit-data',$item->id) }}"><i class="fa fa-edit fa-2x"></i></a> 
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endsection