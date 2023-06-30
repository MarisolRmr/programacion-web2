@extends('layouts.app')

@section('titulo')
Datos de la Empresa Emisora
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
                <label for="razon_social" class="block text-gray-700 text-sm font-bold mb-2">Razón social:</label>
                <input type="text" id="razon_social" name="razon_social" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Ingresa la razón social">
              </div>
              <div class="mb-4">
                <label for="correo_contacto" class="block text-gray-700 text-sm font-bold mb-2">Correo de contacto:</label>
                <input type="email" id="correo_contacto" name="correo_contacto" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Ingresa el correo de contacto">
              </div>
              <div class="mb-4">
                <label for="rfc_emiso" class="block text-gray-700 text-sm font-bold mb-2">RFC emisor:</label>
                <input type="text" id="rfc_emiso" name="rfc_emiso" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Ingresa el RFC emisor">
              </div>
              <div class="flex justify-center">
                <button type="submit" class="bg-indigo-500 text-white px-6 py-3 rounded-md font-bold">Guardar</button>
              </div>
            </form>
          </div>
    </div>

@endsection

