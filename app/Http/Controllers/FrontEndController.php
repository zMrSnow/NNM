<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home() {
        return view("front.home");
    }

    public function anime() {
        $animes = Movie::all();
        return view("front.anime", compact("animes"));
    }
}
