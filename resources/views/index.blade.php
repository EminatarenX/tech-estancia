@extends('layouts.user')
@section('title', 'Sitio Web de Tecnología')
<?php
    $hero = ["hero.jpg","hero-2.jpg"];
    $herosize = 800;
?>

@section('content')
    <section class="relative min-h-[900px]">
        <div class="min-h-[900px] z-10 bg-opacity-70 w-full absolute bg-black ">
            <article class="flex md:flex-row flex-col justify-evenly min-h-[900px] items-center">
                <div>
                    <h1 class="text-white text-6xl font-semibold text-center md:text-left">ASIT</h1> 
                    <p class="text-white text-2xl font-semibold">Tu mejor opcion en tecnologia</p>
                </div>
                <div class="flex flex-col gap-5">
                    <h2 class="text-white text-2xl md:hidden ">Descubre nuestros produtos y servicios</h2>
                    <a href="#" class="bg-white text-black px-4 py-3 text-center rounded-full md:hidden font-semibold">Explorar</a>
                    <img src="{{asset('asit-logo-dark.jpeg')}}" class="rounded-full max-h-96 hidden md:block" alt="asit-logo">
                </div>

            </article>
        </div>
        <img src="/{{$hero[1]}}" alt="Hero" class="w-full object-cover min-h-[900px] max-h-[900px] absolute">
    </section>  
 
    <section class="container lg:flex lg:justify-between mx-auto my-20 gap-5 hidden flex-col lg:flex-row">
        <div class="flex gap-5 items-center">

            <div>
                <h3 class="text-neutral-700 font-bold text-4xl">
                    2,000+
                </h3> 
                <span class="text-neutral-800">
                    Clientes
                </span>
            </div>
        </div>
        <div class="flex gap-5 items-center">

            <div>
                <h3 class="text-neutral-700 font-bold text-4xl">
                    100+
                </h3> 
                <span class="text-neutral-800">
                    Proyectos terminados
                </span>
            </div>
        </div>
        <div class="flex gap-5 items-center">

            <div>
                <h3 class="text-neutral-700 font-bold text-4xl">
                    12,000+
                </h3> 
                <span class="text-neutral-800">
                    Productos vendidos
                </span>
            </div>
        </div>
        <div class="flex gap-5 items-center">

            <div>
                <h3 class="text-neutral-700 font-bold text-4xl">
                    +13 años
                </h3> 
                <span class="text-neutral-800">
                    En el mercado
                </span>
            </div>
        </div>
        
    </section>
    {{-- <hr class="mt-10">
    <section class="container mx-auto">
        <h2 class="text-3xl font-semibold text-center my-10">Productos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="bg-white p-5 rounded-lg shadow-md">
                <img src="{{asset('asit-logo-dark.jpeg')}}" alt="asit-logo" class="w-full h-52 object-cover rounded-lg">
                <h3 class="text-xl font-semibold my-2">Producto 1</h3>
                <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                <a href="#" class="text-blue-500 font-semibold">Ver más</a>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-md">
                <img src="{{asset('asit-logo-dark.jpeg')}}" alt="asit-logo" class="w-full h-52 object-cover rounded-lg">
                <h3 class="text-xl font-semibold my-2">Producto 2</h3>
                <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                <a href="#" class="text-blue-500 font-semibold">Ver más</a>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-md">
                <img src="{{asset('asit-logo-dark.jpeg')}}" alt="asit-logo" class="w-full h-52 object-cover rounded-lg">
                <h3 class="text-xl font-semibold my-2">Producto 3</h3>
                <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                <a href="#" class="text-blue-500 font-semibold">Ver más</a>
            </div>
            
        </div>  
    </section> --}}

    <hr class="mt-10">
    <section class="container mx-auto">
        <h2 class="text-3xl font-semibold text-center my-10">Sobre ASIT</h2>
        <div class="flex md:flex-row gap-10">
            <img src="{{asset('asit-logo-dark.jpeg')}}" alt="asit-logo" class="w-full h-52 object-cover rounded-lg">
            <p>Somos una empresa Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nam obcaecati dolorum porro voluptas magni iste veniam eum vitae. Quam animi voluptas dignissimos similique deserunt maxime recusandae explicabo voluptate! Tenetur.</p>
        </div>

    </section>
  

@endsection