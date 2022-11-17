@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tabel Kelurahan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url ('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Tabel Kelurahan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

    
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kelurahan</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>

              
              <div class="card">
              <div class="card-header">
              <form method="get" action="{{route('kelurahan.index')}}">
                <h3 class="card-title"> 
                  <input type="text" name="keyword" class="form-control float-right" placeholder="Search" value="{{Request::get('keyword')}}">
                </h3>
                <h3 class="card-title">  
                  <button type="submit" class="btn btn-default ml-2"><i class="fas fa-search"></i></button>
                </h3>
              </form>
                <!-- <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Add item</button> -->
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kecamatan</th>
                      <th>Kelurahan</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($listkelurahan as $key => $data)
                    <tr>
                      <td>{{ $listkelurahan->firstItem() + $key }}</td>
                      <td>{{ $data->kecamatan['nama'] }}</td>
                      <td>{{ $data->nama }}</td>
                      <td>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>            
          </div>
          <div class="float-right mr-3">
        {{ $listkelurahan->appends(Request::all())->links('pagination::bootstrap-4') }}
            </div>  
        </div>
          

      </div>
      
     
            
          </div>
        </div>
      </div>

      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
