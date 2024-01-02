<?php

use App\Models\Category;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TmdbController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeleteAccountController;
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


Route::get('/', [MoviesController::class, 'index']);
Route::get('/movie', [MoviesController::class, 'sort'])->name('movies.sort');
Route::get('/movie/{movie:slug}', [MoviesController::class, 'show'])->name('movies.show');


//TMDB
Route::get('/film', [TmdbController::class], 'index');
Route::get('/film/{movie:slug}', [TmdbController::class], 'show');
// routes/web.php
Route::get('/actor/{actorId}', [ActorController::class], 'getActorInfo')->name('actors.index');;
Route::get('/actor', [ActorController::class, 'getAllActors'])->name('actors.index');;


//Category
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category', [CategoryController::class, 'show'])->name('movies.categories');

//dashboard
// web.php
// Route::get('/dashboard/checkSlug', [DashboardController::class, 'checkSlug'])->middleware('auth');
// //Route::get('/dashboard/{movie:slug}/edit', [DashboardController::class, 'edit'])->name('dashboard.edit');
Route::resource('/dashboard', DashboardController::class)->middleware('auth');




// Route::get('/dashboard/movies', [DashboardController::class, 'index'])->middleware('auth');
//Route::resource('/dashboard/categories', [CategoryController::class, 'store'])->middleware('auth');
