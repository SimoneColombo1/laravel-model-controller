<?php

namespace App\Http\Controllers\Guest;
use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index(){
        $movies=Movie::all();

        return view('guest.movies.index',compact('movies'));
    }
}
