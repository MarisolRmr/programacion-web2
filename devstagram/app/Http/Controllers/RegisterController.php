<?php

namespace App\Http\Controllers;
use auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //Crear nuestro primer método del controlador
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){

        //Modificamos el Request para que no se repitan los "username"
        $request->request-> add(['username'=>Str::slug($request->username)]);
        //Validaciones del formulario de registro
        $this->validate($request,[
           
            'name'=>'required|min:5|max:30',
            'username'=>'required|unique:users|min:3|max:20',
            'email'=>'required|unique:users|email|max:60',
            'password'=>'required|confirmed|min:6',
            'password_confirmation'=>'',
        ]);
        //dd('Mensaje: Creando cuenta...');

        //Invocar el modelo User para crear el registro
        User::create([
			'name'=>$request->name,
			'username'=> $request->username, 
			'email'=>$request->email,
			'password'=> Hash::make($request->password)
		]);


        //Autenticar un usuario con el método "attemp"
            //Opcion 1
          /*  auth()->attempt([
                'email'=>$request->email,
                'password'=>$request->password
            ]);*/

            //Opcion 2
            auth()->attempt($request->only('email', 'password'));

        //Redireccionando
        return redirect()->route('posts.index', auth()->user()->username);
    }
}
