<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

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
        $request['password'] = bcrypt($request->password);
        User::create($request->all());
        return redirect("/")->with("registered", "Práve si sa úspešne zaregistroval, teraz sa možeš prihlásiť");
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


    public function postLogin(Request $request) {
        $this->validate($request, [
            'email'  => 'required|email|max:255',
            'password'  => 'required|max:255',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect("/")->with("registered", "Práve si sa úspešne prihlásil.");
        }
        return redirect("/");
    }

    public function logOut() {
        Auth::logout();
        return redirect("/")->with("registered", "Práve si sa úspešne odhlásil.");
    }


}
