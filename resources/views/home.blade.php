@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
        <div class="info-box">
          <span class="info-box-icon bg-danger elevation-1">
            <i class="fas fa-city"></i>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">Kecamatan</span>
            <span class="info-box-number">
              {{ $jumlah_kecamatan }}
              <small>Data</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
        <div class="info-box">
          <span class="info-box-icon bg-success elevation-1">
            <i class="fas fa-home"></i>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">Kelurahan</span>
            <span class="info-box-number">
              {{ $jumlah_kelurahan }}
              <small>Data</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
        <div class="info-box">
          <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-cog"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Bengkel</span>
            <span class="info-box-number">
              {{ $jumlah_bengkel }}
              <small>Data</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
    </div>
    <!-- /.row -->
    <div id="map" style="width:100%; height:420px;" class="mb-3"></div>
    <script>
        var locations = <?php echo $result_lat_long; ?>;
        var map = L.map('map').setView([{{ $location->latitude }}, {{ $location->longitude }}], 18);
        mapLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
            }).addTo(map);

        for (var i = 0; i < locations.length; i++) {
            marker = new L.marker([locations[i][1],locations[i][2]])
                .bindPopup(locations[i][0])
                .addTo(map);
        }
    </script>
  </div>
</section>
<!-- Main row -->
     
@endsection
