@extends('layouts.app')
@section('content')
        <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">            
            <img src="{{asset('storage/'.$movies->image)}}" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web design</li>
              <li><strong>Client</strong>: ASU Company</li>
              <li><strong>Project date</strong>: 01 March, 2020</li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>This is an example of portfolio detail</h2>
          <p>
            ini bener a ?
          </p>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
            <!-- Comments Form -->
              <div class="card">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                          <h4>Display Comments</h4>
                        @include('movies.comment_replies', ['comments' => $movies->comments, 'movie_id' => $movies->id])
                  <hr />
                  <h4>Tambah Comments</h4>
                  <form action="{{ route('comment.add') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <textarea class="form-control" name="comment_body" rows="3" placeholder="komentar anda"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="hidden" class="form-control" name="movie_id" value="{{$movies->id}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>    

      </div>
      </div>
    </section><!-- End Portfolio Details Section -->
@endsection