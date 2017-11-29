<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class AnimeController extends Controller
{

    public function show($id) {
        $anime = Movie::findOrFail($id);
        return view("front.animeShow", compact("anime"));
    }
}
