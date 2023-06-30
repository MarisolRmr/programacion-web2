<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Estilos de tailwind --}}
    @vite('resources/css/app.css')
    {{-- Scripts de tailwind --}}
    @vite('resources/js/app.js')
    <title>Facturas</title>
</head>

<body class="bg-purple-100">

    <header class="p-5 border-b bg-purple-400 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <button id="sidebar-toggle" class="mr-4 focus:outline-none">
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16"></path>
                    </svg>
                </button>
                <a href="{{ route('home') }}" class="text-3xl font-black text-black-800">
                    Facturas
                </a>
            </div>

            @auth
                <nav class="flex gap-2 items-center">
                    <a class="font-bold text-black-600 text-sm"
                        href="{{ route('posts.index', auth()->user()->username ) }}">
                        <span class="font-normal">
                            {{ auth()->user()->username }}
                        </span>
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="font-bold uppercase text-black-600 text-sm">
                            Cerrar Sesión
                        </button>
                    </form>
                </nav>
            @endauth

            @guest
                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-black-600 text-sm" href="{{ route('login') }}">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="font-bold uppercase text-black-600 text-sm">
                        Crear Cuenta
                    </a>
                </nav>
            @endguest

        </div>
    </header>

    <div class="flex">
        <aside id="sidebar" class="bg-purple-400 w-64 min-h-screen">
            <nav class="py-4">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('posts.index', auth()->user()->username ) }}" class="block py-2 px-4 text-black font-bold hover:bg-purple-500 hover:text-white">{{ auth()->user()->username }}</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}" class="block py-2 px-4 text-black hover:bg-purple-500 hover:text-white">Facturas</a>
                    </li>
                    <li>
                        <a href= "{{ route('posts.createEE', auth()->user()->username ) }}" class="block py-2 px-4 text-black hover:bg-purple-500 hover:text-white">Registrar Empresa Emisora</a>
                        <ul class="ml-4 space-y-2">
                            <li><a href="#" class="block py-2 px-4 text-black hover:bg-purple-500 hover:text-white">Listado de Empresas Emisoras</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href= "{{ route('posts.createER', auth()->user()->username ) }}" class="block py-2 px-4 text-black hover:bg-purple-500 hover:text-white">Registrar Empresa Receptora</a>
                        <ul class="ml-4 space-y-2">
                            <li><a href="#" class="block py-2 px-4 text-black hover:bg-purple-500 hover:text-white">Listado de Empresas Receptoras</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="container mx-auto mt-10 flex-grow">
            <h2 class="font-black text-center text-pink-800 text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>
    </div>

    <footer class="mt-10 text-center p-5 text-purple-500 font-bold uppercase">
        Lorena Marisol Romero Hernández - Todos los derechos reservados
        {{ now()->year }}
    </footer>

    <script>
        document.getElementById('sidebar-toggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('hidden');
        });
    </script>
</body>

</html>
