@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Bengkel</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Data Master</a></li>
          <li class="breadcrumb-item active">Bengkel</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    @if (session('status'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fas fa-check"></i> {{ session('status') }}
      </div>
    @endif
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-6 col-lg-6">
            <h3 class="card-title">Data Bengkel</h3>
          </div>
          <div class="col-6 col-lg-6">
            <div class="card-tools float-right">
              <form method="get" action="{{ url('bengkel.index') }}">
                <div class="input-group input-group-sm" style="width: 100%">
                  <div class="input-group-append mr-2">
                    <a class="btn btn-primary rounded" href="{{ url('bengkel/create')}}">
                      <i class="fas fa-plus"></i>
                    </a>
                  </div>
                  <input type="text" name="keyword" class="form-control float-right rounded" placeholder="Cari Bengkel...">
                  <div class="input-group-append">
                    @if (Request::get('keyword'))
                      <a href="{{ url('bengkel') }}" class="btn btn-default rounded ml-2">
                        <i class="fas fa-times"></i>
                      </a>
                    @else
                      <button type="submit" class="btn btn-default rounded ml-2"><i class="fas fa-search"></i></button>
                    @endif
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>    
      <!-- /.card-header -->
      <div class="card-body p-0">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Bengkel</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($listbengkel as $key => $data)
            <tr>
              <td>{{ $listbengkel->firstItem() + $key }}</td>
              <td class="text-break">{{ $data->nama }}</td>
              <td class="text-center">
                <form method="post" action="{{ url('bengkel/'. $data->id) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini ?')">
                  @csrf
                  @method('delete')
                  <a class="btn btn-sm btn-info mb-1" href="{{ url('bengkel/'. $data->id)}}">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-secondary mb-1" href="{{ url('bengkel/'. $data->id .'/edit')}}">
                    <i class ="fas fa-pencil-alt"></i>
                  </a>
                  <button type="submit" class="btn btn-sm btn-danger mb-1">
                    <i class ="fas fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>           
      </div>
      <div class="card-footer clearfix pb-0">
        <div class="pagination pagination-sm m-0 float-right">
          {{ $listbengkel->appends(Request::all())->links('pagination::bootstrap-4') }}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
