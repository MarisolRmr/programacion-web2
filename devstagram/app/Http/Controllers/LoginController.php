<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        //Mostrar la vista de login de usuarios
        return view('auth.login');
    }
    
    //Validar formulario de login
    public function store(Request $request){
       $this->validate($request, [
        //Reglas de validación
        'email'=>'required|email',
        'password'=>'required'
       ]); 
       //Verificar que las credenciales sean correctas
       if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
        //Usar la directiva "with" para llenar los valores de la sesión
        return back()->with('mensaje', 'Credenciales incorrectas');
       }
       //Credenciales correctas
       return redirect()->route('posts.index', auth()->user()->username);
    }
}
