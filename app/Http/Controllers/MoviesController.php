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
        return view('movies.show', [
            "movie" => $movie
        ]);
       
    }
    
}