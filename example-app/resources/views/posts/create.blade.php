@extends('layouts.app')

@section('titulo')
    Crear Nueva Publicación
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="/IMAGENES" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">

            </form>
        </div>

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
               
                {{-- Título --}}
                <div class="mb-5">
                    <label for="titulo" class="block text-gray-500 text-sm font-bold mb-2 uppercase">Título</label>
                    <input 
                        type="text" 
                        name="titulo" 
                        id="titulo" 
                        placeholder="Título del la Publicación"
                        class="border p-3 w-full rounded-lg @error('titulo') border-red-500 @enderror"
                        value="{{old('titulo')}}"/>

                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{$message}} </p>
                    @enderror
                </div>

                {{-- Descripción --}}
                <div class="mb-5">
                    <label for="descripcion" class="block text-gray-500 text-sm font-bold mb-2 uppercase">Descripción</label>
                    <textarea 
                        id="descripcion"
                        name="descripcion" 
                        type="text" 
                        placeholder="Descripción del la Publicación"
                        class="border p-3 w-full rounded-lg @error('descripcion') border-red-500 @enderror"
                        >{{old('descripcion')}}</textarea>

                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{$message}} </p>
                    @enderror
                </div>

                {{-- Boton --}}
                <input 
                type="submit" 
                value="Crear Publicación" 
                href="/home" 
                class="bg-blue-600 hover:bg-blue-700 font-bold text-white py-2 px-4 rounded-lg w-full transition-colors cursor-pointer uppercase">

            </form>
        </div>

    </div>
@endsection