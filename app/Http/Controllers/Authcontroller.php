<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'username' => 'required', 
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            // return response($credentials);
            return redirect('/home');
        }
    }

}
