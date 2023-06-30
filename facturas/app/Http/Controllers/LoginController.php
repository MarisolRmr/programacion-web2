<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller{
    public function login(){
        return view('auth.login');
    }

    public function store(Request $request){
        
        $request->validate([
            'email' => 'required|email|max:60',
            'password' => 'required|min:1',
        ]);

       
        if (!auth()->attempt($request->only(['email', 'password']), $request->remember)) {
            return back()->with('mensaje', 'Usuario o contraseña incorrectos');
        }
 
        return redirect()->route('posts.index', auth()->user() );
    }
}
