@extends('perpus.layout.layout')
@section('sidebar')
@section('buku',$active)
@endsection
{{-- @section('judul_navbar',$judul_navbar) --}}
@section('content')
<div class="content" style="margin-top: 80px;">
  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/sampah">Home</a></li>
      <li class="breadcrumb-item"><a href="/sampah">Data Sampah</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-md-4">
      <div class="card card-user">
       <div class="card-header">
          <h6 class="card-title">Tambah Sampah</h6>
          {{-- <p class="card-category">Tambah Nasabah</p> --}}
        </div>
        <div class="card-body">
          <form action="{{route('sampah.update',$sampah->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group my-1">
              <label class="col-form-label">ID</label>
              <input type="text" class="form-control" name="id" value="{{ $sampah->id }}" disabled>
            </div>
            <div class="form-group my-1" >
              <label class="col-form-label">Jenis Sampah</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="jenis_sampah" value="{{ $sampah->jenis_sampah }}">
              @if ($errors->any())
                <small class="text-danger">
                  @foreach ($errors->get('jenis_sampah') as $error)
                    {{ $error }}
                  @endforeach
                </small>
              @endif
            </div>
            <div class="form-group my-1">
              <label class="col-form-label">Harga</label>
              <input type="text" class="form-control" name="harga" value="{{ $sampah->harga }}">
              @if ($errors->any())
                <small class="text-danger">
                  @foreach ($errors->get('harga') as $error)
                    {{ $error }}
                  @endforeach
                </small>
              @endif
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-danger" name="btnSimpan" value="Simpan">Update</button>
              <a href="{{ url('sampah') }}" class="btn btn-secondary">Batal</a>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
