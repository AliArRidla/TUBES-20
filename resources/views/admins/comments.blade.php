@extends('admins.layouts.master')
@section('content')
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       @include('admins.layouts.sidebar')
       <div class="main-panel">
          <div class="content-wrapper">      
       <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h1 class="display-3">Comments</h1>   
                          <h4 class="card-title mb-0">Invoice</h4>
                          <a href="#"><small>Show All</small></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quod cupiditate esse fuga</p>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>Comments ID</th>
                                <th>User</th>                                
                                <th>Parent Comment</th>
                                <th>Comments</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>                                
                              @foreach ($comments as $item)
                              <tr>
                                <td>CM-00{{$item->id}}</td>
                                <td>U-00{{$item->user_id}}</td>
                                <td>PR-00{{$item->parent_id}}</td>    
                                <td>{{$item->body}}</td>    
                                <td>
                                  <a href="/comments/edit/{{$item->id}}" class="btn btn-success toolbar-item">edit</a>
                                  <a href="/comments/delete/{{$item->id}}" class="btn btn-danger toolbar-item">delete</a>
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
              
            </div>
      
      </div>
@endsection