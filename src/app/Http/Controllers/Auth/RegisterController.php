<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('register');
    }

    public function register(Request $request){
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|max:255',
        
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
        
        try {
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name, 
                'phone_number' => $request->phone_number,
                'role_id' => 2,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
            return redirect()->route('login')->with('status', 'Your account has been created');
        } catch (\Exception $e) {
            dd($e->getMessage());

            return back()->withErrors('Whoops! Something went wrong.'. $e->getMessage());
        }
    }
}
