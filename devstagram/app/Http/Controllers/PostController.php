<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    //Contructor para protección de la url "dashboard"
    //El constructor es lo que se ejecuta cuando instancias un controlador
    
    public function __construct(){
        //Protegemos la URL
        //Al método index con el contructor le pasamos el parámetro de autenticación
        
        $this->middleware('auth')->except(['show', 'index']);
    }


    public function index(User $user){
        $posts = Post::where('user_id', $user->id)->latest()->paginate(8);
        //$post = Post::where('user_id', '=' , auth()->user()->id)->simplePaginate(4);
        
        return view('dashboard', [
            'user' => $user, 
            'posts' => $posts
        ]);
    }

    //Creando método "create" para formulario de publicaciones
    public function create(){
      return view('posts.create');

    }

    public function store(Request $request){
      $this->validate($request, [
        'titulo'=>"required|max:255",
        'descripcion'=>"required",
        'imagen'=>"required"
      ]);
      
      
      //Guardar los campos en  el modelo Post
     /* Post::create([
          'titulo'=>$request->titulo,
          'descripcion'=>$request->descripcion,
          'imagen'=>$request->imagen,
          //Identificamos el usuario autenticado
          'user_id'=>auth()->user()->id
      ]);*/

      //Guardar registro con relaciones (E-R)
      //"Post" es el nombre de la relación
      $request->user()->post()->create([
          'titulo'=>$request->titulo,
          'descripcion'=>$request->descripcion,
          'imagen'=>$request->imagen,
          //Identificamos el usuario autenticado
          'user_id'=>auth()->user()->id
      ]);


      //redireccionamos al muro principal
      return redirect()->route('posts.index', auth()->user()->username);
    }

    //Mostrar comentarios
    public function show(User $user, Post $post){

        return view('posts.show', [
            'user' => $user,
            'post' => $post
        ]);
    }

    //Eliminar publicaciones
    public function destroy(Post $post){
        $this->authorize('delete', $post);
        $post->delete();

        // Eliminar la imagen
        $imagen_path = public_path('uploads/' . $post->imagen);

        if(File::exists($imagen_path)) {
            unlink($imagen_path);
        }

        return redirect()->route('posts.index', auth()->user()->username);
    }

    

}
