<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('styles')
    <title>ASIT - @yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-100 flex ">
    <aside class=" h-screen w-1/6 flex flex-col lg:p-5">
       <div class="flex flex-col items-center gap-2 mt-10 ">
        {{-- <h2 class="text-3xl mb-2 text-cyan-600 font-semibold">
            ASIT
        </h2> --}}
        <img src="{{asset('asit-logo-dark.jpeg')}}" class="rounded-full" alt="Img-empresa" />

        <p class="text-xl font-semibold">{{auth()->user()->name}}</p>
        <span class="text-gray-500">{{auth()->user()->email}}</span>
       </div>
        <div class="flex flex-col justify-between h-full">
        <nav class="flex flex-col items-center mt-12 gap-5 ">
            <a href="{{route('dashboard.index')}}" class="{{Request::is('dashboard') ? 'bg-cyan-600 text-white' : 'bg-gray-200 text-gray-600'}} font-medium hover:text-white p-4 w-full rounded-lg hover:bg-cyan-600 transition-colors cursor-pointer ">
                Inicio
            </a>
            <a class="{{Request::is('dashboard/productos') ? 'bg-cyan-600 text-white' : 'bg-gray-200 text-gray-600'}} font-medium hover:text-white p-4 w-full rounded-lg hover:bg-cyan-600 transition-colors cursor-pointer ">
                Productos
            </a>
            <a href="{{route('products.create')}}" class="{{Request::is('dashboard/nuevo-producto') ? 'bg-cyan-600 text-white' : 'bg-gray-200 text-gray-600'}} font-medium hover:text-white p-4 w-full rounded-lg hover:bg-cyan-600 transition-colors cursor-pointer  ">
                Nuevo producto
            </a>
            @if(auth()->user()->role == 'super')
            <a 
                href="{{ route('team.index') }}"  
                class="{{Request::is('dashboard/team') ? 'bg-cyan-600 text-white' : 'bg-gray-200 text-gray-600'}} font-medium hover:text-white p-4 w-full rounded-lg hover:bg-cyan-600 transition-colors cursor-pointer ">
                Equipo
            </a>
            @endif
  
        
       </nav>
        <form action="{{ route('logout')}}" method="POST" >
            @csrf
            <button type="submit" class="bg-cyan-600 text-white font-semibold p-4 w-full rounded-lg hover:bg-red-600 transition-colors ">
                Cerrar sesion
            </button>
        </form>
    </div>

    </aside>
    <main class="bg-white my-5 mr-5 shadow rounded-2xl w-5/6 overflow-y-auto">
         @yield('content')
    </main>

</body>
</html>