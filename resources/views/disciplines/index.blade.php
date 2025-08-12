<x-app-layout>

    <h1>Lista de disciplinas</h1>

    <ul>
         @foreach($disciplines as $discipline)
            <li>
                <a href="{{ route('disciplines.show', $discipline->id) }}">
                    {{ $discipline->name }}
                </a>
            </li>
         @endforeach

    </ul>

</x-app-layout>