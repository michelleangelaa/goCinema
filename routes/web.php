<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('movies/create', function(){
    return view('movies.create');
});
Route::get('movies/index', function(){
    return view('movies.index');
});
Route::resource('cinemas', CinemaController::class);
Route::get('cinemas/index', function(){
    return view('cinemas.index');
});

Route::view('welcome', 'movies/index', [
    'title' => 'Avatar',
]);
// Route::get('/movie', [MovieController::class, 'index']);
Route::resource('movies', MovieController::class);


Auth::routes(['register' => true, 'reset' => true, 'verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
