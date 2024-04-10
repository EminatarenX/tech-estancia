@extends('layouts.app')

@section('title')
    Productos
@endsection

@section('content')
    <section class="flex justify-center p-4 md:p-6">
        <div class="w-full">
            <div class="flex flex-col gap-5 lg:flex-row justify-between items-center">
                <div>
                    <h1 class="text-4xl font-semibold text-cyan-600">Productos</h1>
                    <p class="text-gray-500 mt-2">En esta sección podrás ver todos los productos de la empresa</p>
                </div>
            </div>
            <div class="mt-10">
                <table class="w-full">
                    <thead>
                        <tr class="text-left">
                            <th class="font-semibold text-gray-500">Imagen</th>
                            <th class="font-semibold text-gray-500">Nombre</th>
                            <th class="font-semibold text-gray-500">Precio</th>
                            <th class="font-semibold text-gray-500">Stock</th>
                            <th class="font-semibold text-gray-500 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="border-b border-gray-200">
                                <td class="p-3"><img src="{{asset('uploads/'.$product['image'])}}" alt="{{$product['image']}}" class="h-10 w-12 object-cover" /></td>
                                <td class="p-3">{{ $product['name'] }}</td>
                                <td class="p-3">{{ $product['price'] }}</td>
                                <td class="p-3">{{ $product['stock'] }}</td>
                                <td class="p-3 flex justify-center gap-10">
                                    <a 
                                    {{-- href="{{ route('products.edit', $product['id']) }}" --}}
                                        class="text-cyan-600 font-semibold ">Editar</a>
                                   <a 
                                    href="{{ route('products.view', $product['id']) }}" 
                                   class="text-slate-600 font-semibold ver-detalles">Ver detalles</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="mt-10">
                    {{ $products->links('pagination::tailwind') }}
                </div>
            </div>
        </div>

    </section>
@endsection
