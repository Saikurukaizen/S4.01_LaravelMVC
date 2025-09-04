@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <h1 class="text-6xl font-bold text-fuchsia-600 mb-4">404</h1>
        <p class="text-xl text-gray-700 mb-6">Página no encontrada</p>
        <a href="{{ route('home') }}" class="bg-fuchsia-600 text-white px-6 py-2 rounded shadow hover:bg-fuchsia-700 transition">Volver al inicio</a>
    </div>
@endsection
