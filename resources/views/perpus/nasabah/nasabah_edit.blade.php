@extends('perpus.layout.layout')
@section('sidebar')
@section('buku',$active)
@endsection
{{-- @section('judul_navbar',$judul_navbar) --}}
@section('content')
<div class="content" style="margin-top: 80px;">
  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/nasabah">Home</a></li>
      <li class="breadcrumb-item"><a href="/nasabah">Nasabah</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
  </nav>
  <div class="row">

    <div class="col-md-4">
      <div class="card card-user">
       <div class="card-header">
          <h6 class="card-title">Tambah Nasabah</h6>
          
          {{-- <p class="card-category">Tambah Nasabah</p> --}}
        </div>
       
        <div class="card-body">
          <form action="{{route('nasabah.update',$nasabah->id)}}" method="post">
            {{ csrf_field()}}
            {{method_field('PUT')}}
          <div class="form-group my-1">
            <label for="exampleInputPassword1">ID</label>
            <input type="text" class="form-control " id="exampleInputPassword1" name="id" value="{{ $nasabah->id }}" disabled>
          </div>
          <div class="form-group my-1" >
            <label for="exampleInputPassword1">Nama</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="nama" value="{{ $nasabah->nama }}" >
          </div>
          <div class="form-group my-1">
            <label for="exampleInputPassword1">Hp</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="hp" value="{{ $nasabah->hp }}" >
          </div>
          <div class="form-group my-1">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" >{{ $nasabah->alamat }}</textarea>
          </div>
          <div class="text-right">
            <button type="submit" class="btn btn-danger" name="btnSimpan" value="Simpan">Update</button>
            <a href="{{ url('nasabah') }}" class="btn btn-secondary">Batal</a>
          </div>
         
          
        </form> 
        </div>
      </div>
    </div>
    

  </div>
</div>
@endsection
