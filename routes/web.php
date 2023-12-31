<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\DeleteAccountController;
use App\Models\Category;
use Laravel\Socialite\Facades\Socialite;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


// Route::get('/dashboard', function() {
//     return view('dashboard.index');
// })->middleware('auth');


//Authentication
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/', function () {
    return view('dashboard', [
        "title" => "Dashboard",
        "active" => 'dashboard',
    ]);
});

Route::get('/detail', function () {
    return view('detail', [
        "title" => "Detail",
        "active" => 'detail',
    ]);
});

Route::get('/logout', function () {
    return view('google', [
        "title" => "Logout",
        "active" => 'logout',
    ]);
});

Route::get('/sort', function () {
    return view ('sort', [
        "title" => "Sort",
        "active" => 'sort',
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/password/update', [PasswordController::class, 'index']);
Route::post('/password/update', [PasswordController::class, 'update'])->name('password.update');

Route::get('/account/delete', [DeleteAccountController::class, 'index'])->name('account.delete.form');
Route::delete('/account/delete', [DeleteAccountController::class, 'destroy'])->name('account.delete');

//Authentication google
Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/redirect', [LoginController::class, 'handleGoogleCallback'])->name('login');

//API MOVIE
Route::get('/', [MoviesController::class, 'index']);
Route::get('/movie/{movie:slug}', [MoviesController::class, 'show'])->name('movies.show');

//Category
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'movie' => $category->movie,
    ]);
});

//dashboard
// web.php
Route::get('/dashboard/checkSlug', [DashboardController::class, 'checkSlug'])->middleware('auth');
//Route::get('/dashboard/{movie:slug}/edit', [DashboardController::class, 'edit'])->name('dashboard.edit');
Route::resource('/dashboard', DashboardController::class)->middleware('auth');




// Route::get('/dashboard/movies', [DashboardController::class, 'index'])->middleware('auth');
//Route::resource('/dashboard/categories', [CategoryController::class, 'store'])->middleware('auth');
