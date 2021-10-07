<?php

namespace App\Http\Controllers;

use App\Models\ovie;

class MovieController extends Controller
{
    //
    public function index(){
        $movies = [];
        dd($movies);
        return view('index', compact('movies'));
    }
}
