<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Fitbit')</title>

<script src="https://cdn.tailwindcss.com"></script>
<script src="//unpkg.com/alpinejs" defer></script>
    {{-- iconos, logos, etc --}}
    {{-- tipografía --}}

    @stack('css')
</head>
<body class="bg-gradient-to-r from-blue-100 to-fuchsia-100">
    <div class="container mx-auto px-4 pb-6 ">
        <img src="{{ asset('images/banner.jpg') }}" alt="Banner" class="w-full h-48 object-cover mb-4">

        @include('components.nav')

        <br>

        @if(session('success') && !request()->routeIs('home'))
            <x-alert2 type="success" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-4 rounded ">
                <x-slot name="titulo">
                    ¡Éxito!
                </x-slot>
                {{ session('success') }}
            </x-alert2>
        @endif

        @yield('content')

        <footer class="mt-8"></footer>
    </div>
    @stack('js')
</body>
</html>