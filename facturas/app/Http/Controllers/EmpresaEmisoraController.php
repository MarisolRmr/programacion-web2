<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\EmpresaEmisora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EmpresaEmisoraController extends Controller{
    
    //Redireccionar al dashboard de administrador
    public function index(User $user){
        return view('admin', [
            'user' => $user
        ]);
    }

    //Redireccionar al formulario para registrar empresa emisora
    public function register(User $user){
        return view('empresas.register_ee', [
            'user' => $user
        ]);
    }

    //Registrar empresa emisora
    public function store(Request $request){
        //dd("registrando empresa emisora");
        
        $this->validate($request, [
         'razon_social'=>'required',
         'correo_contacto'=>'required|email|unique:empresa_emisora',
         'rfc_emiso'=>'required'
        ]); 
        
        EmpresaEmisora::create([
			'razon_social'=>$request->razon_social,
			'correo_contacto'=> $request->correo_contacto, 
			'rfc_emiso'=>$request->rfc_emiso
		]);

        return back()->with('mensaje', 'Empresa Emisora Registrada Correctamente');
    }

    public function listado(User $user){

        $empresa_emisora = EmpresaEmisora::all();

        return view('listados.listado_ee', [
            'user' => $user,
            'empresa_emisora' => $empresa_emisora
        ]);
    }


    
}
