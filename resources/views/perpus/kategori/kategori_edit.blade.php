@extends('perpus.layout.layout')
@section('sidebar')
@section('kategori',$active)
@endsection
{{-- @section('judul_navbar',$judul_navbar) --}}
@section('content')
<div class="content">
        <div class="row">
         
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <a href="{{ route('kategori.index')}}"><button type="button" class="btn btn-primary"><<--Kembali</button></a>
                <p class="card-category"></p>
              </div>
              <div class="card-body">


                <form action="{{route('kategori.update',$kategori->id_kat)}}" method="post">
                  {{ csrf_field()}}
                  {{method_field('PUT')}}
                <div class="form-group">
                  <label >ID Kategori</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="id_kat" aria-describedby="emailHelp" placeholder="Masukkan Id" value="{{ $kategori->id_kat }}" disabled>
                  
                </div>    
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Kategori</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama" placeholder="Masukkan Nama" value="{{ $kategori->nama }}">
                </div>
                <button type="submit" class="btn btn-primary" name="btnSimpan" value="Simpan">Update</button>
                {{-- <input type="submit" name="btnSimpan" value="Simpan"> --}}
              </form>
                  {{-- <form action="{{route('kategori.store')}}" method="post">
                  {{ csrf_field()}}
                  <table border="1" cellpadding="5">
                  <tr>
                        <td>Id Kategori</td>
                        <td>:</td>
                        <td><input type="text" name="id_kat"></td>
                  </tr>
                  <tr>
                        <td>Nama Kategori</td>
                        <td>:</td>
                        <td><input type="text" name="nama"></td>
                      
                  </tr>

                  <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="btnSimpan" value="Simpan"></td>
                  </tr>
                </table>
                </form> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
