<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('styles')
    <title>ASIT - @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 relative">
    <header class="bg-black bg-opacity-70 text-white fixed top-0 z-30 w-full">
        <nav class="container mx-auto flex items-center justify-between p-4">
            <a  class="text-2xl font-bold">ASIT</a>
            <ul class="flex gap-10">
                <li><a  class="cursor-pointer hover:underline">Inicio</a></li>
                <li><a  class="cursor-pointer hover:underline">Productos</a></li>
                <li><a  class="cursor-pointer hover:underline">Servicios</a></li>
                <li><a  class="cursor-pointer hover:underline">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="">
        @yield('content')
        
    </main>
    
    <footer
        class="bg-black bg-opacity-90 text-white w-full p-5  mt-10 h-[500px] flex justify-center items-center">
        <p class="">ASIT - Todos los derechos reservados 2024</p
    >

    </footer>

</body>
</html>