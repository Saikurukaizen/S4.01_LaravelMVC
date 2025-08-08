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

@endsection
<!-- Plantilla básica con CDN TailwindCSS. Urgente diseñar vistas del CRUD y el Home Page-->