<?php

namespace App\Http\Controllers\admins;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Movie;
use App\Producer;
use Illuminate\Http\Request;
use PDF;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        $comments = Comment::all();
        $producers = Producer::all();
        return view('admins.movies.home', compact(['movies'], ['comments'], ['producers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = Movie::all();
        $producers = Producer::all();
        return view('admins.movies.tambah', compact('producers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $movie->kategori = $request->kategori;
        $movie->deskripsi = $request->deskripsi;
        $movie->id_produser = $request->id_produser;
        $movie->image = $files;
        $movie->save();
        return redirect()->route('movies')
            ->with('success', 'Movie created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movies)
    {
        $comments = Comment::find($movies->id);
        return view();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movies)
    {
        return view('admins.movies.edit', compact('movies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movies)
    {
        //
    }
    public function print()
    {
        $movie = Movie::all();
        $pdf = PDF::loadView('admins.movies.print', compact('movie'));
        return $pdf->download('laporan_movies.pdf');
        // return $pdf->download('laporan.pdf');
    }
}
