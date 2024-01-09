<?php

namespace App\Livewire\Movies;

use App\Models\Movie;
use Livewire\Component;

class ShowAllMovies extends Component
{
    public $movies = [];

    public function render()
    {
        $this->movies = Movie::all();

        return view('livewire.movies.show-all-movies', ['movies' => $this->movies])->extends('layouts.default');
    }

    public function watched($id){
        $movie = Movie::find($id);

        $movie->status = 1;

        $movie->save();
    }

    public function unWatched($id){
        $movie = Movie::find($id);

        $movie->status = 0;

        $movie->save();
    }

    public function edit($id){
        return redirect("movies/$id/edit");
    }
}
