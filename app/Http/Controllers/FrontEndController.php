<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home() {
        return view("front.home");
    }

    public function anime() {
        return view("front.anime");
    }
}
