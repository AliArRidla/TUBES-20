@extends('admins.layouts.master')
@section('content')
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       @include('admins.layouts.sidebar')
       <div class="main-panel">
          <div class="content-wrapper">      
        <div class="col-md-8 mx-auto">
              <h2 class="text-center mb-4">Edit Data Produser</h2>
              <img src="{{asset('storage/'.$producer->image)}}" width="50%" class="img-thumbnail rounded-circle mx-auto d-block mb-4" alt="...">
              <div class="auto-form-wrapper">
                <form action="/producers/update/{{$producer->id}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    @method('PUT')
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="nama" class="form-control" value="{{$producer->nama}}">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="date" name="ttl" class="form-control" value="{{$producer->ttl}}">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="kota" class="form-control" value="{{$producer->kota}}">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>   
                  
                  <div class="form-group">
                    <div class="input-group">
                      <input type="file" name="file" class="form-control" placeholder="Masukkan gambar"> 
                       <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>   
                    </div>
                  </div>   
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Register</button>
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Already have and account ?</span>
                    <a href="login.html" class="text-black text-small">Login</a>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection