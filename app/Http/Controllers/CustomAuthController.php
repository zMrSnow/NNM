<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CustomAuthController extends Controller
{

    /*
     * This function will take data from form
     * and insert it into database if its
     * valit by validation process
     */
    public function postRegister(Request $request)
    {
        $this->validation($request);
        User::create($request->all());
        return redirect("/")->with("registered", "Práve si sa úspešne zaregistroval.");
    }

    /*
     * Custom validation
     * fnction
     */
    public function validation($request)
    {
        return $this->validate($request, [
            'name' => 'required|max:255',
            'email'  => 'required|email|unique:users|max:255',
            'password'  => 'required|confirmed|max:255',
        ]);
    }
}
