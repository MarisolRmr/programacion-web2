@extends('layouts.app')

@section('titulo')
    Registrate a Devstagram
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
            
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
                {{-- Nombre --}}
                <div class="mb-5">
                    <label for="name" class="block text-gray-500 text-sm font-bold mb-2 uppercase">Nombre</label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        placeholder="Tu nombre"
                        class="p-3 bg-gray-100 rounded-lg border border-gray-400 outline-none w-full @error('name') border-red-500 @enderror"
                        value="{{old('name')}}"/>

                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{$message}} </p>
                    @enderror
                </div>
            
                {{-- Usuario --}}
                <div class="mb-5">
                    <label for="username" class="block text-gray-500 text-sm font-bold mb-2 uppercase">Usuario</label>
                    <input type="text" name="username" id="username" placeholder="Tu usuario"
                    class="p-3 bg-gray-100 rounded-lg border border-gray-400 outline-none w-full @error('username') border-red-500 @enderror"
                    value="{{old('username')}}"/>
                    
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{$message}} </p>
                    @enderror
                </div>
                {{-- Email --}}
                <div class="mb-5">
                    <label for="email" class="block text-gray-500 text-sm font-bold mb-2 uppercase">Email</label>
                    <input type="email" name="email" id="email" placeholder="Tu email"
                    class="p-3 bg-gray-100 rounded-lg border border-gray-400 outline-none w-full @error('email') border-red-500 @enderror"
                    value="{{old('email')}}"/>
                    
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{$message}} </p>
                    @enderror
                </div>
                {{-- Password --}}
                <div class="mb-5">
                    <label for="password" class="block text-gray-500 text-sm font-bold mb-2 uppercase">Password</label>
                    <input type="password" name="password" id="password" placeholder="Tu password"
                    class="p-3 bg-gray-100 rounded-lg border border-gray-400 outline-none w-full @error('password') border-red-500 @enderror"
                    value="{{old('password')}}"/>
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{$message}} </p>
                    @enderror
                </div>
                {{-- Confirmar Password --}}
                <div class="mb-5">
                    <label for="password_confirmation"
                        class="block text-gray-500 text-sm font-bold mb-2 uppercase">Confirmar
                        Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Tu password"
                    class="p-3 bg-gray-100 rounded-lg border border-gray-400 outline-none w-full @error('password_confirmation') border-red-500 @enderror"
                    value="{{old('password_confirmation')}}"/>
                    @error('password_confirmation')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{$message}} </p>
                    @enderror
                </div>

                {{-- <input type="submit" value="Crear cuenta"
                    class="bg-sky-600 hover:bg-sky-700  font-bold" /> --}}

                {{-- Boton --}}
                <button type="submit" value="Crear cuenta" href="/home"
                    class="bg-blue-600 hover:bg-blue-700 font-bold text-white py-2 px-4 rounded-lg w-full transition-colors cursor-pointer uppercase">
                    Registrate
                </button>
            </form>
        </div>
    </div>
@endsection