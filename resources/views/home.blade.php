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
        <h1 class="text-2xl font-bold mb-4">Bienvenido a FitBit</h1>
        <br>
        <p>
            Este es el Dashboard del panel de administración. Selecciona una opción
            del menú de navegación para ver el contenido. Dispondrás de un listado de cada categoría
            con una funcionalidad CRUD en cada una de ellas. Puedes volver al Dashboard clicando en 
            el botón del menú de navegación.

            Desarrollado por Marc Sanchez
        </p>

    </div>

@endsection
<!-- Plantilla básica con CDN TailwindCSS. Urgente diseñar vistas del CRUD y el Home Page-->