@extends('admins.layouts.master')
@section('content')
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       @include('admins.layouts.sidebar')
       <div class="main-panel">
          <div class="content-wrapper">      
        <div class="col-md-8 mx-auto">
              <h2 class="text-center mb-4">Tambah Data User</h2>
              <div class="auto-form-wrapper">
                <form action="/users/store" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="name" class="form-control" placeholder="Nama User">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="email" name="email" class="form-control" placeholder="Email">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div> 
                  
                   <div class="form-group">
                    <div class="input-group">
                      <select name="roles" class="form-control">
                        <option value="User">User</option>
                        <option value="Admin">Admin</option>
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
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Tambah</button>
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