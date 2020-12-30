@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="display-3 mt-4 mb-0">Edit Data</h1>
        <img src="{{asset('storage/'.$movies->image)}}" width="100%" class="img-fluid" alt="">
        <form class="login" method="POST" action="/update/{{$movies -> id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" value="{{$movies -> judul}}">
            </div>      
             <div class="form-group">
                <label for="produser">Produser</label>
                <input type="text" name="produser" class="form-control" id="produser" value="{{$movies -> produser}}">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" class="form-control" id="kategori" value="{{$movies -> kategori}}">
            </div>      
            <div class="form-group">
                <label for="deskripsi">Deskrispsi</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{$movies -> deskripsi}}">
            </div>            
            <div class="form-group">
               <label for="file">Gambar</label>               
                <input type="file" name="file" class="form-control" id="file" placeholder="Masukkan image">
            </div>           
            <button type="submit" class="btn btn-primary mb-3 ">Create</button>
        </form>
    </div>
   
@endsection