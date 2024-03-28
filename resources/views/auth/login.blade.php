@extends('layouts.auth')
@section('title')
    Iniciar sesion
@endsection
@section('content')
    <div class="bg-white rounded shadow-xl p-10 w-10/12 md:w-2/3 lg:w-1/3">
        <form action="{{ route('login')}}" method="POST"  class="flex flex-col gap-5">
            @csrf
            <div class="flex justify-center">
                <img alt="logo" />
            </div>
            <span class="text-cyan-700 text-center">Utiliza tu cuenta</span>
            <h1 class="text-3xl text-cyan-800 text-center">Iniciar sesion</h1>
            @if(session('mensaje'))
                <span class="text-red-500 text-sm">{{ session('mensaje') }}</span>
            
            @endif
            @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
            <div class="flex flex-col gap-2 relative mb-5">
                <label for="email" class=" bg-white text-sm absolute -mt-3 left-5 px-2 text-cyan-800">email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="border border-gray-200 focus:outline-cyan-700 rounded-lg px-3 py-4 text-cyan-950 ">

            </div>
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            <div class="flex flex-col gap-2 relative mb-5">
                <label for="password" class=" bg-white text-sm absolute -mt-3 left-5 px-2 text-cyan-800">password</label>
                <input type="password" id="password" name="password"
                    class="border border-gray-200 focus:outline-cyan-700 rounded-lg px-3 py-4 text-cyan-950 ">

            </div>

            <input type="submit" value="Iniciar sesion" class="bg-cyan-700 w-full text-lg text-white font-semibold uppercase rounded-lg p-4">

        </form>

    </div>
@endsection
