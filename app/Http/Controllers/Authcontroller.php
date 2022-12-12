<?php

namespace App\Http\Controllers;
use Illuminate\Auth\SessionGuard;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class Authcontroller extends Controller
{
    public function login(){
     return view('auth.login');
    }
    public function authenticate(Request $request){
     $request->validate([
        
        'email'=>"required|email",
        'password'=>"required",
        
     ]);

if (auth()->attempt($request->only("email","password"))) {
    return view('dashboard');
}
return redirect()->back()->withErrors('Les indentifiants ne correspondent pas.');
    }
    public function logout(){
       auth()->logout();
       return view("welcome");
    }
}
