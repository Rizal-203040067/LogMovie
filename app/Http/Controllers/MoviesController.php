<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\Movie;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(Request $request)
    {
        
        $apiKey = config('services.tmdb.api_key');
        $response = Http::get("https://api.themoviedb.org/3/movie/popular?api_key=$apiKey&page=1&page_size=10");
        if (auth()->check()) {
        $movies = $response->json(['results']);
        //dd($movies);
        $searchQuery = $request->input('search');

        if ($searchQuery) {
            $movies = Movie::where('title', 'like', "%$searchQuery%")->get();
        } else {
            $movies = $response->json()['results'];
        }
        foreach ($movies as $movie) {
            Movie::updateOrInsert(
               
            [
                'title' => $movie['title'],
                'overview' => $movie['overview'],
                'popularity' => $movie['popularity'],
                'poster_path' => $movie['poster_path'],
                'backdrop_path' => $movie['backdrop_path'],
                'vote_average' => $movie['vote_average'],
                'release_date' => $movie['release_date'],
                'tmdb_id' => $movie['id'],
            ]);
        }
        //$movies = Movie::take(10)->get();
        return view('movies.index', compact('movies'));
    } else {
        // Jika pengguna belum login, alihkan ke halaman login
        return redirect('/');
    }
    }

    public function show($id, Request $request)
    {
        $apiKey = config('services.tmdb.api_key');
        $response = Http::get("https://api.themoviedb.org/3/movie/{$id}?api_key={$apiKey}&append_to_response=videos");
        $movie = $response->json();
        $movie['videos']['results'] = array_slice($movie['videos']['results'], 0, 3);  
        $genres = $movie['genres'];
        
        //dd($movie);
        
        return view('movies.show', compact('movie'));
    }
}
