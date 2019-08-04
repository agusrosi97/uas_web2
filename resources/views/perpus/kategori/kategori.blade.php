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
                {{-- <h4 class="card-title">Harga Makanan</h4> --}}
                <a href="{{ route('kategori.create')}}"><button type="button" class="btn btn-primary">Tambah Kategori</button></a>
                <p class="card-category"></p>
              </div>
             
              <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                      {{session('status')}}
                    </div>
                @endif 
                <br>
                <div class="table-responsive">

                    
                  <table class="table">
                    <thead class=" text-primary">
                     <th>NO</th>
                    <th>ID Kategori</th>
                    <th>Nama</th>
                    <th colspan="2" width="50px">Aksi</th>
                    </thead>
                    <tbody>

                      @foreach($kategori as $no=>$k)
                    <th>{{$no+1}}</th>
                    <th>{{$k->id_kat}}</th>
                    <th>{{$k->nama}}</th>
                    <th>
                      <a href="kategori/{{$k->id_kat}}/edit"><button class="btn btn-warning" type="submit">Ubah</button></a>
                      {{-- <a href="{{ route('kategori/{{$k->id_kat}}/edit') }}"><button class="btn btn-warning" type="submit">Ubah</button></a> --}}

                    </th>
                    <th>
                      <form action="{{ action('Con_kategori@destroy', $k['id_kat'])}}" method="post">
                            {{ csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                          </form>
                    </th>
                    </tbody>
                     @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
