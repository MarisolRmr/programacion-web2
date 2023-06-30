@extends('layouts.app')

@section('titulo')
    Datos de la Empresa Receptora
@endsection

@section('contenido')

    <div class="md:flex md:justify-center md:gap-8 md:items-center ">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/register.png') }}" alt="Imagen login de usuarios" >
        </div>

        <div class="container mx-auto px-4 py-8">
            <form class="max-w-2xl mx-auto bg-white shadow-md rounded-md px-6 py-8">
              <div class="mb-4">
                <label for="id" class="block text-gray-700 text-sm font-bold mb-2">ID:</label>
                <input type="text" id="id" name="id" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Ingresa el ID">
              </div>
              <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Ingresa el nombre">
              </div>
              <div class="mb-4">
                <label for="direccion" class="block text-gray-700 text-sm font-bold mb-2">Dirección:</label>
                <input type="text" id="direccion" name="direccion" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Ingresa la dirección">
              </div>
              <div class="mb-4">
                <label for="rfc" class="block text-gray-700 text-sm font-bold mb-2">RFC:</label>
                <input type="text" id="rfc" name="rfc" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Ingresa el RFC">
              </div>
              <div class="mb-4">
                <label for="contacto" class="block text-gray-700 text-sm font-bold mb-2">Contacto:</label>
                <input type="text" id="contacto" name="contacto" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Ingresa el contacto">
              </div>
              <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Ingresa el email">
              </div>
              <div class="flex justify-center">
                <button type="submit" class="bg-indigo-500 text-white px-6 py-3 rounded-md font-bold">Guardar</button>
              </div>
            </form>
          </div>
          
    </div>

@endsection

