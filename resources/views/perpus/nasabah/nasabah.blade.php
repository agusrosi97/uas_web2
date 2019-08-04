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
      {{-- <li class="breadcrumb-item"><a href="/nasabah">Nasabah</a></li> --}}
      <li class="breadcrumb-item active" aria-current="page">Nasabah</li>
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
          <form action="{{route('nasabah.store')}}" method="post">
            {{ csrf_field()}}
          {{-- <div class="form-group">
            <label for="exampleInputPassword1">ID</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="id" >
          </div> --}}
          <div class="form-group" >
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" >
            @if ($errors->any())
              <small class="text-danger">
                @foreach ($errors->get('nama') as $error)
                  {{ $error }}
                @endforeach
              </small>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Hp</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="hp">
            @if ($errors->any())
              <small class="text-danger">
                @foreach ($errors->get('hp') as $error)
                  {{ $error }}
                @endforeach
              </small>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
            @if ($errors->any())
              <small class="text-danger">
                @foreach ($errors->get('alamat') as $error)
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
                <th>Nama</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th colspan="2" class="text-center">Aksi</th>
              </thead>
              <tbody>

                @foreach($nasabah as $no=>$b)
                  {{-- <th>{{$no+1}}</th> --}}
                  <tr>
                    <td>{{$b->id}}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->hp}}</td>
                    <td>{{$b->alamat}}</td>
                    <td>
                      <a href="{{ route('nasabah.edit',$b->id)}}" class="btn btn-primary">U</a>
                    </td>
                    <td>
                      <form action="{{ route('nasabah.destroy', $b->id)}}" method="post" class="btn-delete">
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