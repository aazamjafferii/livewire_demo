<?php

namespace App\Livewire\Movies;

use App\Models\Movie;
use Livewire\Component;

class ShowAllMovies extends Component
{
    public $movies = [];

    public $status;

    public function render()
    {
        $this->movies = $this->getMovies();

        return view('livewire.movies.show-all-movies', ['movies' => $this->movies])->extends('layouts.default');
    }

    public function getMovies(){
        if( $this->status == null OR $this->status == "" ){
            return Movie::all();
        }

        return Movie::where('status', $this->status)->get();
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

    public function statusChanged(){
        $this->movies = $this->getMovies();
    }
}
