<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Devstagram</title>
</head>

<body class="bg-gray-100">
    {{-- Encabezado --}}
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <a class=" font-bold uppercase text-gray-600 text-sm" href="/"><h1 class="text-5x1 font-black"> Devstagram </h1></a>
            {{-- Navegacion --}}
            <nav class="flex gap-2 items-center">
                <a class=" font-bold uppercase text-gray-600 text-sm" href="/login">Login</a>
                <a class=" font-bold uppercase text-gray-600 text-sm" href="/crear-cuenta">Register</a>
            </nav>
        </div>
    </header>

    {{-- Contenido para cada una de las vistas --}}
    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

    <br><br><br><br>

    {{-- Pie de pagina --}}
    <footer class="p-5 text-center text-gray-500 font-bold uppercase">
        @copy; Devstagram UPV - Todo los derechos reservados {{ date('Y') }}
    </footer>

</body>

</html>