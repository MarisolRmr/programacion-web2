<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FacturaController extends Controller{
    public function registrar_fa(User $user){
        return view('empresas.register_factura', [
            'user' => $user
        ]);
    }
}
