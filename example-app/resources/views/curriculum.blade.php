@extends('layouts.app')

@section('titulo')
    Currículum
@endsection

@section('contenido')
<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
  <!--<img src="/images/back.png" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">-->
  <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Lorena Marisol Romero Hernández</h2>
      <p class="mt-6 text-lg leading-8 text-gray-300">
        Me considero una persona responsable, dinámica y creativa,
        con facilidad de adaptación y capacidad para trabajar tanto
        en lo individual como en equipo.</p>
    </div>
    <br> <br>
    <div class="mx-auto max-w-2xl lg:mx-0">
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10" style="display: flex;">
        <p>Desarrollo de Software </p>
        <p>Networking </p>
        <p>Inglés </p>
        <p>Design </p>
      </div>
    </div>
  </div>
</div>
@endsection