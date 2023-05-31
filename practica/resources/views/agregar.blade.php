@extends('layouts.app')

@section('titulo')
	Agregar Productos
@endsection

@section('contenido')


<div class="w-full max-w-md mx-auto">
	<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('agregar_productos')}}" method="POST" novalidate>
		@csrf
		
	  <div class="grid grid-cols-2 gap-4">
		<div class="col-span-2"> 
			<label class="block text-gray-700 text-sm font-bold mb-2" for="name">
				ID
			  </label>
			  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id_producto" name="id_producto" type="text" placeholder="ID">
			  
			</div>
		<div>
		  <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
			Nombre
		  </label>
		  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Nombre">
		  @error('name')
		  <span class="text-xs text-red-500 border-red-600 rounded">{{ $message }}</span>
	  	@enderror
		</div>
		<div>
		  <label class="block text-gray-700 text-sm font-bold mb-2" for="short_description">
			Descripción corta
		  </label>
		  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="short_description" type="text" placeholder="Descripción corta" name="short_description">
		  @error('short_description')
		  <span class="text-xs text-red-500 border-red-600 rounded">{{ $message }}</span>
	  @enderror
		</div>
		<div class="col-span-2">
		  <label class="block text-gray-700 text-sm font-bold mb-2" for="long_description">
			Descripción larga
		  </label>
		  <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="long_description" placeholder="Descripción larga" name="long_description"></textarea>
		  @error('long_description')
		  <span class="text-xs text-red-500 border-red-600 rounded">{{ $message }}</span>
	  @enderror
		</div>
		<div>
		  <label class="block text-gray-700 text-sm font-bold mb-2" for="sale-price">
			Precio de venta
		  </label>
		  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="sale_price" type="text" placeholder="Precio de venta" name="sale_price">
		  @error('sale_price')
		  <span class="text-xs text-red-500 border-red-600 rounded">{{ $message }}</span>
	  @enderror
		</div>
		<div>
		  <label class="block text-gray-700 text-sm font-bold mb-2" for="purchase-price">
			Precio de compra
		  </label>
		  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="purchase_price" type="text" placeholder="Precio de compra" name="purchase_price">
		  @error('purchase_price')
		  <span class="text-xs text-red-500 border-red-600 rounded">{{ $message }}</span>
	  @enderror
		</div>
		<div>
		  <label class="block text-gray-700 text-sm font-bold mb-2" for="stock">
			Stock
		  </label>
		  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="stock" type="text" placeholder="Stock" name="stock">
		  @error('stock')
		  <span class="text-xs text-red-500 border-red-600 rounded">{{ $message }}</span>
	  @enderror
		</div>
		<div>
		  <label class="block text-gray-700 text-sm font-bold mb-2" for="registration_date">
			Fecha de ingreso de registro
		  </label>
		  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="registration_date" type="date" name="registration_date">
		  @error('fecha')
		  <span class="text-xs text-red-500 border-red-600 rounded">{{ $message }}</span>
	  @enderror
		</div>
		<div>
		  <label class="block text-gray-700 text-sm font-bold mb-2" for="product_weight">
			Peso del producto
		  </label>
		  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_weight" type="text" placeholder="Peso del producto" name="product_weight">
		  @error('peso')
		  <span class="text-xs text-red-500 border-red-600 rounded">{{ $message }}</span>
	  @enderror
		</div>
	  </div>
	  <div class="flex items-center justify-center mt-4">
		<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
		  Enviar
		</button>
	  </div>
	</form>
  </div>
  

@endsection