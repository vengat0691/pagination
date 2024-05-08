<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::paginate(10); // Change 10 to desired items per page
        return view('index', compact('movies'));
    }
}