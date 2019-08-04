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


                <form action="{{route('buku.store')}}" method="post">
                  {{ csrf_field()}}
                <div class="form-group">
                  <label for="exampleInputPassword1">Judul</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="judul" >
                </div>
                <div class="form-group" >
                  <label for="exampleInputPassword1">Kategori</label>
                  <select name="kategori" class="form-control">
                    @foreach($kategori as $k) 
                      <option value="{{$k -> id_kat}}">{{$k-> nama}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tahun</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tahun">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Penulis</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="penulis" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Penerbit</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="penerbit" >
                </div>
               
                <button type="submit" class="btn btn-primary" name="btnSimpan" value="Simpan">Simpan</button>
              </form>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
