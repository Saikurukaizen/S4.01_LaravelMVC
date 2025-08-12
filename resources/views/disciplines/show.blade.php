<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitbit | Disciplines</title>

    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    {{-- iconos, logos, etc --}}
    {{-- tipografía --}}
</head>
<body>

    <a href="{{ route('disciplines.index') }}">Volver a la lista de disciplinas</a>
    <h1>Disciplina: {{ $discipline->name }} </h1>
    <p>Descripción: {{ $discipline->description }}</p>

</body>
</html>