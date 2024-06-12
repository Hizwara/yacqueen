<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    // Index Function
    public function index (){

        return view("signup");
    }

    public function signup (Request $request){

        $creditional = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // dd($creditional);
       if (User::create($creditional)){
            return redirect()->route('login_home');
       };
       return back()->withErrors([
        'loginError' => 'The provided credentials do not match our records.',
    ]);

    }
}
