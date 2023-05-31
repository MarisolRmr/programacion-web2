<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
		return view('agregar');
	}

    public function store_agregar(Request $request){

        /*$this->validate($request,[
			'name' => 'required|min:5|max:25',
            'short_description' => 'required|min:5|max:25',
            'long_description' => 'required|min:5|max:255',
            'sale_price' => 'required|min:1',
            'purchase_price' => 'required|min:1',
            'stock' => 'required|min:1|max:25',
            'product_id' => 'required|min:1|unique:products',
            'fecha' => 'required|min:1',
            'peso' => 'required|min:1',
 		]);*/

        Productos::create([
            'name' => $request->name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'sale_price' => $request->sale_price,
            'purchase_price' => $request->purchase_price,
            'stock' => $request->stock,
            'product_id' => $request->id_producto,
            'fecha' => $request->registration_date,
            'peso' => $request->product_weight,
        ]);

        //Redirecciona a la tabla de productos
        return redirect()->route('productos_registrados');
    }

    public function store_ver(){

        $products = Productos::all();
        return view('productos')->with('products', $products);

    }

    public function store_delete($id){
        Productos::where('id', $id)->delete();
        return redirect()->route('productos_registrados');
    }

    
}


