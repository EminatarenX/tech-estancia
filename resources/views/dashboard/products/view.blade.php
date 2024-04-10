@extends('layouts.app')

@section('title')
    Productos {{ $product->name }}
@endsection


@section('content')
    <section class="flex justify-center">

        <div class="w-full flex flex-col gap-5 lg:justify-between">
            <div class="relative">
                <div class="bg-sky-950 w-full h-full absolute bg-opacity-80"></div>
                <img src="{{ asset('uploads/' . $product->image) }}" class="w-full h-72 object-cover" src=""
                alt="{{ $product->image }}" />
            </div>
            <div class="flex flex-col gap-5 lg:flex-row justify-center items-center">
                <div class="relative">
                    

                    <h1 class="text-4xl font-semibold text-cyan-600">{{ $product->name }}</h1>

                </div>
            </div>
            <div class="mt-10 flex justify-center">

                <div class="mt-5 w-full gap-10 flex lg:flex-row justify-center">
                    <div class="flex justify-center w-1/2 mx-5">
                        <img src="{{ asset('uploads/' . $product->image) }}" class="w-72 h-72 object-cover"
                            alt="{{ $product->image }}" />
                    </div>
                    <div class="flex flex-col justify-between mx-5">
                        <p class="text-gray-500 text-2xl mt-2">Precio: ${{ $product->price }}</p>
                        <p class="text-gray-500 text-2xl mt-2">Stock: {{ $product->stock }}</p>
                        <p class="text-gray-500 text-2xl mt-2">Categoria: {{ $product->category }}</p>
                        <div class="w-full ">
                            <p class="text-gray-500 text-2xl mt-2">Descripcion: {{ $product->description }}</p>

                        </div>
                        <div class="mt-10 flex gap-5">
                            <a {{-- href="{{ route('products.edit', $product->id) }}"  --}}
                                class="bg-cyan-600 text-white text-xl text-center font-semibold p-4 w-full rounded-lg hover:bg-cyan-700 transition-colors cursor-pointer ">
                                Editar
                            </a>
                            <form 
                            action="{{ route('products.destroy', $product) }}" method="POST"
                            class="w-full"
                            >    
                            @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-600 text-white text-xl text-center font-semibold p-4 w-full rounded-lg hover:bg-red-700 transition-colors cursor-pointer ">
                                    Eliminar
                                </button>


                        </div>
                    </div>
                </div>

            </div>

    </section>
@endsection
