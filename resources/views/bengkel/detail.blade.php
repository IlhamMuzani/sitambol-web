@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Detail Bengkel</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Data Master</a></li>
          <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Bengkel</a></li>
          <li class="breadcrumb-item active">Bengkel Detail</li>
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
        <h3 class="card-title">Detail Bengkel</h3>  
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <th colspan="3" class="border-top-0">
              <h3>{{ $bengkel->nama }}</h3>
            </th>
          </thead>
          <tbody>
            <tr>
              <td class="w-25">Kecamatan - Kelurahan</td>
              <td>:</td>
              <td class="text-break">{{ $bengkel->kelurahan->kecamatan['nama'] }} - {{ $bengkel->kelurahan['nama'] }}</td>
            </tr>
            <tr>
              <td class="w-25">Keterangan</td>
              <td>:</td>
              <td class="text-break">{{ $bengkel->keterangan }}</td>
            </tr>
            <tr>                  
              <td class="w-25">Fasilitas</td>
              <td>:</td>
              <td class="text-break">{{ $bengkel->fasilitas }}</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="3"></td>
            </tr>
          </tfoot>
        </table>
        <div class="row">
          @foreach ($bengkel->gambar as $gambar)
          <div class="col-4">
            <img src="{{ asset('storage/uploads/'.$gambar->gambar) }}" class="rounded border mr-2"  width="100%">  
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
