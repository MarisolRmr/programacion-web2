@extends('layouts.app')

@section('titulo')
    Login Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        {{-- Div para la imagen --}}
        <div class=" md:w-6/12 p-5">
            {{-- Invocar mi imagen register --}}
            <img class="w-full" src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuarios">
        </div>
        {{-- Div para el formulario --}}
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form>
                {{-- Usuario --}}
                <div class="mb-5">
                    <label for="username" class="block text-gray-500 text-sm font-bold mb-2 uppercase">Usuario</label>
                    <input type="text" name="username" id="username" placeholder="Tu usuario"
                        class="p-3 bg-gray-100 rounded-lg border border-gray-400 outline-none w-full" />
                </div>
                {{-- Password --}}
                <div class="mb-5">
                    <label for="password" class="block text-gray-500 text-sm font-bold mb-2 uppercase">Password</label>
                    <input type="password" name="password" id="password" placeholder="Tu password"
                        class="p-3 bg-gray-100 rounded-lg border border-gray-400 outline-none w-full" />
                </div>

                {{-- <input type="submit" value="Crear cuenta"
                    class="bg-sky-600 hover:bg-sky-700  font-bold" /> --}}

                {{-- Boton --}}
                <button type="submit" value="Crear cuenta" href="/home"
                    class="bg-blue-600 hover:bg-blue-700 font-bold text-white py-2 px-4 rounded-lg w-full transition-colors cursor-pointer uppercase">
                    Iniciar Sesión
                </button>
            </form>
        </div>
    </div>
@endsection