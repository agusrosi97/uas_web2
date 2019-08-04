@extends('perpus.layout.layout')
@section('sidebar')
@section('kategori',$active)
@endsection
{{-- @section('judul_navbar',$judul_navbar) --}}
@section('content')
<div class="content">
        <div class="row">
         
          <div class="col-md-6">
            <div class="card card-user">
              <div class="card-header">
                {{-- <h4 class="card-title">Harga Makanan</h4> --}}
                <a href="{{ route('kategori.index')}}"><button type="button" class="btn btn-primary"><<--Kembali</button></a>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

                <form action="{{route('kategori.store')}}" method="post">
                  {{ csrf_field()}}
                <div class="form-group">
                  <label >ID Kategori</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="id_kat" aria-describedby="emailHelp" placeholder="Masukkan Id">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Kategori</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama" placeholder="Masukkan Nama">
                </div>
                <button type="submit" class="btn btn-primary" name="btnSimpan" value="Simpan">Simpan</button>
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
