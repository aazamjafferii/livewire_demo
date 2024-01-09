<?php

use App\Livewire\Counter;
use App\Livewire\Movies\AddMovie;
use App\Livewire\Movies\ShowAllMovies;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('counter', Counter::class);

Route::get('counter', Counter::class);

Route::prefix('movies')->group(function(){
    Route::get('/', ShowAllMovies::class);

    Route::get('/add', AddMovie::class);

    Route::get('/{id}/edit', AddMovie::class);
});

