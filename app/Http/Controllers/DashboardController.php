<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        
        // $userId = auth()->user()->id;
        // // Menampilkan daftar film yang dimiliki oleh pengguna yang sedang login
        // $movies = Movie::where('user_id', auth()->user()->id)->get();
        return view('dashboard.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tampilkan formulir untuk menambah film
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan oleh formulir
        
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'overview' => 'required',
            'popularity' => 'required',
            'poster_path' => 'required',
            'backdrop_path' => 'required',
            'release_date' => 'required',
            'category_id' => 'required',
        ]);

        // Handle upload gambar jika ada
            if ($request->hasFile('poster_path')) {
            $imagePath = $request->file('poster_path')->store('movie_image');
            $validatedData['poster_path'] = $imagePath;
            }
            if ($request->hasFile('backdrop_path')) {
            $imagePath = $request->file('backdrop_path')->store('movie_image');
            $validatedData['backdrop_path'] = $imagePath;
            }
            Movie::create($validatedData);
            return redirect('/dashboard')->with('success', 'Film Berhasil ditambahkan');
    }

    public function show(Movie $movie) {
        return view('dashboard.show', [
            'movie' => $movie,
            'categories' => $movie->category, // Jika relasinya sudah diatur dengan baik
        ]);
    }
    
    public function edit(Movie $movie)
    {
        // Tampilkan formulir untuk mengedit film
        return view('dashboard.edit',[
            'movie' => $movie,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Movie $movie)
    {
        // Validasi data yang dikirimkan oleh formulir
        $validatedData = $request->validate([
            'title' => 'required',
            'overview' => 'required',
            'popularity' => 'required',
            'poster_path' => 'image|mimes:jpeg,png,jpg,gif',
            'backdrop_path' => 'required',
            'release_date' => 'required',
            'category_id' => 'required',
            'slug' => 'required',
        ]);
    
        // Penanganan file poster
        if ($request->file('poster_path')) {
            if ($movie->poster_path) {
                Storage::delete($movie->poster_path);
            }
            $validatedData['poster_path'] = $request->file('poster_path')->store('movie_images');
        }
    
        // Penanganan file backdrop
        if ($request->file('backdrop_path')) {
            if ($movie->backdrop_path) {
                Storage::delete($movie->backdrop_path);
            }
            $validatedData['backdrop_path'] = $request->file('backdrop_path')->store('movie_images');
        }
    
        // Update data di dalam database
        $movie->update($validatedData);
        return $validatedData;
        return redirect('/dashboard')->with('success', 'Film berhasil diperbarui.');
    }
    
    public function destroy($id)
    {
    // Temukan Movie berdasarkan ID
    $movie = Movie::find($id);

    if ($movie) {
        // Hapus file poster jika ada
        if ($movie->poster_path || $movie->backdrop_path) {
            Storage::delete($movie->poster_path);
            Storage::delete($movie->backdrop_path);
        }
        
        // Hapus Movie dari database
        $movie->delete();

        return redirect('/dashboard')->with('success', 'Film berhasil dihapus.');
        } else {
        return redirect('/dashboard')->with('error', 'Film tidak ditemukan.');
        }
    }

    
}
