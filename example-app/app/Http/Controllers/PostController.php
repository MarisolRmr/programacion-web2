<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller{
    //Constructor para la potección de la url dashboard/vista
    //El constructor es lo que se ejecuta cuando instancias un controlador
    public function __construct(){
        //Protegemos la url
        //Al método index con el constructor le pasamos el paramétro de autentificación
        $this->middleware('auth');
    }

    public function index(User $user){
        //dd($user->username);
        
        //Muestra la vista de dashboard
        return view('dashboard', [
            'user' => $user
        ]);
    }

    public function create(){
        //dd('creando posts'); 
        return view('posts.create');
    }
}
