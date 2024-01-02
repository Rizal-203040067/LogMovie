<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index()
    {
        return view('movies.index', [
            "movies" => Movie::latest()->filter(request(['search']))->get(),
        ]);
    }
    public function sort()
    {
        $movies = Movie::latest()
        ->filter(request(['search']))
        ->when(request()->has('sort'), function ($query) {
            // Tambahkan logic sortir sesuai kebutuhan
            $sortField = request('sort', 'title');
            $sortDirection = request('direction', 'asc');
            $sortDirection = request('direction', 'asc');

            return $query->orderBy($sortField, $sortDirection);
        })
        ->get();

        return view('movies.sort', compact('movies'));
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