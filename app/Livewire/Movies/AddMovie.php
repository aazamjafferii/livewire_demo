<?php

namespace App\Livewire\Movies;

use App\Models\Movie;
use Livewire\Component;

class AddMovie extends Component
{
    public $movie_id;

    public $name;
    
    public $additional;
    
    public $status = 0;

    public function mount($id = null){
        $movie = Movie::find($id);

        if( $movie ){
            $this->movie_id = $movie->id;

            $this->name = $movie->name;

            $this->additional = $movie->additional;

            $this->status = $movie->status;
        }
    }

    public function render()
    {
        return view('livewire.movies.add-movie')
            ->extends('layouts.default');
    }

    public function save(){
        $id = [
            'id' => $this->movie_id,
        ];

        $data = [
            'name' => $this->name,
            'additional' => $this->additional,
            'status' => $this->status,
        ];

        Movie::updateOrCreate($id, $data);
        
        return redirect('movies');
    }
}
