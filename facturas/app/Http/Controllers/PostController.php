<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index(User $user){
        
        return view('admin', [
            'user' => $user
        ]);
    }

    public function registrar_ee(User $user){
        return view('empresas.register_ee', [
            'user' => $user
        ]);
    }

    public function registrar_er(User $user){
        return view('empresas.register_er', [
            'user' => $user
        ]);
    }

    
}
