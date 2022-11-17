@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Update Bengkel</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="">Data Master</a>
          </li>
          <li class="breadcrumb-item">
            <a href="{{ url()->previous() }}">Bengkel</a>
          </li>
          <li class="breadcrumb-item active">Update Bengkel</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <form method="POST" action="{{ url('bengkel/'. $bengkel->id) }}" role="form" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Update Bengkel</h3>
        </div>
        <div class="card-body">  
          <div class="form-group">
            <label for="nama">Nama Bengkel</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ old('nama', $bengkel->nama) }}" name="nama">
            @error('nama')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="kelurahan">Kelurahan</label>
            <select class="form-control @error('kelurahan_id') is-invalid @enderror" id="kelurahan" name="kelurahan_id">
              <option value="">- Pilih -</option>
              @foreach ($kelurahan as $k)
                <option value="{{ $k->id }}" {{ old('kelurahan_id', $bengkel->kelurahan_id) == $k->id ? 'selected' : null }}>{{ $k->nama }}</option>
              @endforeach
            </select>
            @error('kelurahan_id')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" value="{{ old('keterangan', $bengkel->keterangan) }}" name="keterangan">
            @error('keterangan')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="fasilitas">Fasilitas</label>
            <input type="text" class="form-control @error('fasilitas') is-invalid @enderror" id="fasilitas" value="{{ old('fasilitas', $bengkel->fasilitas) }}" name="fasilitas">
            @error('fasilitas')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="latitude">Latitude</label>
                <input type="text" class="form-control @error('latitude') is-invalid @enderror" id="latitude" value="{{ old('latitude', $bengkel->latitude) }}" name="latitude">
                @error('latitude')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="longitude">Longitude</label>
                <input type="text" class="form-control @error('longitude') is-invalid @enderror" id="longitude"value="{{ old('longitude', $bengkel->longitude) }}" name="longitude">
                @error('longitude')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="gambar">Gambar </label>
            <small>(Kosongkan saja jika tidak ingin mengubah - Isi jika ingin menambahkan)</small>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input @error('gambar') is-invalid @enderror" value="{{ old('gambar', $bengkel->gambar) }}" id="gambar" name="gambar[]" multiple accept="image/*">
                <label class="custom-file-label">Pilih Gambar</label>
              </div>
            </div>
            @error('gambar')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="row">
            @foreach ($bengkel->gambar as $gambar)
            <div class="col-4">
              <div class="row">
                <div class="col-10">
                  <img src="{{ asset('storage/uploads/'.$gambar->gambar) }}" class="rounded mr-2 mb-2"  width="100%">  
                </div>
                <div class="col-2 float-left">
                  <a href="{{ url('deleteGambar/'. $gambar->id) }}" class="">
                    <i class="fas fa-times-circle mr-4 text-danger"></i>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="card-footer">
          <button type="reset" class="btn btn-secondary float-left">
            <i class="fas fa-undo"></i> Reset
          </button>
          <button type="submit" class="btn btn-primary float-right">
            <i class="fas fa-save"></i> Simpan
          </button>
        </div>
      </div>
      <!-- /.card-body -->
    </form>
  </div>
</section>
@endsection
