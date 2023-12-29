<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Bagian Rizal FE
// use App\Http\Controllers\GetImagesController;
// use App\Models\Post;
// use App\Http\Controllers\PostController;
// use App\Models\Category;
// use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/logout', function () {
    return view('google');
});

Route::get('/sort', function () {
    return view ('sort', [
        "title" => "Sort",
        "active" => 'sort',
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('google.redirect');;
Route::get('/google/redirect', [LoginController::class, 'handleGoogleCallback'])->name('google.callback');

// Bagian Rizal FE
// Route::get('/about', function () {
//     return view ('about', [
//         "title" => "About",
//         "active" => 'about',
//         "name" => "Rizal Baihaqi",
//         "email" => "203040067@mail.unpas.ac.id",
//         "image" => "rizal.jpg"
//     ]);
// });

// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Route::get('/categories', function() {
//     return view('categories', [
//         'title' => 'Post Categories',
//         "active" => 'categories',
//         'categories' => Category::all()
//     ]);
// });





