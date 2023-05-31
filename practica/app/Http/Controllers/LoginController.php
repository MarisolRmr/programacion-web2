<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	//Mostrar la vista del login de usuarios
    public function index(){
		return view('auth.login');
	}

	// Validar formulario de Login
	public function store(Request $request){
		//dd('Autentificando');
		
		$this->validate($request,[
			//Reglas de validación
			'email' => 'required|email',
			'password' => 'required'
 		]);

		//Verificar que las credenciales son correctas
		if(!auth()->attempt($request->only('email','password'))){
			//Usar la directiva "with" para llenar los valores de la sesión
			return back()->with('mensaje', 'Credenciales incorrectas');
		}

		//Redireccionar
		return redirect()->route('post.index');
		//return view('principal');


	}
}
