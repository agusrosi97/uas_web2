@extends('perpus.layout.layout')
@section('sidebar')
@section('profile',$active)
@endsection
@section('judul_navbar',$judul_navbar)
@section('content')
<div class="content">
      <div class="row">
          <div class="col-md-5">
            <div class="card card-user">
              <div class="image">
                <img src="../paper/assets/img/damir-bosnjak.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../paper/assets/img/mike.jpg" alt="...">
                    <h5 class="title">Arta Wiguna</h5>
                  </a>
                  <p class="description">
                    @artawgn
                  </p>
                </div>
                <p class="description text-center">
                  "I like the way you work it
                  <br> No diggity
                  <br> I wanna bag it up"
                </p>
              </div>

            </div>

          </div>
          <div class="col-md-5">
            <div class="card card-user ">
              <div class="card-header">
                <h5 class="card-title">About Me</h5>
              </div>
              <div class="card-body">
                <form>
              
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Id</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="{{ $ida }} "  disabled>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="{{$name}}" disabled>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="{{$address}}"disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City" value="{{$campus}}"disabled>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Country" value="{{$country}}" disabled>
                      </div>
                    </div>
           
                  </div>
                 {{--  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control textarea" disabled>{{$message}}</textarea>
                      </div>
                    </div>
                  </div> --}}
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Follow Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
