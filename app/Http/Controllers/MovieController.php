<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //
    public function index()
    {
        // select all moveies
        $movies = Movie::limit(10)
            ->orderBy('title')
            ->get();

        $events = CinemaEvents::where('begins_at', '2018-06-12 20:00:00')
            ->get();

        // prepare the view
        $view = view('movies/index');

        $view->movies = $movies;
        
        // return the view
        return $view;
    }
}
