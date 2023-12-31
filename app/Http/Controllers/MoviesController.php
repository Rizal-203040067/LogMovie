<?php

namespace App\Http\Controllers;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        return view('movies.index', [
            "movies" => Movie::latest()->filter(request(['search']))->get(),
        ]);
    }

    public function show(Movie $movie)
    {
    // Kirim data film yang dipilih dan film terkait ke tampilan
    return view('detail', [
        "movie" => $movie,
        "movies" => Movie::latest()->limit(5)->get()
    ]);
        
    }
    
}