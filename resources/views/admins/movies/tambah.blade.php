@extends('admins.layouts.master')
@section('content')
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       @include('admins.layouts.sidebar')
       <div class="main-panel">
          <div class="content-wrapper">      
        <div class="col-md-8 mx-auto">
              <h2 class="text-center mb-4">Tambah Data Movies</h2>
              <div class="auto-form-wrapper">
                <form action="/movies/store" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="judul" class="form-control" placeholder="Title of Movie">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <select name="kategori" class="form-control" id="">
                        <option value="aksi">Aksi</option>
                        <option value="romantis">Romantis</option>
                        <option value="anime">Anime</option>
                      </select>
                      {{-- <input type="date" name="kategori" class="form-control" placeholder="Category"> --}}
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="deskripsi" class="form-control" placeholder="Description">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="input-group">
                      <select name="id_produser" class="form-control" id="">
                        @foreach ($producers as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>    
                        @endforeach                        
                      </select>                      
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