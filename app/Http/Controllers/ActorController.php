<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function getActorInfo($actorId)
    {
        $apiKey = config('services.tmdb.api_key');
        $url = "https://api.themoviedb.org/3/person/{$actorId}?api_key={$apiKey}";

        $client = new Client();
        $response = $client->get($url);
        $actorData = json_decode($response->getBody(), true);

        return view('actor', ['actor' => $actorData]);
    }
    public function getAllActors()
    {
        $movies = Movie::all();
        $apiKey = config('services.tmdb.api_key');
        $url = "https://api.themoviedb.org/3/person/popular?api_key={$apiKey}";

        $client = new Client();
        $response = $client->get($url);
        $actorsData = json_decode($response->getBody(), true)['results'];
        return view('actor', ['actors' => $actorsData]);
        }
    }