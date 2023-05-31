<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller{
   
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(User $user){
        return view('principal');
    }

    public function add(User $user){
        return view('agregar');
    }

    public function see(User $user){
        return view('productos');
    }
}
