<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index() {

        $movies = Movie::all();

        return view("movies.index",["movies"=>$movies]);
    }

    public function show(Movie $movie) {
        return view("movies.show",["movie"=> $movie]);
    }

    public function create() {
        return view("movies.create");
    }

    public function store() {
        
    }

    public function edit() {
        return view("movies.edit");
    }

    public function update() {

    }

    public function destory() {

    }
}
