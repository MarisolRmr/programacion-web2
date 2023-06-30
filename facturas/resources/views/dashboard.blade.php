@extends('layouts.app')

@section('titulo')
    Consulta tu factura
@endsection

@section('contenido')

<div class="md:flex md:justify-center md:gap-8 md:items-center ">
    <div class="md:w-4/12 p-5">
        <img src="{{ asset('img/docs.png') }}" alt="Imagen login de usuarios" >
    </div>

    <div class="md:w-6/12 bg-white p-6 rounded-lg shadow-xl">
        <form>
            <div class="mb-4">
              <label for="empresa" class="block text-gray-700 text-sm font-bold mb-2">Empresa emisora:</label>
              <input type="text" id="empresa" name="empresa" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Ingresa la empresa emisora">
            </div>
            <div class="mb-4">
              <label for="rfc_receptor" class="block text-gray-700 text-sm font-bold mb-2">RFC (receptor):</label>
              <input type="text" id="rfc_receptor" name="rfc_receptor" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Ingresa el RFC del receptor">
            </div>
            <div class="mb-4">
              <label for="razon_social_receptor" class="block text-gray-700 text-sm font-bold mb-2">Razón social (receptor):</label>
              <input type="text" id="razon_social_receptor" name="razon_social_receptor" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Ingresa la razón social del receptor">
            </div>
            <div class="mb-4">
              <label for="folio_factura" class="block text-gray-700 text-sm font-bold mb-2">Folio de factura (opcional):</label>
              <input type="text" id="folio_factura" name="folio_factura" class="w-full border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Ingresa el folio de la factura (opcional)">
            </div>
            <div class="flex justify-center">
              <button type="submit" class="bg-indigo-500 text-white px-6 py-3 rounded-md font-bold">Consultar</button>
            </div>
          </form>
    </div>
</div>


  
@endsection
