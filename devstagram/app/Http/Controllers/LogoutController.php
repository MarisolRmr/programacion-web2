<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store(){
        //dd("logout");
        //Cerrar sesión con el helper auth implementando el método logout
        auth()->logout();
        //Enviar a la vista de login
        return redirect()->route('login');
    }
    
}
