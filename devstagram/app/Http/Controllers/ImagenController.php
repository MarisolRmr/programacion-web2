<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    //Almacenamiento de imágenes
    public function store(Request $request){
        //Identificar el archivo que se sube en dropzone
        $imagen = $request->file('file');
        //Convertimos el arreglo $input a formato Json
        //return response()->json(['imagen'=>$imagen->extension()]);

        //Generar un ID único para cada una de las imágenes que se cargan al server
        $nombreImagen = Str::uuid() . ".". $imagen->extension();

        //Implentar intervetion image
        $imagenServidor = Image::make($imagen);

        //Agregamos efectos de Intervetion image: Indicamos la medida de cada imagen
        $imagenServidor->fit(1000, 1000);

        //Movemos la imagen a un lugar físico del server
        $imagenPath = public_path('uploads'). '/' . $nombreImagen;

        //Pasamos la imagen de memoria al server
        $imagenServidor->save($imagenPath);
        
        //Verificamos que el nombre del archivo se ponga como único
        return response()->json(['imagen'=>$nombreImagen]);
        
    }
}
