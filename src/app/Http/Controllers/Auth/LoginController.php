<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->withErrors([
                'status' => 'Password atau email anda salah'
            ]);
        }
        return redirect()->route('event');
    }

    public function logout(){
        dd('logout');
        auth()->logout();
        return redirect()->route('welcome');
    }
}
