@extends('layouts.admin')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Kecamatan & Kelurahan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Data Master</a></li>
          <li class="breadcrumb-item active">Kecamatan & Kelurahan</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Kecamatan</h3>
          </div>  
          <div class="card-body p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kecamatan</th>
                </tr>
              </thead>
              <tbody>  
                @foreach($listkecamatan as $key => $data)
                <tr>
                  <td>{{ $listkecamatan->firstItem() + $key }}</td>
                  <td>{{ $data->nama }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Kelurahan</h3>
            {{-- <div class="card-tools">
              <form method="get" action="{{route('kecamatan.index')}}">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="keyword" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div> --}}
          </div>
          <div class="card-body table-responsive p-0" style="height: 450px;">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Kelurahan</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($listkelurahan as $data)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->kecamatan['nama'] }}</td>
                  <td>{{ $data->nama }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div> 
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
