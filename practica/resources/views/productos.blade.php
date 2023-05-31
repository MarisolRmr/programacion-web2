@extends('layouts.app')

@section('titulo')

  @auth
    Productos Registrados
  @endauth

  @guest
    Práctica U1 - 2030112
  @endguest


@endsection


@section('contenido')

@auth
<div class="w-full">
	<table class="min-w-full bg-white">
	  <thead>
		<tr>
		  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
			ID
		  </th>
		  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
			Nombre
		  </th>
		  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
			Descripción corta
		  </th>
		  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
			Descripción larga
		  </th>
		  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
			Precio de venta
		  </th>
		  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
			Precio de compra
		  </th>
		  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
			Stock
		  </th>
		  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
			Fecha de ingreso de registro
		  </th>
		  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
			Peso del producto
		  </th>
		  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
			Opciones
		  </th>
		</tr>
	  </thead>
	  
	  <tbody>
		@foreach ($products as $product)
		
		<tr>
		  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
			<span class="text-sm leading-5 font-medium text-gray-900">{{ $product->id }}</span>
		  </td>
		  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
			<span class="text-sm leading-5 font-medium text-gray-900">{{ $product->name }}</span>
		  </td>
		  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
			<span class="text-sm leading-5 font-medium text-gray-900">{{ $product->short_description }}</span>
		  </td>
		  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
			<span class="text-sm leading-5 font-medium text-gray-900">{{ $product->long_description }}</span>
		  </td>
		  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
			<span class="text-sm leading-5 font-medium text-gray-900">{{ $product->sale_price }}</span>
		  </td>
		  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
			<span class="text-sm leading-5 font-medium text-gray-900">{{ $product->purchase_price }}</span>
		  </td>
		  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
			<span class="text-sm leading-5 font-medium text-gray-900">{{ $product->stock }}</span>
		  </td>
		  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
			<span class="text-sm leading-5 font-medium text-gray-900">{{ $product->fecha }}</span>
		  </td>
		  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
			<span class="text-sm leading-5 font-medium text-gray-900">{{ $product->peso }} kg</span>
		  </td>
		  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
			
			<form action="{{ route('delete_productos', ['id' => $product->id]) }}" method="POST"
				class="inline">
				@csrf
				@method('DELETE')
				<button type="submit"
					class="bg-blue-600 text-white rounded-md py-2 px-4 text-center text-sm font-semibold hover:bg-red-700 transition-colors duration-300 ease-in-out">
					Eliminar
				</button>
			</form>

		  </td>
		</tr>
		@endforeach
		
	  </tbody>
	</table>
  </div>
  
@endauth

@guest
<div class="">

  <div class="relative isolate px-6 pt-14 lg:px-8">

    <div class="mx-auto max-w-2xl py-30 sm:py-30 lg:py-0">
      <div class="text-center">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Tecnologías y Aplicaciones en Internet</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">Lorena Marisol Romero Hernández</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="/crear" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Crear Cuenta</a>
          <a href="/login" class="text-sm font-semibold leading-6 text-gray-900">Iniciar Sesión<span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
  
  </div>
</div>
@endguest

@endsection