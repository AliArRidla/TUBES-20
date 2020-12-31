<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Producer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $movies = Movie::all();
        $producers = Producer::all();
        return view('movies.tambah', compact('producers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function setor(Request $request)
    {
        // Validate the request...
        if ($request->file('file')) {
            $files = $request->file('file')->store('img/movies', 'public');
        }
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);
        $movie = new Movie();

        $movie->judul = $request->judul;
        $movie->id_produser = $request->id_produser;
        $movie->kategori = $request->kategori;
        $movie->deskripsi = $request->deskripsi;
        $movie->image = $files;
        $movie->save();
        return redirect()->route('home')
            ->with('success', 'Movie created successfully.');
        //Redirect ke halaman books/index.blade.php dengan pesan success
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movies)
    {
        return view('movies.detail', compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movies)
    {
        return view('movies.edit', compact('movies'));
    }


    public function update(Request $request, Movie $movie)
    {
        // Validate the request...
        if ($request->file('file')) {
            $files = $request->file('file')->store('img/movies', 'public');
        }
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);
        $movie = new Movie();

        $movie->judul = $request->judul;
        $movie->produser = $request->produser;
        $movie->kategori = $request->kategori;
        $movie->deskripsi = $request->deskripsi;
        $movie->image = $files;
        $movie->save();
        return redirect()->route('home')
            ->with('success', 'Movie created successfully.');
        //Redirect ke halaman books/index.blade.php dengan pesan success
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movies)
    {
        $movies = Movie::findOrFail($movies->id);
        $movies->delete();
        return redirect()->route('home')
            ->with('danger', 'Article deleted successfully.');
    }
}
