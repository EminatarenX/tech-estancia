@extends('layouts.app')
@section('title', 'Información de ' . $user->name)

@section('content')
    <section class="relative h-96">
        <img src="{{asset('hero.jpg')}}" class="w-full h-full object-cover" alt="Img-empresa">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-4xl font-semibold text-white">Información de {{ $user->name }}</h1>
        </div>
       
    </section>
    <section class=" p-5 m-5">
        <article class="flex justify-between">
            <p class="text-gray-500 mt-2">En esta sección podrás ver la información del integrante del equipo de desarrollo de ASIT</p>
            <div class="flex gap-5">
                <button class="w-[200px] py-3 bg-cyan-600 rounded text-white font-semibold">
                    Editar
                </button>
                <button class="w-[200px] py-3 bg-rose-600 rounded text-white font-semibold">
                    Eliminar
                </button>
            </div>
        </article>
    
        <div class ="flex flex-col  mt-5">
          
            <p class="text-lg font-semibold text-cyan-600">Nombre: {{ $user->name }}</p>
            <p class="text-lg font-semibold text-cyan-600">Rol: {{ $user->role }}</p>
            <p class="text-lg font-semibold text-cyan-600">Email: {{ $user->email }}</p>


        </div>
    </section>
@endsection