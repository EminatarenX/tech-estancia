<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('styles')
    <title>ASIT - @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <main class="h-screen bg-gradient-to-r from-cyan-700 to-cyan-800 flex justify-center items-center">
        @yield('content')
    </main>

</body>
</html>