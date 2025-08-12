@extends('layouts.app')

@section('title', 'Fitbit | Home')

@push('css')
    <style>
    body{
        background-color: #f3f3f3;
    }
    </style>
@endpush

@section('content')

    <div class="max-w-3xl mx-auto p-4">
        <x-alert2 type="success" class="mb-4">
            <x-slot name="titulo">
                Título Alerta
            </x-slot>
            Contenido de la alerta
        </x-alert2>

        <p>Welcome to Fitbit</p>
    </div>

    <h1 class="text-2xl font-bold mb-4">Panel de Administración</h1>
    <div class="grid grid-cols-3 gap-4">
        <a href="{{ route('users.index') }}" class="bg-blue-200 p-4 rounded shadow text-center">Usuarios</a>
        <a href="{{ route('disciplines.index') }}" class="bg-green-200 p-4 rounded shadow text-center">Disciplinas</a>
        <a href="{{ route('communities.index') }}" class="bg-yellow-200 p-4 rounded shadow text-center">Comunidades</a>
    </div>

@endsection
<!-- Plantilla básica con CDN TailwindCSS. Urgente diseñar vistas del CRUD y el Home Page-->