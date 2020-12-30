@extends('admins.layouts.master')
@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       @include('admins.layouts.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Dashboard</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                      <li><a href="#">ICE Market data</a></li>
                      <li><a href="#">Own analysis</a></li>
                      <li><a href="#">Historic market data</a></li>
                    </ul>
                    <ul class="quick-links ml-auto">
                      <li><a href="#">Settings</a></li>
                      <li><a href="#">Analytics</a></li>
                      <li><a href="#">Watchlist</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="page-header-toolbar">
                  <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
                    <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
                  </div>
                  <div class="filter-wrapper">
                    <div class="dropdown toolbar-item">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                        <a class="dropdown-item" href="#">Last Day</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Last Year</a>
                      </div>
                    </div>
                    <a href="#" class="advanced-link toolbar-item">Advanced Options</a>
                  </div>
                  <div class="sort-wrapper">
                    <a href="movies/tambah" class="btn btn-primary toolbar-item">New</a>        
                    
                    <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownexport">
                        <a class="dropdown-item" href="#">Export as PDF</a>
                        <a class="dropdown-item" href="#">Export as DOCX</a>
                        <a class="dropdown-item" href="#">Export as CDR</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Invoice</h4>
                          <a href="#"><small>Show All</small></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quod cupiditate esse fuga</p>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>Movies ID</th>
                                <th>Title</th>                                
                                <th>Category</th>
                                <th>Deskripsi</th>
                                <th>Produser</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($movies as $item)
                              <tr>
                                <td>
                                  <a href="/producers/{{$item->id}}">ID-MOV-{{$item->id}}</a>
                                </td>
                                <td>{{$item->judul}}</td>                                
                                <td>{{$item->kategori}}</td>
                                <td>{{$item->deskripsi}}</td>
                                <td>{{$item->id}}</td>
                                <td>
                                  <a href="/movies/edit/{{$item->id}}" class="btn btn-success toolbar-item">edit</a>
                                  <a href="/mmovies/delete/{{$item->id}}" class="btn btn-danger toolbar-item">delete</a>
                                </td>
                              </tr>    
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-danger mr-2"></div>
                              <p class="mb-0">Total Sales</p>
                            </div>
                            <h4 class="font-weight-semibold">$7,590</h4>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                            </div>
                          </div>
                          <div class="col-md-6 mt-4 mt-md-0">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-success mr-2"></div>
                              <p class="mb-0">Active Users</p>
                            </div>
                            <h4 class="font-weight-semibold">$5,460</h4>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card average-price-card">
                    <div class="card text-white">
                      <div class="card-body">
                        <div class="d-flex justify-content-between pb-2 align-items-center">
                          <h2 class="font-weight-semibold mb-0">4,624</h2>
                          <div class="icon-holder">
                            <i class="mdi mdi-briefcase-outline"></i>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between">
                          <h5 class="font-weight-semibold mb-0">Average Price</h5>
                          <p class="text-white mb-0">Since last month</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title mb-0">Top Performer</h4>
                        <div class="d-flex mt-3 py-2 border-bottom">
                          <img class="img-sm rounded-circle" src="assets/images/faces/face3.jpg" alt="profile image">
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Ray Douglas</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">1 Hours ago</small>
                        </div>
                        <div class="d-flex py-2 border-bottom">
                          <span class="img-sm rounded-circle bg-warning text-white text-avatar">OH</span>
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Ora Hill</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">4 Hours ago</small>
                        </div>
                        <div class="d-flex py-2 border-bottom">
                          <img class="img-sm rounded-circle" src="assets/images/faces/face4.jpg" alt="profile image">
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Brian Dean</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">4 Hours ago</small>
                        </div>
                        <div class="d-flex pt-2">
                          <span class="img-sm rounded-circle bg-success text-white text-avatar">OB</span>
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Olive Bridges</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">7 Hours ago</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
@endsection
