<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    protected $view = 'watched_movies_view';

    // protected $table = $this->view ? $this->view : 'movies';

    public static function showWatchedMovies(){
        $model = new Movie();

        $model->table = $model->view ?: $model->table;

        return $model->get();
    }
}
