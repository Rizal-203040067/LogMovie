<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\DeleteAccountController;

use Laravel\Socialite\Facades\Socialite;

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
    return view('welcome');
});


//Authentication
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
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

//API TMDB MOVIE
Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('movies.show');
