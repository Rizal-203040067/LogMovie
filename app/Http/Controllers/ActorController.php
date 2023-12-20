<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apiKey = config('services.tmdb.api_key');
        $response = Http::get("https://api.themoviedb.org/3/person/popular?api_key={$apiKey}&language=en-US");

        $actors = $response->json()['results'];
        dd($actors);
        foreach ($actors as $actorData) {
        }
        return view('actors.index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $apiKey = config('services.tmdb.api_key');
        $response = Http::get("https://api.themoviedb.org/3/person/{$id}?api_key={$apiKey}");
        $actor = $response->json();
        // dd($actor);
        return view('actors.show', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
