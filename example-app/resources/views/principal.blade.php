@extends('layouts.app')

@section('titulo')
    Página Principal
@endsection


@section('contenido')

<div class="">

  <div class="relative isolate px-6 pt-14 lg:px-8">

  
    <div class="mx-auto max-w-2xl py-30 sm:py-30 lg:py-0">
      <div class="text-center">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Tecnologías y Aplicaciones en Internet</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">Lorena Marisol Romero Hernández</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="/crear-cuenta" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</a>
          <a href="/login" class="text-sm font-semibold leading-6 text-gray-900">Login<span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>

  
  </div>
</div>

@endsection