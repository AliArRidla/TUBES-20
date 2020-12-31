@extends('layouts.app')
@section('content')
    <div class="container">
        <form class="login" method="POST" action="/setor" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul">
            </div>      
            <div class="form-group">
                <label for="produser">Produser</label>
                <select name="id_produser" class="form-control" id="produser" placeholder="Masukkan nama produser">
                    @foreach ($producers as $item)
                    <option value="{{$item -> id}}">{{$item -> nama}}</option>    
                    @endforeach                    
                </select>
                {{-- <input type="text" name="produser" class="form-control" id="produser" placeholder="Masukkan nama produser"> --}}
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori" class="form-control" id="kategori">
                    <option value="aksi">Aksi</option>
                    <option value="romantis">Romantis</option>
                    <option value="anime">Anime</option>
                </select>
                {{-- <input type="text" name="kategori" class="form-control" id="kategori" placeholder="Masukkan kategori"> --}}
            </div>      
            <div class="form-group">
                <label for="deskripsi">Deskrispsi</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan deskripsi">
            </div>            
            <div class="form-group">
               <label for="file">Gambar</label>
                <input type="file" name="file" class="form-control" id="file" placeholder="Masukkan image">
            </div>           
            <button type="submit" class="btn btn-primary mb-3 ">Create</button>
        </form>
    </div>
   
@endsection