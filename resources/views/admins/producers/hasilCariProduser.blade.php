@extends('admins.layouts.master')
@section('content')
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       @include('admins.layouts.sidebar')
       <div class="main-panel">
          <div class="content-wrapper">      
       <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h1 class="display-3">Hasil dari pencarian</h1>   
                          <h4 class="card-title mb-0">Invoice</h4>
                          <a href="#"><small>Show All</small></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quod cupiditate esse fuga</p>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>Producer ID</th>
                                <th>Name</th>                                
                                <th>Birth Date</th>
                                <th>Birth City</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if($producers->isNotEmpty())
                                @foreach ($producers as $item)
                                <tr>
                                  <td>
                                    <a href="/producers/{{$item->id}}">ID-PRO-{{$item->id}}</a>
                                  </td>
                                  <td>{{$item->nama}}</td>                                
                                  <td>{{$item->ttl}}</td>
                                  <td>{{$item->kota}}</td>
                                  <td>
                                    <a href="/producers/edit/{{$item->id}}" class="btn btn-success toolbar-item">edit</a>
                                    <a href="/producers/delete/{{$item->id}}" class="btn btn-danger toolbar-item">delete</a>
                                  </td>
                                </tr>    
                                @endforeach
                              @else 
                               <div>
                                  <h2>No posts found</h2>
                                </div>
                              @endif
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
              
            </div>
      
      </div>
@endsection