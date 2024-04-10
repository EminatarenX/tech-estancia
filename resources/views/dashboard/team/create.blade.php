@extends('layouts.app')

@section('title')
    Nuevo integrante
@endsection

@section('content')
    <section
        class="flex justify-center p-4 md:p-6">
        <div class="w-full">
            <div class="flex flex-col gap-5 lg:flex-row justify-between items-center">
                <div>
                    <h1 class="text-4xl font-semibold text-cyan-600">Nuevo integrante</h1>
                    <p class="text-gray-500 mt-2">En esta sección podrás agregar un nuevo integrante al equipo de desarrollo de
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
                        <label for="email" class="block text-gray-500">Correo electronico</label>
                        <input type="email" name="email" id="email" class="p-3 w-full mt-1 outline-none border-b-2" required>
                    </div>
                    <div>
                        <label for="password" class="block text-gray-500">Contrasena temporal</label>
                        <input type="text" name="password" id="password" class="p-3 w-full mt-1 outline-none border-b-2" required>
                    </div>
                    <div>
                        <label for="role" class="block text-gray-500">Rol</label>
                        <select name="role" id="role" class="p-3 w-full text-neutral-600 mt-1 outline-none border-b-2" >
                            <option class="text-neutral-800" value="super">Superadmin</option>
                            <option class="text-neutral-800" value="admin">Administrador</option>
                            <option class="text-neutral-800" value="dev">Desarrollador</option>
                        </select>
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