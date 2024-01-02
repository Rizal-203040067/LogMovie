<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $categories){
        
        $categories = Category::all();
        return view('movies.categories', [
            'categories' => Category::all()
        ]);
        dd($categories);
    }
    public function show(Category $category)
    {
    // Kirim data film yang dipilih dan film terkait ke tampilan
    return view('movies.categories', [
        "category" => $category,
        "categories" => Category::latest()->limit(5)->get()
    ]);
        
    }
}
