<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Movie;
use App\Producer;
use Illuminate\Http\Request;

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
        return view('admins.movies.home', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.movies.tambah');
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
        return redirect()->route('dashboard')
            ->with('success', 'Movie created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function show(Movies $movies)
    {
        //
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
    public function update(Request $request, Movies $movies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movies $movies)
    {
        //
    }
}
