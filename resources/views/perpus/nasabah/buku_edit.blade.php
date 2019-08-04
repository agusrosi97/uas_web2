@extends('perpus.layout.layout')
@section('sidebar')
@section('buku',$active)
@endsection
{{-- @section('judul_navbar',$judul_navbar) --}}
@section('content')
<div class="content">
        <div class="row">
         
          <div class="col-md-6">
            <div class="card card-user">
              <div class="card-header">
                {{-- <h4 class="card-title">Harga Makanan</h4> --}}
                <a href="{{ route('buku.index')}}"><button type="button" class="btn btn-primary"><<--Kembali</button></a>
                <p class="card-category"></p>
              </div>
              <div class="card-body">


                <form action="{{route('buku.update',$buku->id_buku)}}" method="post">
                  {{ csrf_field()}}
                  {{method_field('PUT')}}
                {{-- <div class="form-group">
                  <label >ID Buku</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="id_kat" aria-describedby="emailHelp" >
                </div> --}}
                <div class="form-group">
                  <label for="exampleInputPassword1">Judul</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="judul" value="{{ $buku->judul }}" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kategori</label>
                  <select name="kategori" class="form-control">
                    @foreach($kategori as $k) 
                      <option value="{{$k->id_kat}}" @if($k->id_kat==$buku->id_kat) selected @endif>{{$k->nama}}</option>
                  @endforeach
                </select>
                {{-- <select name="kategori">
                    @foreach($kategori as $k) 
                      <option value="{{$k -> id_kat}}">{{$k-> nama}}</option>
                  @endforeach
                </select> --}}
                  
                  {{-- <input type="text" class="form-control" id="exampleInputPassword1" name="nama" placeholder="Masukkan Nama"> --}}
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tahun</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tahun" value="{{ $buku->tahun }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Penulis</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="penulis" value="{{ $buku->penulis }}" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Penerbit</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="penerbit" value="{{ $buku->penerbit }}">
                </div>
               
                <button type="submit" class="btn btn-primary" name="btnSimpan" value="Simpan">Simpan</button>
              </form>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
