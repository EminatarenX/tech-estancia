@extends('layouts.app')

@section('title')
    Nuevo producto
@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('content')
    <section class="p-5">
        <form id="dropzone" action="/imagenes" class="dropzone border-dashed border-w w-full h-96 rounded flex flex-col justify-center items-center">
            @csrf
        </form>

        <div class="w-full">
            <div class="flex flex-col gap-5 lg:flex-row justify-between items-center">
                <div>
                    <h1 class="text-4xl font-semibold text-cyan-600 mt-5">Nuevo producto</h1>
                    <p class="text-gray-500 mt-2">En esta sección podrás agregar un nuevo producto a la tienda de
                        ASIT</p>
                </div>
            </div>
            <form  method="POST" class="mt-10">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="name" class="block text-gray-500">Nombre</label>
                        <input type="text" name="name" id="name" class="p-3 w-full mt-1 outline-none border-b-2" required>
                    </div>
      
                    <div>
                        <label for="category" class="block text-gray-500">Categoria</label>
                       <select name="category" id="category" class="p-3 w-full text-neutral-600 mt-1 outline-none border-b-2" >
                            <option class="text-neutral-800" value="1">Categoria 1</option>
                            <option class="text-neutral-800" value="2">Categoria 2</option>
                            <option class="text-neutral-800" value="3">Categoria 3</option> 
                       </select>
                    </div>
                    <div>
                        <label for="stock" class="block text-gray-500">Cantidad</label>
                        <input type="number" name="stock" id="stock" class="p-3 w-full mt-1 outline-none border-b-2" required>
                    </div>
                    <div>
                        <label for="price" class="block text-gray-500">Precio</label>
                        <input type="text" name="price" id="price" class="p-3 w-full mt-1 outline-none border-b-2" required>
                    </div>
                </div>
                <div class="mt-5">
                    <button type="submit"
                        class="bg-cyan-600 text-white font-semibold p-4 w-full rounded-lg hover:bg-cyan-700 transition-colors cursor-pointer ">
                        Guardar
                    </button>
                </div>
            </form>
        </div>

    
    </section>
@endsection