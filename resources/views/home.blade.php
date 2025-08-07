<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Fitbit - HomePage</title>
</head>
<body>
    <div class="max-w-3xl mx-auto p-4">
        <h1>Welcome to Fitbit!</h1>

        <x-alert type="info">
            <x-slot name="titulo">
                Título Alerta
            </x-slot>
            Contenido de la alerta
        </x-alert>

    </div>
</body>
</html>

<!-- Plantilla básica con CDN TailwindCSS. Urgente diseñar vistas del CRUD y el Home Page-->