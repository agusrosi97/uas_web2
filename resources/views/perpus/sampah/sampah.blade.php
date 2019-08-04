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
      {{-- <li class="breadcrumb-item"><a href="/nasabah">Nasabah</a></li> --}}
      <li class="breadcrumb-item active" aria-current="page">Sampah</li>
    </ol>
  </nav>
  {{-- <div class="row"> --}}
  <div class="row">
   
    <div class="col-md-4">
      <div class="card card-user">
       <div class="card-header">
          <h6 class="card-title">Tambah Nasabah</h6>
          
          {{-- <p class="card-category">Tambah Nasabah</p> --}}
        </div>
       
        <div class="card-body">
          <form action="{{route('sampah.store')}}" method="post">
            {{ csrf_field()}}
          {{-- <div class="form-group">
            <label for="exampleInputPassword1">ID</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="id" >
          </div> --}}
          <div class="form-group" >
            <label class="col-form-label">Jenis Sampah</label>
            <input type="text" class="form-control" name="jenis_sampah" placeholder="gelas aqua, kardus, dll">
            @if ($errors->any())
              <small class="text-danger">
                @foreach ($errors->get('jenis_sampah') as $error)
                  {{ $error }}
                @endforeach
              </small>
            @endif
          </div>
          <div class="form-group">
            <label class="col-form-label">Harga</label>
            <input type="number" class="form-control" name="harga">
            @if ($errors->any())
              <small class="text-danger">
                @foreach ($errors->get('harga') as $error)
                  {{ $error }}
                @endforeach
              </small>
            @endif
          </div>
          <button type="submit" class="btn btn-primary" name="btnSimpan" value="Simpan">Simpan</button>
          <button type="reset" class="btn btn-warning" name="btnSimpan" value="Ulang">Ulang</button>
        </form> 
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card card-user">
        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
              <strong>{{session('status')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          @if (session('status_h'))
            <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
              <strong>{{session('status_h')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif  
          <br>
          <div class="table-responsive">
            <table class="table" id="tb_index" width="100%">
              <thead class=" text-primary">
                {{-- <th>NO</th> --}}
                <th>ID</th>
                <th>Jenis Sampah</th>
                <th>Harga</th>
                <th colspan="2" class="text-center">Aksi</th>
              </thead>
              <tbody>
                @foreach($sampah as $no=>$b)
                  {{-- <th>{{$no+1}}</th> --}}
                  <tr>
                    <td>{{$b->id}}</td>
                    <td>{{$b->jenis_sampah}}</td>
                    <td>{{$b->harga}}</td>
                    <td>
                      <a href="{{ route('sampah.edit',$b->id)}}" class="btn btn-primary">U</a>
                    </td>
                    <td>
                      <form action="{{ route('sampah.destroy', $b->id)}}" method="post" class="btn-delete">
                        {{ csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit">H</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection