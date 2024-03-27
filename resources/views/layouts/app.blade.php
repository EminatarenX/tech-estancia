<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('styles')
    <title>Tech-app - @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex ">
    <aside class=" h-screen w-1/6 flex flex-col lg:p-5">
       <div class="flex flex-col items-center gap-2 mt-10 appear-without-translate">
        <h2 class="text-3xl mb-10 text-cyan-600 font-semibold">
            Tech-app
        </h2>
        <img alt="Img-empresa" />

        <p class="text-xl font-semibold">Username</p>
        <span class="text-gray-500">+52 953 234 2342</span>
       </div>
        <div class="flex flex-col justify-between h-full">
        <nav class="flex flex-col items-center mt-12 gap-5 appear-without-translate">
            <a class="{{Request::is('productos') ? 'bg-cyan-600 text-white' : 'bg-gray-200 text-gray-600'}} font-medium hover:text-white p-4 w-full rounded-lg hover:bg-cyan-600 transition-colors cursor-pointer ">
                Productos
            </a>
            <a class="{{Request::is('nuevo-producto') ? 'bg-cyan-600 text-white' : 'bg-gray-200 text-gray-600'}} font-medium hover:text-white p-4 w-full rounded-lg hover:bg-cyan-600 transition-colors cursor-pointer  ">
                Nuevo producto
            </a>
            <a  class="{{Request::is('otra-opcion') ? 'bg-cyan-600 text-white' : 'bg-gray-200 text-gray-600'}} font-medium hover:text-white p-4 w-full rounded-lg hover:bg-cyan-600 transition-colors cursor-pointer ">
                Otra opcion
            </a>
            <a  class="bg-gray-200 text-gray-600 font-medium hover:text-white p-4 w-full rounded-lg hover:bg-cyan-600 transition-colors cursor-pointer ">
                Alguna otra opcion
            </a>
            <a  class="bg-gray-200 text-gray-600 font-medium hover:text-white p-4 w-full rounded-lg hover:bg-cyan-600 transition-colors cursor-pointer ">
                Ultima upcion
            </a>
        
       </nav>
         <button class="bg-cyan-600 text-white font-semibold p-4 w-full rounded-lg hover:bg-red-600 transition-colors appear-without-translate">
              Cerrar sesion
            </button>
    </div>

    </aside>
    <main class="bg-white my-5 mr-5 shadow rounded-2xl w-5/6 overflow-y-auto">
         @yield('content')
    </main>

</body>
</html>