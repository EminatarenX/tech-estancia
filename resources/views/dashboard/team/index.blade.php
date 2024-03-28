@extends('layouts.app')

@section('title')
    Equipo
@endsection
<?php

?>

@section('content')
    <section class="flex justify-center p-4 md:p-6">
        <div class="w-full">
            <div class="flex flex-col gap-5 lg:flex-row justify-between items-center">
                <div>
                    <h1 class="text-4xl font-semibold text-cyan-600">Equipo</h1>
                    <p class="text-gray-500 mt-2">En esta sección podrás ver a los integrantes del equipo de desarrollo de
                        ASIT</p>
                    </div>
                    <button type="button">
                        <a
                        href="{{route('team.create')}}"
                        class="bg-cyan-600 text-white font-semibold p-4 w-full rounded-lg hover:bg-cyan-700 transition-colors cursor-pointer ">
                        Nuevo integrante
                    </a>
                </button>
            </div>
            <article class="grid md:grid-cols-3 mt-10 gap-5">
                @foreach ($team as $member)
                    <a href="/dashboard/team/{{ $member['id'] }}" class="bg-white shadow-md rounded-md p-5">
                        <img src="{{ asset('user.png') }}" alt="{{ $member['name'] }}"
                            class=" hue-rotate-30 w-20 h-20 rounded-full mx-auto">
                        <h2 class="text-lg font-semibold text-cyan-600 mt-5">{{ $member['name'] }}</h2>
                        <p class="text-gray-500">{{ $member['role'] }}</p>
                    </a>
                @endforeach
            </article>
            <div class="mt-5">
                {{ $team->links('pagination::tailwind') }}
            </div>
        </div>

    </section>
@endsection
